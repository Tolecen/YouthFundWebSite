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

<script type="text/javascript" src="<?php echo $GLOBALS['app']['scheme'];?>://<?php echo $GLOBALS['app']['host'];?>/static/js/swfupload.js"></script>
<script type="text/javascript" src="<?php echo $GLOBALS['app']['scheme'];?>://<?php echo $GLOBALS['app']['host'];?>/static/js/swfupload.queue.js"></script>
<script type="text/javascript" src="<?php echo $GLOBALS['app']['scheme'];?>://<?php echo $GLOBALS['app']['host'];?>/static/js/fileprogress.js"></script>
<script type="text/javascript" src="<?php echo $GLOBALS['app']['scheme'];?>://<?php echo $GLOBALS['app']['host'];?>/static/js/tag_handlers.js"></script>

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
                <td width="80" class="asdasd">文章名字</td>
                <td>
                    <input type="text" id="media_title" value="<?php echo $media['topic_name']; ?>" class="input-text"
                           name="topic_name" style="width:450px;">

                </td>
            </tr>
            <tr height="50">
                <td width="80" class="asdasd">摘要</td>
                <td>

                    <textarea id="topic_intro" name="topic_intro" style="width:450px; height: 100px; font-size: 14px;text-align: left">
                        <?php if (isset($media['topic_intro'])) {
                            echo $media['topic_intro'];
                        } ?>
                    </textarea>

                </td>
            </tr>
            <tr>
                <td>封面</td>
                <td height="160">
                    <input type="hidden" size="30" id="tag_file_id" class="input-text" value="<?php echo $tag['file_id'];?>" name="tag_file_id">
                    <script type="text/javascript">
                        var swfu;

                        window.onload = function () {
                            var settings = {
                                flash_url: "<?php echo $GLOBALS['app']['scheme'];?>://<?php echo $GLOBALS['app']['host'];?>/static/images/upload/swfupload.swf",
                                upload_url: "<?php echo $GLOBALS['app']['scheme'];?>://<?php echo $GLOBALS['app']['host'];?>/models/upload_multi.php",
                                post_params: {"PHPSESSID": "NONE"},
                                file_size_limit: "100 MB",
                                file_types: "*.jpg;*.png;*.gif;*.jpeg",
                                file_types_description: "Web Image Files",
                                file_upload_limit: 30,
                                file_queue_limit: 0,
                                custom_settings: {
                                    progressTarget: "fsUploadProgress"
                                },
                                debug: false,

                                // Button settings
                                button_image_url: "<?php echo $GLOBALS['app']['scheme'];?>://<?php echo $GLOBALS['app']['host'];?>/static/images/upload/upload_button_blue.png",
                                button_width: "240",
                                button_height: "50",
                                button_placeholder_id: "spanButtonPlaceHolder",
                                button_text: '<span class="theFont">+\u6dfb\u52a0\u5c01\u9762</span>',
                                button_text_style: ".theFont { font-size: 22; color:#ffffff; font-weight: bold; }",
                                button_text_left_padding: 70,
                                button_text_top_padding: 10,
                                button_cursor: SWFUpload.CURSOR.HAND,

                                // The event handler functions are defined in handlers.js
                                file_queued_handler: fileQueued,
                                file_queue_error_handler: fileQueueError,
                                file_dialog_complete_handler: fileDialogComplete,
                                upload_start_handler: uploadStart,
                                upload_progress_handler: uploadProgress,
                                upload_error_handler: uploadError,
                                upload_success_handler: uploadSuccess,
                                upload_complete_handler: uploadComplete,
                                queue_complete_handler: queueComplete	// Queue plugin event
                            };

                            swfu = new SWFUpload(settings);
                        };
                    </script>
                    <form id="pin_multi_form" action="" method="post" enctype="multipart/form-data">
                        <div id="fsUploadProgress" class="fieldset flash"></div>
                        <span id="spanButtonPlaceHolder"></span>
                    </form>

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

<script type="text/javascript">

    $(".delImage").click(function(){
        alert($(this).parents(".progressWrapper"))
        $(this).parents(".progressWrapper").remove();
    })

    $(".asdasd").click(function(){
        alert($(this).html);
    })

</script>

</body>
</html>
