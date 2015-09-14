<?php

if (!defined('IN_PROVERB')) {
    exit('Access Denied');
}
?>

<?php
//print_r($GLOBALS['app']);
//
//?>

<?php include ROOT_PATH . '/views/admin/header.php'; ?>
<link media="all" rel="stylesheet" type="text/css" href="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/editer/styles/simditor.css" />

<script type="text/javascript" src="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/editer/scripts/module.js"></script>
<script type="text/javascript" src="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/editer/scripts/uploader.js"></script>
<script type="text/javascript" src="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/editer/scripts/hotkeys.js"></script>
<script type="text/javascript" src="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/editer/scripts/simditor.js"></script>



<body>
<div class="subnav">
    <div class="content-menu ib-a blue line-x">
        <A HREF="index.php?con=<?php echo $GLOBALS['setting']['adminpath']; ?>&act=media"><em>全部</em></A>
    </div>
</div>
<SCRIPT LANGUAGE="JavaScript">
    <!--
    function checkform(theform) {
        if ($('#name').val() == '') {
            alert('名称不能为空');
            return false;
        }
    }
    //-->
</SCRIPT>


<div id="man_zone">
    <form action="index.php?con=<?php echo $GLOBALS['setting']['adminpath']; ?>&act=mediamodify" method="post"
          onsubmit="return checkform(this);">
        <INPUT TYPE="hidden" NAME="commit" value="1">
        <INPUT TYPE="hidden" NAME="updateid" value="<?php echo $media['topic_id']; ?>">
        <table width="90%" class="table_form">
            <tbody>
            <tr height="50">
                <td width="80">文章名字</td>
                <td>
                    <input type="text" id="media_title" value="<?php echo $media['topic_name']; ?>" class="input-text"
                           name="topic_name" style="width:450px;">

                </td>
            </tr>
            <tr>
                <td>内容</td>
                <td>
                    <textarea id="txt-content" data-autosave="editor-content" autofocus required>
                        <?php if (isset($media['topic_desc'])) {
                            echo $media['topic_desc'];
                        } ?>
                    </textarea>

                    <!--                    <div id="editor">-->
                    <!--                        -->
                    <?php //if (isset($media['topic_desc'])) { echo $media['topic_desc']; } else { ?><!--<p>写点什么吧&hellip;</p>--><?php //} ?>
                    <!--                    </div>-->
                </td>
            </tr>

            <tr>
                <td></td>
                <td>

                    <textarea type="hidden" name="topic_desc" id="topic_desc" style="display: none;"></textarea>

                    <INPUT TYPE="submit" class="normal_button" onclick="checkIt()"
                           style="width: 100px; height: 50px; background-color: #D54E21; color: #fff; font-size: medium"
                           value="提交">
                </td>
            </tr>
            </tbody>
        </table>
    </FORM>
</div>

<script type="text/javascript">
    var $preview, editor, mobileToolbar, toolbar;
    (function() {
        $(function() {

            Simditor.locale = 'en-US';
            toolbar = ['title', 'bold', 'italic', 'underline', 'strikethrough', 'color', '|', 'ol', 'ul', 'blockquote', 'code', 'table', '|', 'link', 'image', 'hr', '|', 'indent', 'outdent', 'alignment'];
            mobileToolbar = ["bold", "underline", "strikethrough", "color", "ul", "ol"];

            editor = new Simditor({
                textarea: $('#txt-content'),
                placeholder: '这里输入文字...',
                toolbar: toolbar,
                pasteImage: true,
                defaultImage: '<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/editer/images/image.png',
                upload: {
                    url: '<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/models/upload_multi.php',
                    params: null,
                    fileKey: 'Filedata',
                    connectionCount: 3
                }
            });
            $preview = $('#preview');
            if ($preview.length > 0) {
                return editor.on('valuechanged', function(e) {
                    return $preview.html(editor.getValue());
                });
            }
        });

    }).call(this);

    function checkIt() {
        $("#topic_desc").html(editor.getValue());
        return true;
    }


</script>

</body>
</html>
