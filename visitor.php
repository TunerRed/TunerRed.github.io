<?php

global $comment_start;
global $length_per_page;
global $comments;
$length_per_page = 10;
$comment_start = 0;
$total_comments = 0;
$comments = array();
function submit_comment($str){
	
}
function submit_reply($comment_id,$str){

}
function previous_comment(){

    global $comment_start;
    global $length_per_page;
    $comment_start -= $length_per_page;
    if ($comment_start < 0){
        $comment_start = 0;
        echo "<script type='text/javascript'>alert('已经是第一页！')</script>";
    }
    else
        showComments();
}
function next_comment(){

    global $comment_start;
    global $length_per_page;
    $comment_start += $length_per_page;
    $total = check_n_comments();
    if ($comment_start > $total){
        $comment_start -= $length_per_page;
        echo "<script type='text/javascript'>alert('已经是最后一页！')</script>";
    }
    else
        showComments();
}
function check_n_comments(){
    connect();
    return 0;
}
function showComments(){
	for ($i = 0; $i < 3; $i++)
	echo '
    <div class="comment">
		        <div class="user_info">
			        <div class="user_head">head</div>
			        <div class="user_name">name</div>
		        </div>
		        <div class="user_comment">
			        <div class="main_comment">main</div>
			        <div class="line"></div>
			        <div class="reply_comment">reply1</div>
			        <div class="reply_comment">reply2</div>
			        <form action="'
							.htmlspecialchars($_SERVER["PHP_SELF"].
								"?kind=reply&id="."u00".$i)
							.'" method="post">
				        <div class="reply_button">回复<input type="text"></div>
			        </form>
		        </div>
	        </div>
	        <div class="clear"></div>
	        ';
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
            switch ($_GET['kind']){
                case 'comment':
                    echo "<script type='text/javascript'>alert('comment')</script>";
                    break;
                case 'reply':
                    break;
                default:
                    break;
            }
            showComments();
            ?>
        </div>
	    <div class="clearfix"></div>

        <div class="more">
            <span id="previous">&longleftarrow;</span>
            <span id="next">&longrightarrow;</span>
        </div>
	    <div class="clear"></div>

        <div class="divider"></div>

	    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]."?kind=comment")?>">
			<div class="editor">
			    <div id="editor_area"><textarea value="editor" ></textarea></div>
			    <input id="editor_submit" type="submit" value="push">
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