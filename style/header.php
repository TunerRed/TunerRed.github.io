<!-- 顶部 -->
<div id="strip">
	<!-- 顶部导航栏 -->
	<div id="header">
		<a href="../index.php"><img src="/style/images/logo.png" width="248" height="134" alt="" class="logo" /></a>
		<ul class="guide">
			<li>
				<a href="../about.php">关于</a>
			</li>
			<li> | </li>
			<li>
				<a href="../contact.php">私信</a>
			</li>
			<li> | </li>
			<li>
				<a href="#">留言簿</a>
			</li>
			<li> | </li>
			<li>
				<a href="../index.php">原作</a>
			</li>
			<li> | </li>
			<li>
				<?php checkLogin();?>
			</li>
		</ul>
	</div>
</div>

<?php
function checkLogin()
{
	global $attr;
	global $name;
	if (isset($_COOKIE['d_user']) && $_COOKIE['d_user']!=NULL)
	{
		$name = "欢迎，<span style=\"color: #349e92;\">".$_COOKIE['d_user']."</span>";
        $attr = ' href="/clearLogin.php" title="退出登录"';
	}
	else
	{
		$name = '欢迎登录';
        $attr = ' href="/login.php" style="color:#fff;"';
	}
	echo '<a'.$attr.'>'.$name.'</a>';
}
?>