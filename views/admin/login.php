<?php

if(!defined('IN_PROVERB')) {
	exit('Access Denied');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $GLOBALS['bidcmscharset'];?>" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<title><?php echo $GLOBALS['setting']['site_title'];?>-后台管理</title>
<style type="text/css">
*{margin:0;padding:0;text-decoration:none;color:#666;font-size:12px;}
html{overflow-x:hidden;overflow-y:auto;}
ul,li{list-style:none;}
fieldset,img{border:none;}
body{background-color:#e9f0f7;}
.logink{height:200px;width:470px;margin-right:auto;margin-left:auto;margin-top:170px;}
.lgdlk{float:right;width:250px;margin-top:40px;overflow:hidden;}
.lgdlk ul{}
.lgdlk li{float:left;width:100%;height:30px;line-height:30px;overflow:hidden;margin-top:8px;margin-bottom:8px;}
.lgdlk h1{font-size:14px;font-weight:normal;float:left;width:60px;}
.lgdlk h2{float:left;width:190px;}
.sky01{border:1px solid #3d6384;line-height:25px;height:25px;padding-right:5px;padding-left:5px;width:174px;font-size:14px;}
.sky02{height:28px;color:#000000;width:80px;float:left;margin-left:55px;}
.dlkbt{text-align:right;float:left;width:100%;margin-top:30px;display:inline;}
</style>
</head>

<body>

<div class="logink">
	<div class="lgdlk">
	<div></div>
<iframe src="" style="display:none;" name="login"></iframe>
<form method="post" target="login" action="index.php?con=<?php echo $GLOBALS['setting']['adminpath'];?>&act=login" id="loginform" name="loginform">
	<input type="hidden" value="1" name="commit">
	<ul>
	<li><h1>用户名：</h1><h2><input type="text" name="username" value="" class="sky01" />
	</h2></li>
	<li><h1>密　码：</h1><h2><input id="user_pass" type="password" name="password" value="" class="sky01"  />
	</h2></li>
	<li> <input type="submit" name="submit" value="登录" class="sky02" /></li>
	</ul>

	</div>
</div>


<script type="text/javascript">
try{document.getElementById('user_login').focus();}catch(e){}
</script>
</body></html>