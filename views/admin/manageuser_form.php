<?php

if(!defined('IN_PROVERB')) {
	exit('Access Denied');
}
?>

<?php include ROOT_PATH.'/views/admin/header.php';?>

<body>
<div class="subnav">
    <div class="content-menu ib-a blue line-x">
        <A HREF="index.php?con=<?php echo $GLOBALS['setting']['adminpath'];?>&act=manageuser" <?php if(empty($_REQUEST['utype'])){?>class="on"<?php }?>><em>全部</em></A>
	</div>
</div>
<SCRIPT LANGUAGE="JavaScript">
<!--
	function checkform(theform)
	{
		if($('#username').val()=='')
		{
			alert('用户名不能为空');
			return false;
		}
		if($('#email').val()=='')
		{
			alert('邮箱不能为空');
			return false;
		}
		<?php if(empty($user['uid'])){?>
		if($('#password').val()=='')
		{
			alert('密码不能为空');
			return false;
		}
		if($('#password').val()!=$('#pwdconfirm').val())
		{
			alert('两次密码不一致');
			return false;
		}
		<?php }?>
	}
//-->
</SCRIPT>
<div id="man_zone">
  <form action="index.php?con=<?php echo $GLOBALS['setting']['adminpath'];?>&act=manageusermodify" method="post" onsubmit="return checkform(this);">
  <INPUT TYPE="hidden" NAME="commit" value="1">
  <INPUT TYPE="hidden" NAME="updateid" value="<?php echo $user['uid'];?>">
<table width="100%" class="table_form">
		<tbody><tr>
			<td width="80">用户名</td> 
			<td><input type="text" id="username" value="<?php echo $user['username'];?>" class="input-text" name="username"><div id="usernameTip" class="onShow">请输入用户名</div></td>
		</tr>
		<tr>
			<td>密码</td> 
			<td><input type="password" value="" id="password" class="input-text" name="password"><div id="passwordTip" class="onError">密码应该为6-20位之间,如不修改密码，请留空</div></td>
		</tr>
		<tr>
			<td>确认密码</td>
			<td><input type="password" value="" id="pwdconfirm" class="input-text" name="pwdconfirm"><div id="pwdconfirmTip" class="onShow">请输入确认密码</div></td>
		</tr>
		<tr>
			<td>邮箱</td>
			<td>
			<input type="text" size="30" id="email" class="input-text" value="<?php echo $user['email'];?>" name="email">
			<div id="emailTip" class="onShow">请输入邮箱</div></td>
		</tr>
		
		<tr>
			<td></td>
			<td>
			<INPUT TYPE="submit" class="normal_button" value="提交">
			</td>
		</tr>
	</tbody></table>
  </FORM>
</div>

</body>
</html>
