<?php
if (!defined('IN_PROVERB')) {
    exit('Access Denied');
}
?>
<?php include ROOT_PATH . '/views/admin/header.php'; ?>

<body>
<style type="text/css">
    html {
        _overflow-y: scroll
    }
</style>
<div id="main_frameid" class="pad-10 display" style="_margin-right:-12px;_width:98.9%;display:block;">

    <div class="col-2 lf mr10" style="width:48%">
        <h6>我的个人信息</h6>

        <div class="content adtyhz">
            您好，<?php echo $userinfo['username']; ?><br/>
            所属角色：管理员 <br/>

        </div>
    </div>
    <div class="col-2 col-auto">
        <h6>系统信息</h6>

        <div class="content adtyhz">
            程序版本：<?php echo VERSION; ?><br/>

            <div style="color:#ff0000;font-weight:bold;" id='changev'></div>


            操作系统：<?php echo PATH_SEPARATOR == ':' ? 'Linux/Unix' : 'windows'; ?> <br/>

            服务器软件：<?php echo $_SERVER['SERVER_SOFTWARE']; ?> <?php echo PHP_VERSION; ?> <br/>
            MySQL 版本：<?php echo $GLOBALS['db']->version(); ?><br/>
            上传文件：<?php echo get_cfg_var('upload_max_filesize'); ?><br/>
        </div>
    </div>
    <div class="bk10"></div>
    <div class="col-2 lf mr10" style="width:48%">
        <h6>萌宝拍_开发团队</h6>

        <div class="content adtyhz">
            版权所有：萌宝拍项目组<br/>
        </div>
    </div>
    <div class="col-2 col-auto">
        <h6>授权信息</h6>

        <div class="content" id="code">
            OK
        </div>

    </div>


</div>
</body></html>