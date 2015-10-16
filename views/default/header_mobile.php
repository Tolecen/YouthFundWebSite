<!DOCTYPE html>
<html>
<head>

    <!-- ##buildinfo## -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="target-densitydpi=320,width=360,user-scalable=no">
    <title><?php echo $article['topic_name']; ?>-<?php echo $GLOBALS['setting']['site_title']; ?></title>
    <link rel="shortcut icon" href="/favicon.ico" />
    <meta name="keywords" content="<?php echo $GLOBALS['setting']['seo_keyword']; ?>">
    <meta name="description"
          content="<?php if(count($article['topic_intro']) > 0) { echo $article['topic_intro']; } else { echo substr($article['topic_desc'], 0, 100); } ?>--<?php echo $GLOBALS['setting']['seo_description']; ?>">
    <base href="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>"/>
    <link rel="stylesheet" href="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/css/mobile.css" />
    <link rel="stylesheet" href="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/css/lawyer.css" />
</head>
<body id="activity-detail" class="zh_CN mm_appmsg" ontouchstart="">