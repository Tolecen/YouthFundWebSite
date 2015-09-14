<?php
/*
	[Phpup.Net!] (C)2009-2011 Phpup.net.
	This is NOT a freeware, use is subject to license terms

	$Id: getinfo.php 2010-08-24 10:42 $
*/
//error_reporting(0);
define('IN_PROVERB',1);

date_default_timezone_set('Asia/Shanghai');
define('BIDCMS_CLIENT_SESSION','proverb');
define('ROOT_PATH',str_replace('inc','',str_replace('\\','/',dirname(__FILE__))));
include ROOT_PATH.'/data/config.inc.php';
header("Content-type:text/html;charset=".$proverbcharset);
include ROOT_PATH.'/data/cache/setting.php';
require(ROOT_PATH.'/inc/session/session_operator_native.class.php');
$session=new session_operator_native();
$session->session_start();
include ROOT_PATH.'/inc/upyun.class.php';
include ROOT_PATH.'/inc/global.func.php';
$setting=$content;
define('TPL_DIR',!empty($setting['site_template_dir'])?$setting['site_template_dir']:'default');
$_REQUEST=global_addslashes($_REQUEST);
$_GET=global_addslashes($_GET);
$_POST=global_addslashes($_POST);
require(ROOT_PATH.'/inc/mysql.class.php');
//初始化数据连接
$db=new proverb_mysql();

$db->connect($proverbdbhost,$proverbdbuser,$proverbdbpw,$proverbdbname);
