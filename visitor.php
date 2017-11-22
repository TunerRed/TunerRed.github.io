<?php

global $comment_start;
global $length_per_page;
global $comments;
global $con;
global $head_path;
global $page;
$page = 0;
$length_per_page = 10;
$head_path='style/images/head/75X75/';

function connect()
{
    global $con;
    $con = mysqli_connect("localhost","root","root");
    if (!$con)
    {
        die('Could not connect: ' . mysqli_error());
        return false;
    }

    global $db;
    $db = mysqli_select_db($con, 'web');
    if (!$db)
    {
        die("could not connect to the db:".mysqli_error($db));
    }

    return true;
}


function submit_comment($comment){
	if (strlen($comment)<=0)return;
    $comment = htmlspecialchars($comment);
    global $con;
	if (!connect())return;
	$user_name = $_COOKIE['d_user'];
    $result = mysqli_query($con,"SELECT commentID FROM comment ORDER BY TIME DESC ");
    $last = mysqli_fetch_array($result)['commentID'];
	$last++;
    $sql = "INSERT INTO comment(user,time,comment,commentID) VALUES ('"
        ."$user_name"
        ."',now(),'"
        ."$comment"
        ."','"
        ."$last"
        ."')";
    mysqli_query($con,$sql);

}
function submit_reply($to_id,$comment){
    if (strlen($comment)<=0)return;
    $comment = htmlspecialchars($comment);
    global $con;
    if (!connect())return;
    $user_name = $_COOKIE['d_user'];
    $result = mysqli_query($con,"SELECT commentID FROM reply ORDER BY TIME DESC ");
    $last = mysqli_fetch_array($result)['commentID'];
    $last++;
    $sql = "INSERT INTO reply(user,time,comment,commentID,replyTo) VALUES ('"
        ."$user_name"
        ."',now(),'"
        ."$comment"
        ."','"
        ."$last"
        ."','"
        ."$to_id"
        ."');";
    mysqli_query($con,$sql);
}
function previous_page(){

    global $comment_start;
    global $length_per_page,$page;
    if ($comment_start - $length_per_page < 0){
        $comment_start = 0;
        echo "<script type='text/javascript'>alert('已经是第一页！')</script>";
    }
    else{
        $comment_start -= $length_per_page;
        $page--;
    }
}
function next_page(){

    global $comment_start;
    global $length_per_page,$page;
    $total = check_n_comments();
    if ($comment_start + $length_per_page >= $total){
        echo "<script type='text/javascript'>alert('已经是最后一页！')</script>";
    }
    else{
        $comment_start += $length_per_page;
        $page++;
    }
}
function jump_page($tar_page){
    global $comment_start;
    global $length_per_page;
    $total = check_n_comments();
    if ($tar_page*$length_per_page >= $total){
        echo "<script type='text/javascript'>alert('不合法的请求！')</script>";
    }
    else{
        $comment_start = $tar_page*$length_per_page;
    }
}
function check_n_comments(){
	global $con;
    if (!connect()) return 0;
    $result = mysqli_query($con,"SELECT COUNT(*) as count FROM comment");
    return mysqli_fetch_array($result)['count'];
}
function check_n_reply($to_id){
    global $con;
    if (!connect()) return 0;
    $result = mysqli_query($con,"SELECT COUNT(*) as count FROM reply WHERE replyTo='".$to_id."';");
    return mysqli_fetch_array($result)['count'];
}
function showComments(){
    global $con,$head_path,$comment_start,$length_per_page;
    if(!connect())
        return;
    $output = '';
    $result = mysqli_query($con,"SELECT * FROM comment ORDER BY TIME DESC ");
    for ($i = 0; $i < $comment_start; $i++){
        if(!mysqli_fetch_array($result))break;
    }
	for ($i = 0; $i < $length_per_page; $i++)
	{
		if ($row = mysqli_fetch_array($result)){
			$user_name = $row['user'];
			//head pics
			$head = mysqli_query($con,"SELECT head FROM login WHERE user='".$user_name."'");
            $head_row = mysqli_fetch_array($head);
			if ($head_row && !is_null($head_row['head']))
				$head = $head_path.$head_row['head'];
			else
				$head = $head_path.'../default.png';
			//main comment
			//enter or change line should be a problem
			$comment = str_replace("\n","<br/>",$row['comment']);
			$reply_count = check_n_reply($row['commentID']);
            $output.= '
            <div class="comment">
		        <div class="user_info">
			        <div class="user_head" style="background-image: url('."'".$head."'".')"></div>
			        <div class="user_name">'.$user_name.'</div>
		        </div>
		        
		        <div class="user_comment">
			        <div class="main_comment">'.$comment.'</div>
			        <div class="comment_time">'.$row['time'].'</div>
			        <div class="line"></div>';

            //reply from others
            $reply_result = mysqli_query($con,"SELECT * FROM reply WHERE replyTo='".$row['commentID']."' ORDER BY TIME DESC ");
            for ($j = 0; $j < $reply_count; $j++){
            	$reply_row = mysqli_fetch_array($reply_result);
                $output.='<div class="reply"><span class="reply_user">'
	                .$reply_row['user']
	                .'</span> 回复 <span class="reply_user">'
	                .$user_name
	                .'</span> ： <span class="reply_comment">'
	                .str_replace("\n","<br/>",$reply_row['comment'])
	                .'</span></div>';
            }

            //submit your reply
            $output.='
			        <form action="'
                .htmlspecialchars($_SERVER["PHP_SELF"].
                    "?kind=reply&to=".$row['commentID'])
                .'" method="post">
				        <div class="reply_button">';

			//already login or not
            if(isset($_COOKIE['d_user']))
                $output.= ' 回复<input type="text" name="reply" required>';

            $output.= '</div>
			        </form>
		        </div>
	        </div>
	        <div class="clear"></div>';
		}
		else
			break;
	}
    echo $output;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>留言簿</title>
    <link rel="stylesheet" type="text/css" href="style/css/style.css" media="all" />
    <link rel="stylesheet" type="text/css" href="style/css/visitor.css" media="all" />
    <script type="text/javascript" src="style/js/jquery-1.5.min.js"></script>
    <style>
        body {
            margin: auto;
            font-size: 14px;
        }
    </style>

</head>
<body>

<?php include("style/header.php");?>

<div id="container">
    <div id="header1"></div>
    <div id="wrapper">
        <p>留言</p>
        <div class="divider"></div>
        <br>
        <div class="list">
            <?php
            if ($_GET['kind']){
                switch ($_GET['kind']){
                    case 'comment':
                        submit_comment($_POST['textarea']);
                        break;
                    case 'reply':
                        submit_reply($_GET['to'],$_POST['reply']);
                        break;
	                case 'page':
	                	$page = $_GET['page'];
	                	$comment_start = $page * $length_per_page;
	                	if ($_POST['previous']){
                            previous_page();
		                }else if ($_POST['next']){
                            next_page();
		                }else if ($_POST['jump']){
		                	if (is_numeric($_POST['jump']))
                                jump_page($_POST['jump']-1);
                        }
	                	break;
                    default:
                        break;
                }
            }
            showComments();
            ?>
        </div>
	    <div class="clearfix"></div>

	    <form method="post" action="<?php global $page;echo htmlspecialchars($_SERVER["PHP_SELF"]."?kind=page&page=".$page)?>">
		    <div class="more">
			    <input type="submit" name="previous" value="<<<">
			    <input id="jump" type="text" name="jump" placeHolder="<?php echo $page+1;?>">/<?php
			    echo (int)((check_n_comments()+$length_per_page-1)/$length_per_page)?>
			    <input type="submit" name="next" value=">>>">
		    </div>
	    </form>

	    <div class="clear"></div>

        <div class="divider"></div>

	    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]."?kind=comment")?>">
			<div class="editor">
			    <div id="editor_area"><textarea name="textarea" aria-multiline="true" required></textarea></div>
				<?php
				if (isset($_COOKIE['d_user']))
					echo '<input id="editor_submit" type="submit" value="发表意见">';
				else
					echo '<div id="editor_submit">请先登录</div>'
				?>

            </div>
	    </form>

	    <br><br>
	    <div class="clear"></div>
        <div class="clearfix"></div>
    </div>
    <div class="clear"></div>
</div>

<?php include("style/footer.html");?>

</body>
</html>