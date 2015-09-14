<?php

if(!defined('IN_PROVERB')) {
	exit('Access Denied');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTH XHTML 1.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $GLOBALS['bidcmscharset'];?>" />
<link href="views/admin/css/reset.css" rel="stylesheet" type="text/css" />
<link href="views/admin/css/zh-cn-system.css" rel="stylesheet" type="text/css" />
<link href="views/admin/css/dialog.css" rel="stylesheet" type="text/css" />
<link href="views/admin/css/table_form.css" rel="stylesheet" type="text/css" />
<SCRIPT LANGUAGE="JavaScript">
<!--
	var adminpath='<?php echo ADMIN_ROOT?ADMIN_ROOT:"admin";?>';
	var site_root='<?php echo SITE_ROOT;?>';
	function Dialog_close()
	{
		$('#dialog').html('');
		$('#blurdiv').hide();
		$('#dialog').dialog('close');
	}
//-->
</SCRIPT>
<script language="javascript" src="views/js/jquery.js"></script>
<SCRIPT LANGUAGE="JavaScript" src="views/js/jquery-ui.js"></SCRIPT>

<script language="javascript" src="views/admin/js/admin.js"></script>
<title>团购管理</title>

</head>
