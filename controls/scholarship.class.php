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
class scholarship_controller
{
    function scholarship_controller()
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

        switch($id){
            case 0:
                include template('scholarship_item0');
                break;
            case 1:
                include template('scholarship_item1');
                break;
            case 2:
                include template('scholarship_item2');
                break;
            case 3:
                include template('scholarship_item3');
                break;
            case 4:
                include template('scholarship_item4');
                break;
            default:
                $article=getZhiku($id);
                include template('scholarship_item');
                break;
        }


    }
    function all_action()
    {
        include template('scholarship_all');
    }

}
