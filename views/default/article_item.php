<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title><?php echo $article['topic_name']; ?>-<?php echo $GLOBALS['setting']['site_title']; ?></title>
    <link rel="shortcut icon" href="/favicon.ico" />
    <link
        href="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/css/bootstrap.css"
        rel='stylesheet' type='text/css'/>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script
        src="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/js/jquery.min.js"></script>
    <!-- Custom Theme files -->
    <link href="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/css/style.css"
          rel="stylesheet" type="text/css" media="all"/>
    <!-- Custom Theme files -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="<?php echo $GLOBALS['setting']['seo_keyword']; ?>">
    <meta name="description"
          content="<?php if(count($article['topic_intro']) > 0) { echo $article['topic_intro']; } else { echo substr($article['topic_desc'], 0, 100); } ?>--<?php echo $GLOBALS['setting']['seo_description']; ?>">
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);
        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <!--webfont-->
    <link
        href='http://fonts.useso.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
        rel='stylesheet' type='text/css'>
    <!-- start slider -->
    <link rel="stylesheet" type="text/css"
          href="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/css/slider.css"/>
    <script type="text/javascript"
            src="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/js/modernizr.custom.28468.js"></script>
    <script type="text/javascript"
            src="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/js/jquery.cslider.js"></script>
    <script type="text/javascript">
        //			$(function() {
        //				$('#da-slider').cslider({
        //					autoplay : true,
        //					bgincrement : 450
        //				});
        //
        //			});
    </script>
    <script type="text/javascript"
            src="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/js/move-top.js"></script>
    <script type="text/javascript"
            src="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/js/easing.js"></script>

</head>
<body>
<!-- header-section-starts -->
<div class="header" style="background:#44A9FA">
    <div class="container">
        <div
            class="logo" <?php if (!isMobile()) { ?> style="position: absolute;left: 70px;margin-top: 2.25em;" <?php } ?>>
            <a href="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>"><img <?php if (!isMobile()) { ?> width="280" <?php } else { ?> width="300" <?php } ?>
                    src="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/images/logo.png"
                    alt=""/></a>
        </div>
        <span
            class="menu" <?php if (!isMobile()) { ?> style="float: left;height: 109px;width: 100px;margin-top: 2.25em;" <?php } ?> ></span>

        <div
            class="top-menu" <?php if (!isMobile()) { ?> style="position: absolute;right: 70px;margin-top: 2.25em;" <?php } ?>>
            <ul>
                <li><a class="active scroll"
                       href="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>#home"><i
                            class="home"></i>首页</a></li>
                <li><a class="scroll"
                       href="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>#news">
                        <div class="message"><i class="news"></i><i class="news1"></i></div>
                        动态</a></li>
                <li><a class="scroll"
                       href="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>#service">
                        <div class="ser"><i class="service"></i><i class="service1"></i></div>
                        项目</a></li>
                <li><a class="scroll"
                       href="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>#works">
                        <div class="wrk"><i class="works"></i><i class="works1"></i></div>
                        奖学金</a></li>
                <li><a class="scroll"
                       href="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>#team">
                        <div class="tm"><i class="team"></i><i class="team1"></i></div>
                        三人成虎</a></li>
                <li><a class="scroll"
                       href="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>#contact">
                        <div class="cntc"><i class="contact"></i><i class="contact1"></i></div>
                        联系</a></li>
                <div class="clearfix"></div>
            </ul>
            </ul>
        </div>
        <!-- script for menu -->
        <script>
            $("span.menu").click(function () {
                $(".top-menu").slideToggle("slow", function () {
                    // Animation complete.
                });
            });
        </script>
        <!-- script for menu -->

        <div class="clearfix"></div>
    </div>
</div>
<div class="about-section" id="about">
    <div class="container">
        <div class="about-section-head text-center">
            <h3 class="col-md-12 <?php if(isMobile()){ ?> text-left <?php } ?>"><?php echo $article['topic_name']; ?></h3>
            <p class="col-md-12"><?php echo date('Y-m-d', $article['created_time']); ?></p>
            <span style="vertical-align: top"></span>
        </div>
        <div class="about-section-grids2">
            <div class="col-md-12 about-section-grid2">
                <?php echo $article['topic_desc']; ?>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<?php include("footer.php"); ?>
<script type="text/javascript">
    $(document).ready(function () {

        $('.about-section-grid2 img').each(function() {
            var maxWidth = window.screen.width-60; // 图片最大宽度
            var ratio = 0;  // 缩放比例
            var width = $(this).width();    // 图片实际宽度
            var height = $(this).height();  // 图片实际高度

            // 检查图片是否超宽
            if(width > maxWidth){
                ratio = maxWidth / width;   // 计算缩放比例
                $(this).css("width", maxWidth); // 设定实际显示宽度
                height = height * ratio;    // 计算等比例缩放后的高度
                $(this).css("height", height);  // 设定等比例缩放后的高度
            }

        });


        $().UItoTop({easingType: 'easeOutQuart'});

    });
</script>
<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

</body>
</html>