<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<HTML xmlns="http://www.w3.org/1999/xhtml"><HEAD>
<title>i律师-安装向导第五步,基本信息</title>
<META http-equiv=X-UA-Compatible content=IE=EmulateIE7>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<META http-equiv=expires content=0>
<META content="PROVERB" name=keywords>
<META content="PROVERB" name=description>
<link rel="stylesheet" type="text/css" href="template/css/login.css">
</HEAD>
<BODY class="login">
<div id="login">
<?php $site_root="http://".$_SERVER ['HTTP_HOST'].str_replace("\\","",dirname(dirname($_SERVER['PHP_SELF'])));?>
<TABLE>
<TR>
	<TD><h1 style="font-size:25px;">基本信息</h1></TD>
</TR>
</TABLE>

<form method="post" action="index.php?step=7" id="loginform" name="loginform">
	<p>
		<label>网站名<br>
		<input type="text" tabindex="10" size="20" class="input" id="user_login" name="site_title" value="I律师"></label>
	</p>
	<p>
		<label>网站地址<br>
		<input type="text" tabindex="20" size="20" value="<?php echo $site_root;?>" class="input" id="user_pass" name="site_url"></label>
	</p>
	<p>
		<label>管理员<br>
		<input type="text" tabindex="10" size="20" class="input" id="user_login" name="administr" value="admin"></label>
	</p>
	<p>
		<label>管理员邮箱<br>
		<input type="text" tabindex="10" size="20" class="input" id="user_login" name="email" value="proverb@gmail.com"></label>
	</p>
	<p>
		<label>密码<br>
		<input type="text" tabindex="10" size="20" class="input" id="user_login" name="adminpassword" value="admin"></label>
	</p>
	<p class="submit">
		<input type="submit" tabindex="100" value="完成" id="wp-submit" name="wp-submit">
	</p>
</form>

</div>

<p id="backtoblog"><a title="不知道自己在哪？" href="index.php?step=1">安装向导第五步,基本信息</a></p>
</body></html>