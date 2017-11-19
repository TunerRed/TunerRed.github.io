<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style/css/style.css" media="all" />
	<link rel="stylesheet" type="text/css" href="style/css/contact_style.css" media="all" />
	<title>私信</title>
</head>
<body>
<?php include("style/header.php"); ?>

<div id="container">
	<div id="header1"></div>
	<div id="wrapper">
		<p style="text-align: center; font-size: large; font-style: inherit">请让我知道你的意见！</p>
		
		<div class="divider"></div>
		
		<!-- Begin Form -->
		<div class="contact">
			<form id="submitform" method='post' action='<?php echo $_SERVER['PHP_SELF']?>' name="submitform">
				<p class="label">Name</p>
				<input id='form_name' type='text' name='name' />
				<br>
				<p class="label">Email <span>*</span></p>
				<input id='form_email' type='text' name='email' />
				<br>
				<p class="label">Message <span>*</span></p>
				<textarea id='form_message' rows='10' cols='10' name='message'></textarea>
				<br><br>
				<input id='form_submit' type='submit' name='submit' value='Submit' class="button"/>
				<input id="reset" type="reset" value="reset" class="button"/>
			</form>
			
			<div id="error">
				<ul>
                    <?php

                    $mailto = "codevoid001@163.com";
                    $subject = "Dream the dawn";
                    $vname = htmlspecialchars($_POST['name']);


                    $email = $_POST['email'];

                    function validateEmail($email)
                    {
                    	if (empty($email))
                    		return false;
                        if(preg_match('/^([0-9A-Za-z\\-_\\.]+)@([0-9a-z]+\\.[a-z]{2,3}(\\.[a-z]{2})?)$/i', $email))
                            return true;
                        else
                            return false;
                    }


                    if(strlen($_POST['name']) < 1  || strlen($_POST['message']) < 1 || validateEmail($email) == FALSE)
                    {
                        $emailerror = '请检查是否有以下错误';
                        if(empty($_POST['name']))
                        {
                            $emailerror .= '<li>* 空的昵称</li>';
                        }
                        if(validateEmail($email) == FALSE)
                        {
                            $emailerror .= '<li>* 不合法的邮箱地址</li>';
                        }
                        if(empty($_POST['message']))
                        {
                            $emailerror .= '<li>* 空的信息</li>';
                        }
                    }
                    else
                    {

                        // NOW SEND THE ENQUIRY
                        $timestamp = date("F j, Y, g:ia");

                        $messageproper ="\n\n" .
                            "姓名: \n" .
                            ucwords($vname) .
                            "\n" .
                            "Email: \n" .
                            ucwords($email) .
                            "\n" .
                            "内容: \n" .
                            $_POST['message'] .
                            "\n" .
                            "\n\n" ;

                        $messageproper = trim(stripslashes($messageproper));
                        $send = mail($mailto, $subject, $messageproper,
	                        "From: ".ucwords($email));
                        if($send)
                            $emailerror .= "邮件已发送成功！";
                        else
                        	$emailerror .= "service sendmail not installed or started,sorry about this";
                    }
                    echo $emailerror;
                    ?>
				</ul>
			</div>
		</div>
		<!--End Form -->
	</div>
	<div class="clearfix"></div>
</div>

<?php include("style/footer.html"); ?>
</body>
</html>