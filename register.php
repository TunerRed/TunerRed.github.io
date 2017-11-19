<html>
<head>
    <title>注册</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style/css/style.css" media="all" />
    <style>
        .login {
            width: 300px;
            height: 300px;
            overflow: hidden;
            background: #1e1e1e;
            border-radius: 6px;
            margin: 50px auto;
            box-shadow: 0px 0px 50px rgba(0,0,0,.8);
        }

        .login .titulo {
            width: 298px;
            height: 14px;
            padding-top: 13px;
            padding-bottom: 13px;
            font-size: 14px;
            text-align: center;
            color: #bfbfbf;
            font-weight: bold;
            background: #121212;
            border: #2d2d2d solid 1px;
            margin-bottom: 30px;
            border-top-right-radius: 6px;
            border-top-left-radius: 6px;
            font-family: Arial;
        }

        .login form {
            width: 240px;
            height: auto;
            overflow: hidden;
            margin-left: auto;
            margin-right: auto;
        }

        .login form input[type=text], .login form input[type=password] {
            width: 250px;
            font-size: 12px;
            padding-top: 14px;
            padding-bottom: 14px;
            padding-left: 20px;
            border: none;
            color: #bfbfbf;
            background: #141414;
            outline: none;
            margin: 0;
        }

        .login form .enviar {
            width: 240px;
            height: 12px;
            display: block;
            padding-top: 12px;
            padding-bottom: 27px;
            border-radius: 6px;
            border: none;
            border-top: #4eb2a8 1px solid;
            border-bottom: #161616 1px solid;
            background: #349e92;
            text-align: center;
            font-size: 12px;
            font-weight: bold;
            color: #FFF;
            font-family: Arial;
        }

        .login .olvido {
            width: 240px;
            overflow: hidden;
            padding-top: 25px;
            padding-bottom: 25px;
            font-size: 10px;
            text-align: center;

            float: left;
            font: 12px Arial;
            color: #fff;
        }

    </style>
    <?php include 'login_check.php' ?>
</head>

<body>
<div class="divider"></div>
<div id="container">
    <div id="wrapper">
        <section class="login">
            <div class="titulo">注册</div>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
                <input type="text" required  placeholder="Username(10 chars)" name="user">
                <input type="password" required placeholder="Password(10 chars)" name="password">
                <a class="olvido" href="login.php">登录</a>
                <input type="submit" class="enviar" value="注册">
                <?php
                $error = '<span\> *输入格式有误，请检查 </span\>';
                    if(check())
                    {
                        register($_POST['user'],$_POST['password']);
                    }
                    echo $error;
                ?>
            </form>
        </section>
    </div>
</div>


<?php include("style/footer.html"); ?>
</body>

</html>