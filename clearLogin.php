<?php
/**
 * Created by PhpStorm.
 * User: code_void
 * Date: 17-11-19
 * Time: 下午8:41
 */
setcookie('d_user',NULL,time()-3600);
setcookie('d_password',NULL,time()-3600);
header("Location: $PHP_SELF");
$_url = "/index.php";
echo "<script language='javascript' type='text/javascript'>window.location.href='$_url'</script>";