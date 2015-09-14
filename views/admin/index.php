<?php

if (!defined('IN_PROVERB')) {
    exit('Access Denied');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" class="off">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7"/>
    <title>i律师</title>
    <link href="views/admin/css/reset.css" rel="stylesheet" type="text/css"/>
    <link href="views/admin/css/zh-cn-system.css" rel="stylesheet" type="text/css"/>
    <link href="views/admin/css/dialog.css" rel="stylesheet" type="text/css"/>
    <script language="javascript" src="views/js/jquery.js"></script>
    <SCRIPT LANGUAGE="JavaScript">
        <!--
        var adminpath = '<?php echo $GLOBALS["setting"]["adminpath"]?$GLOBALS["setting"]["adminpath"]:"admin";?>';
        var site_root = '<?php echo SITE_ROOT;?>';
        //-->
    </SCRIPT>
    <style type="text/css">
        .objbody {
            overflow: hidden
        }
    </style>
    <script language="javascript" src="views/admin/js/menu.js"></script>
    <script language="javascript" src="views/admin/js/nav.js"></script>

</head>
<body scroll="no" class="objbody" id="objbody">

<div class="header">
    <div class="col-auto">
        <div class="log white cut_line">您好！<?php echo $GLOBALS['session']->get('adminuser'); ?> [管理员]<span>|</span><a
                href="index.php?con=<?php echo $GLOBALS['setting']['adminpath']; ?>&act=logout">[退出]</a><span>|</span>
            <a href="index.php" target="_blank" id="site_homepage">站点首页</a><span>|</span>

        </div>
        <ul class="nav white" id="top_menu">
            <li id="man_nav_1" onclick="list_sub_nav('man_nav_1','管理首页')" style="outline:none;" class="on top_menu"><A
                    HREF="#">管理首页</A></li>
            <li id="man_nav_2" onclick="list_sub_nav('man_nav_2','新闻动态')" style="outline:none;" class="top_menu"><A
                    HREF="#">新闻动态</A></li>
            <li id="man_nav_3" onclick="list_sub_nav('man_nav_3','用户管理')" style="outline:none;" class="top_menu"><A
                    HREF="#">用户管理</A></li>
        </ul>
    </div>
</div>
<SCRIPT LANGUAGE="JavaScript">
    <!--
    function showDiglog(content) {
        $('#showdiglog').html(content);
        $('#showdiglog').show('slow');
        setTimeout(function () {
            $('#showdiglog').hide('slow');
        }, 2000);
    }
    //-->
</SCRIPT>
<div id="content">
    <div class="col-left left_menu">
        <div class="col-left left_menu">
            <div id="Scroll" style="height: 374px;">
                <div id="leftMain"></div>
            </div>

            <a title="展开与关闭" class="open" hidefocus="hidefocus"
               style="outline-style: none; outline-width: medium; height: 424px;" id="openClose"
               href="javascript:;"><span class="hidden">展开</span></a>
        </div>
    </div>
    <div class="col-auto mr8">
        <div class="crumbs">
            <div class="shortcut cu-span"><span id="showdiglog" style="color:#ff0000;"></span><a href="index.php"
                                                                                                 target="_blank"><span>站点首页</span></a><a
                    href="index.php?con=<?php echo $GLOBALS['setting']['adminpath']; ?>&act=delcache"
                    target="cache"><span>清空缓存</span></a></div>
            当前位置：<span id="current_pos"></span></div>
        <div class="col-1">
            <div class="content" style="position:relative; overflow:hidden">
                <iframe name="right" id="rightMain"
                        src="index.php?con=<?php echo $GLOBALS['setting']['adminpath']; ?>&act=main" frameborder="false"
                        scrolling="auto" style="border:none; margin-bottom:30px" width="100%" height="100%"></iframe>
                <div class="fav-nav">
                    <div id="panellist"></div>
                    <div id="paneladd"></div>
                    <div id="help" class="fav-help"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<SCRIPT LANGUAGE="JavaScript">
    <!--
    getbyitem('管理首页');
    //-->
</SCRIPT>
<iframe src="" style="display:none" name="cache"></iframe>
<script language="javascript" src="views/admin/js/windows.js"></script>
</body>
</html>