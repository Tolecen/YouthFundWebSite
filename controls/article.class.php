<?php
/*
	[Bidcms.com!] (C)2009-2011 Bidcms.com.
	This is NOT a freeware, use is subject to license terms
	$author limengqi
	$Id: index.class.php 2010-08-24 10:42 $
*/
if(!defined('IN_PROVERB')) {
    exit('Access Denied');
}
class article_controller
{
    function article_controller()
    {
        include ROOT_PATH.'./models/common.php';
    }

    function index_action()
    {

        include template('index_all');
    }
    function item_action()
    {
        $id=trim($_GET['id']);
        $article=getTopic($id);
//        if(isMobile())
//            include template('article_item_m');
//        else
            include template('article_item');
    }
    function team_action()
    {
        include template('team_index');
    }
    function all_action()
    {
        $topics = getAllTopics();
        include template('article_all');
    }

}
