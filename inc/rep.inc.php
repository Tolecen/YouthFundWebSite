<?php
/*
	[Phpup.Net!] (C)2009-2011 Phpup.net.
	This is NOT a freeware, use is subject to license terms

	$Id: session.class.php 2010-08-24 10:42 $
*/

if(!defined('IN_PROVERB')) {
	exit('Access Denied');
}

$app['host']=str_replace('http://','',SITE_ROOT);
$app['scheme']='http';
$app['timestamp']=time();