<?php

if(!defined('IN_PROVERB')) {
	exit('Access Denied');
}
?>
<?php include ROOT_PATH.'/views/admin/header.php';?>
<body>


<form method="post" action="" name="searchform">
<INPUT TYPE="hidden" NAME="usertype" value="<?php echo $_GET['act'];?>">
<table width="100%" cellspacing="0" class="search-form">
    <tbody>
		<tr>
		<td><div class="explain-col">会员名： <INPUT TYPE="text" NAME="username" class="input-text"> <input type="submit" name="dosubmit" class="button" value="搜索"> 
		</div>
		</td>
		</tr>
    </tbody>
</table>
</form>
<div class="table-list">
<TABLE cellpadding="1" cellspacing="1" width="100%">
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
	<A HREF="index.php?con=<?php echo $GLOBALS['setting']['adminpath'];?>&act=manageusermodify&updateid=<?php echo $val['uid'];?>">修改</A>
	<A HREF="javascript:deleteVal('admin','<?php echo $val['uid'];?>','user<?php echo $val['uid'];?>','uid')">删除</A>
	</TD>
</TR>
<?php }?>
</tbody>
</TABLE>
</div>
<div class="pages"><?php echo $userlist['pageinfo'];?></div>

</body>
</html>
