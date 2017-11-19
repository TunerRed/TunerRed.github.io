<?php
$username = $_POST['user'];
$password = $_POST['password'];
$error;
$con;
$db;

function connect()
{
    global $con;
    global $error;
    $con = mysqli_connect("localhost","root","root");
    if (!$con)
    {
        die('Could not connect: ' . mysqli_error());
        return false;
    }

    global $db;
    $db = mysqli_select_db($con, 'web');
    if (!$db)
        die("could not connect to the db:".mysqli_error($db));
    return true;
}

function check()
{
    global $username;
    global $password;
    global $error;
    if (strlen($username) > 10 || strlen($password) > 10)
        return false;
    $error = '';
    if (strlen($username) <= 0 || strlen($password) <= 0)
        return false;
    return true;
}

function login($u,$p)
{
    global $error,$con;
    if(connect())
    {
        $result = mysqli_query($con,"SELECT * FROM login WHERE user='$u'");
        if($row = mysqli_fetch_array($result))
        {
            if ($row['user']==$u && $row['password']==$p)
            {
                setcookie('d_user',''.$u,time()+3600);
                setcookie('d_password',''.$p,time()+3600);
                $_url = "index.php";
                echo "<script language='javascript' type='text/javascript'>window.location.href='$_url'</script>";
                $error = '<span\>*登录成功</span\>';
            }
            else
            {
                $error = '<span\>*登录失败，请检查用户名密码是否正确</span\>';
            }
        }
        else
        {
            $error = '<span\>*登录失败，请重新尝试</span\>';
            die(mysqli_error($con));
        }
    }
}

function register($u,$p)
{
    global $error,$con;
    if(connect())
    {
        $result = mysqli_query($con,"SELECT * FROM login WHERE login.user='$u'");
        if($row = mysqli_fetch_array($result))
        {
            if ($row['user']==$u)
            {
                $error = '<span\>*注册失败，重复的用户名</span\>';
            }
        }
        else
        {
            mysqli_query($con,"INSERT INTO login VALUES ('$u','$p')");
            setcookie('d_user',$u);
            setcookie('d_password',$p);
            $_url = "index.php";
            echo "<script language='javascript' type='text/javascript'>window.location.href='$_url'</script>";
            $error = '<span\>*注册成功</span\>';
        }
    }
}