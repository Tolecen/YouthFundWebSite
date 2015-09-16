<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title><?php echo $GLOBALS['setting']['site_title']; ?></title>
    <base href="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/"/>
    <meta name="keywords" content="<?php echo $GLOBALS['setting']['seo_keyword']; ?>">
    <meta name="description" content="<?php echo $GLOBALS['setting']['seo_description']; ?>">
    <meta name="viewport" content="width=1200" />
    <base href="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>"/>
    <link rel="stylesheet" href="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/css/lawyer.css" />

    <script type="text/javascript">
        var app = app || <?php echo proverb_encode($GLOBALS['app']);?>;
    </script>

</head>
<body>
<div class="top_article-bg">
    <div class="top_article">
        <div class="main">
            <div class="banner-top">
                <div class="logo"><img title="<?php echo $GLOBALS['setting']['site_title']; ?>" src="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/css/images/part1/part1_toplogo.png"/>
                </div>
                <div class="link">
                    <a href="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>" title="首页">首页</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="screen_article" style="overflow:visible; height: 765px;">

    <div id="libdesc" class="s3-title" >
        <p class="s2-desc font26 c0786FE"><?php echo $article['topic_name'];?></p>
        <p class="s2-desc font14 c0786FE"><?php echo date('Y-m-d', $article['created_time']); ?></p>
    </div>

    <div class="left-block s3-left">
    </div>
    <div class="right-block s3-right">
    </div>
    <div class="s3-center font17">
        <?php echo $article['topic_desc'];?>
    </div>
    <div class="copyright"><div style="padding-top: 25px;">Copyright©2013-2015 青春在线创投基金.All Rights Reserved.</div></div>
</div>

</body>
</html>