<?php
//error_reporting(0);
define('ROOT_PATH',str_replace('\\','/',substr(dirname(__FILE__),0,-3)));
define('IN_PROVERB',1);
if(PHP_VERSION < '4.1.0') {
	$_GET = &$HTTP_GET_VARS;
	$_POST = &$HTTP_POST_VARS;
	$_COOKIE = &$HTTP_COOKIE_VARS;
	$_SERVER = &$HTTP_SERVER_VARS;
	$_ENV = &$HTTP_ENV_VARS;
	$_FILES = &$HTTP_POST_FILES;
}

if (isset($_REQUEST['GLOBALS']) OR isset($_FILES['GLOBALS'])) {
	exit('Request tainting attempted.');
}

define('VERSION','I律师_1.0');
define('BIDCMS_CLIENT_SESSION','proverb');
require(ROOT_PATH.'/data/config.inc.php');
header("Content-type:text/html;charset=".$proverbcharset);
require(ROOT_PATH.'/inc/mysql.class.php');
include ROOT_PATH.'/inc/upyun.class.php';
require(ROOT_PATH.'/inc/global.func.php');
require(ROOT_PATH.'/inc/session/session_operator_native.class.php');
require(ROOT_PATH.'/inc/nightkiss.inc.php');
$session=new session_operator_native();
$session->session_start();
$_REQUEST=global_addslashes($_REQUEST);
$_GET=global_addslashes($_GET);
$_POST=global_addslashes($_POST);
//初始化数据连接
$db=new proverb_mysql();

$db->connect($proverbdbhost,$proverbdbuser,$proverbdbpw,$proverbdbname);

if(!checkfile('setting',0))
{
	$query=$db->query('select variable,content from '.tname('setting'));
	while($rows=$db->fetch_array($query))
	{
		$setting[$rows['variable']]=$rows['content'];
	}
	write('setting',$setting);
}
else
{
	$setting=read('setting');
}
$setting["adminpath"]=!empty($setting["adminpath"])?$setting["adminpath"]:'admin';
define('TPL_DIR',!empty($setting['site_template_dir'])?$setting['site_template_dir']:'default');

define('SITE_ROOT',$GLOBALS['setting']['site_url']);
define('ADMIN_ROOT',$GLOBALS["setting"]["adminpath"]);
require(ROOT_PATH.'/inc/page.class.php');
require(ROOT_PATH.'/inc/sql.inc.php');

include (ROOT_PATH.'/inc/rep.inc.php'); //规则包