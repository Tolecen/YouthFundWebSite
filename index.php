<?php
set_time_limit(1000);
//error_reporting(E_ALL || ~E_NOTICE); //显示除去 E_NOTICE 之外的所有错误信息
//error_reporting(0);
if(!is_file(str_replace("\\",'/',dirname(__FILE__)).'/data/config.inc.php'))
{
	echo '<SCRIPT LANGUAGE="JavaScript">
	<!--
		window.location="install/index.php";
	//-->
	</SCRIPT>';
	exit;
}

require('inc/common.inc.php');


if(isset($setting['seo_rewrite']) && $setting['seo_rewrite']>0)
{
	$var=explode('-',str_replace('/','-',$_REQUEST['repparam']));
	foreach($var as $p)
	{
		$param=explode('_',$p);
		$_REQUEST[$param[0]]=$param[1];
		$_GET[$param[0]]=$param[1];
	}
}

$controller=(empty($_REQUEST['con'])?'index':$_REQUEST['con']);
if(!empty($setting['adminpath']) && $setting['adminpath']!='admin' && $_REQUEST['con']=='admin' && empty($_REQUEST['pluginid']))
{
	$controller='index';
	$action='index';
}
$action=empty($_REQUEST['act'])?'index':$_REQUEST['act'];
if(!empty($_REQUEST['pluginid']))
{
	$pfile=ROOT_PATH.'/plugins/'.$_REQUEST['pluginid'].'/controls/'.$controller.'.class.php';

	//Plugins
	if(!is_file($pfile))
	{
		$controller='index';
		$action='index';
		require(ROOT_PATH.'/controls/'.$controller.'.class.php');
	}
	else
	{
		require($pfile);
	}
}
else
{
	//Program
	if(!is_file(ROOT_PATH.'/controls/'.$controller.'.class.php'))
	{
		$controller='index';
		$action='index';
	}

	require(ROOT_PATH.'/controls/'.$controller.'.class.php');
}
$conclass=$controller.'_controller';
$actfunc=$action.'_action';
$views=new $conclass;

$views->$actfunc();
