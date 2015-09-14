<?php
set_time_limit(1000);
header('Content-type:text/json');
require('../inc/common.inc.php');
require('core/Control.class.php');

$logStr = "index page : ".$_POST['page']."\r\n";
$logStr .= "index page2 : ".$page."\r\n";
$logStr .= "index pageSize : ".$_POST['pageSize']."\r\n";
$logStr .= "index pageSize2 : ".$pageSize."\r\n";
$logStr .= "index version : ".$_POST['version']."\r\n";
writelog($logStr);

$control = new Controller();
$control->Run();