<?php
/*
	[Phpup.Net!] (C)2009-2011 Phpup.net.
	This is NOT a freeware, use is subject to license terms

	$Id: admin.class.php 2010-08-24 10:42 $
*/

if(!defined('IN_PROVERB')) {
	exit('Access Denied');
}
?>
<?php include ROOT_PATH.'/views/admin/header.php';?>
<body>
<div class="subnav">
    <div class="content-menu ib-a blue line-x">
        <A HREF="index.php?con=<?php echo $GLOBALS['setting']['adminpath'];?>&act=usermodify&type=admin" <?php if(empty($_REQUEST['utype'])){?>class="on"<?php }?>><em>添加管理员</em></A>
		
	</div>
</div>

<form method="post" action="" name="searchform">
<INPUT TYPE="hidden" NAME="usertype" value="<?php echo $_GET['act'];?>">
<table width="100%" cellspacing="0" class="search-form">
    <tbody>
		<tr>
		<td><div class="explain-col">会员名： <INPUT TYPE="text" NAME="username" class="input-text"><INPUT TYPE="hidden" NAME="type" value="admin"> <input type="submit" name="dosubmit" class="button" value="搜索"> 
		</div>
		</td>
		</tr>
    </tbody>
</table>
</form>
<div class="table-list">
<TABLE cellpadding="1" cellspacing="1" width="500px">
<thead>
<TR>
	<TH style="text-align:left;">用户名</TH>
	<TH style="text-align:left;">邮箱</TH>
	<TH>操作</TH>
</TR>
</thead>
<tbody>
<?php foreach($userlist['data'] as $key=>$val){?>
<TR class="tr<?php echo $key%2;?>" id="user<?php echo $val['uid'];?>">
	<TD>
	<div id="username-<?php echo $val['uid'];?>" onmouseover="this.style.backgroundColor='#ff8800';" onmouseout="this.style.backgroundColor='';" onclick="modifyValue('usernameinput-<?php echo $val['uid'];?>');"><?php echo $val['username'];?>
	</div>
	<input class="hideinput" id="usernameinput-<?php echo $val['uid'];?>" ondblclick="confirmValue('user',this.value,'usernameinput-<?php echo $val['uid'];?>','uid');">
	</TD>

	<TD>
	<div id="email-<?php echo $val['uid'];?>" onmouseover="this.style.backgroundColor='#ff8800';" onmouseout="this.style.backgroundColor='';" onclick="modifyValue('emailinput-<?php echo $val['uid'];?>');"><?php echo $val['email'];?>
	</div>
	<input class="hideinput" id="emailinput-<?php echo $val['uid'];?>" ondblclick="confirmValue('user',this.value,'emailinput-<?php echo $val['uid'];?>','uid');">
	</TD>

	<TD align="center">
	<A HREF="index.php?con=<?php echo $GLOBALS['setting']['adminpath'];?>&act=usermodify&updateid=<?php echo $val['uid'];?>&type=admin">修改</A>
	<?php if($GLOBALS['session']->get('adminid')!=$val['uid']){?><A HREF="javascript:deleteVal('user','<?php echo $val['uid'];?>','user<?php echo $val['uid'];?>','uid')">删除</A><?php }?>
	</TD>
</TR>
<?php }?>
</tbody>
</TABLE>
</div>
<div class="pages" style="text-align:left;"><?php echo $userlist['pageinfo'];?></div>

</body>
</html>
