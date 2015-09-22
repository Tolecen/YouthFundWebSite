<?php

if (!defined('IN_PROVERB')) {
    exit('Access Denied');
}
?>
<?php include ROOT_PATH . '/views/admin/header.php'; ?>
<body>


<form method="post" action="index.php?con=<?php echo $GLOBALS['setting']['adminpath']; ?>&act=media" name="searchform">
    <table width="100%" cellspacing="0" class="search-form">
        <tbody>
        <tr>
            <td>
                <div class="explain-col">
                    关键字：<INPUT TYPE="text" NAME="keyword" class="input-text"
                               value="<?php echo $_REQUEST['keyword']; ?>">

                    <input type="submit" class="button" value="确定">
                </div>
            </td>

        </tr>
        </tbody>
    </table>
</form>

<!--id    成语ID   自增     每一条成语有独一无二的ID-->
<!--name          成语名字-->
<!--pinyin          成语拼音-->
<!--created_at            发布时间-->
<!--updated_at      修改时间-->
<!--shiyi            成语意思-->
<!--chuchu        成语出处-->
<!--liju                成语例句-->
<!--story            成语的故事-->
<div class="table-list">
    <TABLE cellpadding="1" cellspacing="1" width="100%">
        <thead>
        <TR>
            <TH width="25%">项目名称</TH>
            <TH width="15%">项目类型</TH>
            <TH width="15%">联系人</TH>
            <TH width="20%">联系方式</TH>
            <TH width="10%">时间</TH>
            <TH width="15%">操作</TH>
        </TR>
        </thead>
        <tbody>
        <?php foreach ($taglist['data'] as $key => $val) { ?>
            <TR class="tr<?php echo $key % 2; ?>" id="user<?php echo $val['project_id']; ?>" height="50" style="height: 50px; position: relative; overflow: hidden">
                <TD align="center">
                    <?php echo $val['project_name']; ?>
                </TD>

                <TD align="center">
                    <?php echo $val['project_type']; ?>
                </TD>

                <TD align="center">
                    <?php echo $val['project_user']; ?>
                </TD>

                <TD align="center">
                    <h5>手机：<?php echo $val['project_user_mobile']; ?></h5>
                    <h5>邮箱：<?php echo $val['project_user_email']; ?></h5>
                    <h5>微信：<?php echo $val['project_user_weixin']; ?></h5>
                </TD>

                <TD align="center"><?php echo date('Y-m-d', $val['created_time']); ?></TD>


                <TD align="center">
                    <A target="_blank" HREF="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/project/<?php echo $val['project_id']; ?>">查看详情</A>
                    <A HREF="index.php?con=<?php echo $GLOBALS['setting']['adminpath']; ?>&act=media&type=del&id=<?php echo $val['project_id']; ?>"
                       onclick="return confirm('确认删除？');">删除</A>
                </TD>
            </TR>
        <?php } ?>
        </tbody>
    </TABLE>
</div>
<div class="pages"><?php echo $taglist['pageinfo']; ?></div>

</body>
</html>