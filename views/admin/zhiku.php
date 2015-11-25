<?php

if (!defined('IN_PROVERB')) {
    exit('Access Denied');
}
?>
<?php include ROOT_PATH . '/views/admin/header.php'; ?>
<body>


<form method="post" action="index.php?con=<?php echo $GLOBALS['setting']['adminpath']; ?>&act=zhiku" name="searchform">
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
            <TH width="33%">姓名</TH>
            <TH width="33%">发布时间</TH>
            <TH width="33%">操作</TH>
        </TR>
        </thead>
        <tbody>
        <?php foreach ($taglist['data'] as $key => $val) { ?>
            <TR class="tr<?php echo $key % 2; ?>" id="user<?php echo $val['topic_id']; ?>" height="50" style="height: 50px; position: relative; overflow: hidden">
                <TD align="center">
                    <?php echo $val['topic_name']; ?>
                </TD>

                <TD align="center"><?php echo date('Y-m-d', $val['created_time']); ?></TD>


                <TD align="center">
                    <A HREF="index.php?con=<?php echo $GLOBALS['setting']['adminpath']; ?>&act=zhikumodify&updateid=<?php echo $val['topic_id']; ?>">修改</A>
                    <A HREF="index.php?con=<?php echo $GLOBALS['setting']['adminpath']; ?>&act=zhiku&type=del&id=<?php echo $val['topic_id']; ?>"
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