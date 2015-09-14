<?php
/*  
	[Phpup.Net!] (C)2009-2011 Phpup.net.
	This is NOT a freeware, use is subject to license terms

	$Id: admin.class.php 2010-08-24 10:42 $
*/

if(!defined('IN_PROVERB')) {
	exit('Access Denied');
}
include ROOT_PATH.'/models/admin.php';
class admin_controller extends admin
{
	function admin_controller()
	{
		if(isset($_REQUEST['act']) && ($_REQUEST['act']=='admin_ajax' || $_REQUEST['act']=='admin_delete'))
		{
			if(!$GLOBALS['session']->get('adminid'))
			{
				exit('未登录');
			}
		}
		if(!isset($_REQUEST['act']) || ($_REQUEST['act']!='login' && $_REQUEST['act']!='logout'))
		{

			if(!$GLOBALS['session']->get('adminid'))
			{
				sheader('index.php?con='.$GLOBALS['setting']['adminpath'].'&act=login');
			}
			
		}
		include ROOT_PATH.'/models/common.php';
	}
}