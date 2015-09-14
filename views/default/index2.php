<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title><?php echo $GLOBALS['setting']['site_title']; ?></title>
    <meta name="keywords" content="<?php echo $GLOBALS['setting']['seo_keyword']; ?>">
    <meta name="description" content="<?php echo $GLOBALS['setting']['seo_description']; ?>">
    <base href="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>"/>
    <link rel="stylesheet" href="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/css/lawyer.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui">
    <meta http-equiv="cleartype" content="on">

    <link rel="stylesheet" href="css/nightkiss.css">

    <script type="text/javascript">
        var app = app || <?php echo proverb_encode($GLOBALS['app']);?>;
    </script>

</head>
<body ontouchstart="" class="">

<div class="main">


    <section class="start is-active">
        <button class="button-enter js-enter-game">i律师</button>
    </section>


    <div class="overlay"></div>
</body>
</html>