<html>
<head>
    <title>登录</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style/css/style.css" media="all" />
    <style>

        .login {
            width: 300px;
            height: 285px;
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

        .login form input[type=text] {
            border-top-left-radius: 6px;
            border-top-right-radius: 6px;
            border-top: #0b0b0b solid 1px;

        }

        .login form input[type=password] {
            border-bottom-left-radius: 6px;
            border-bottom-right-radius: 6px;
            border-top: #0b0b0b 1px solid;
            border-bottom: #353535 1px solid;

        }

        .login form .enviar {
            width: 240px;
            height: 12px;
            display: block;
            padding-top: 14px;
            padding-bottom: 14px;
            border-radius: 6px;
            border: none;
            border-top: #4eb2a8 1px solid;
            border-bottom: #161616 1px solid;
            background: #349e92;
            text-align: center;
            text-decoration: none;
            font-size: 12px;
            font-weight: bold;
            color: #FFF;
            text-shadow: 0 -1px #1d7464, 0 1px #7bb8b3;
            font-family: Arial;
        }

        .login .olvido {
            width: 240px;
            height: auto;
            overflow: hidden;
            padding-top: 25px;
            padding-bottom: 25px;
            font-size: 10px;
            text-align: center;
        }

        .login .olvido .col {
            width: 50%;
            height: auto;
            float: left;
        }

        .login .olvido .col a {
            color: #fff;
            text-decoration: none;
            font: 12px Arial;
        }

    </style>
</head>

<body>
<div class="divider"></div>
<div id="container">
    <div id="header1"></div>
    <div id="wrapper">
        <section class="login">
            <div class="titulo">Staff Login</div>
            <form action="#" method="post" enctype="application/x-www-form-urlencoded">
                <input type="text" required title="Username required" placeholder="Username" data-icon="U">
                <input type="password" required title="Password required" placeholder="Password" data-icon="x">
                <div class="olvido">
                    <div class="col"><a href="#" title="Ver Carásteres">Register</a></div>
                </div>
                <a href="#" class="enviar">Submit</a>
            </form>
        </section>
    </div>
</div>


<?php include("style/footer.html"); ?>
</body>

</html>

<?php
/**
 * Created by PhpStorm.
 * User: code_void
 * Date: 17-11-18
 * Time: 下午4:03
 */
?>