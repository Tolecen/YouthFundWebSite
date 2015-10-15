<!DOCTYPE html>
<html>
<head>
    <title>三人成虎-<?php echo $GLOBALS['setting']['site_title']; ?></title>
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
          content="青春在线创投基金的创始人、执行事务合伙人李燕先生，早在2011年，就对“三人成虎”逆向解读、反话正用，在北京、广州、深圳和山东等地发起饭局，每次出资1000元，邀请3位在某个行业有亲身体会、资深观察或者某个话题有独到见解的人士免费参加，一边享受美酒美食一边欢快碰撞和交流---<?php echo $GLOBALS['setting']['seo_description']; ?>">
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
            <h3>三人成虎</h3>
            <p> </p>
            <span></span>
        </div>
        <div class="about-section-grids2">
            <div class="col-md-12 about-section-grid2">
                <p>三人成虎，语出《战国策·魏策二》：夫市之无虎明矣，然而三人言而成虎。意思是三个人谎报集市里有老虎，听的人就信以为真。比喻说的人多了，就能使人们把谣言当做事实。<br></p><p style="text-align: center;"><img alt="sanrenchenghu_03.png" src="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/data/upload/15e176ff87bf02c2a3066bec9731a673.png" width="800" height="397"><br></p><p>青春在线创投基金的创始人、执行事务合伙人李燕先生，早在2011年，就对“三人成虎”逆向解读、反话正用，在北京、广州、深圳和山东等地发起饭局，每次出资1000元，邀请3位在某个行业有亲身体会、资深观察或者某个话题有独到见解的人士免费参加，一边享受美酒美食一边欢快碰撞和交流，饭局结束时还送出国内外经典、畅销图书等礼物，使“三人成虎”变成了物质和精神食粮共存的特色饭局交流平台和符号象征。</p><p>青春在线创投基金将进一步延续李燕先生发起的“三人成虎”交流平台，计划每月举行一期，由基金合伙人出面组织、主持，陆续邀请社会各行各业在创新、创业上有大胆尝试和突出表现的人士参加，并向创业者与投资人交流、撮合的方向倾斜，利用早餐、午餐、晚宴或下午茶等形式，帮助大家结交高端人脉、跨界融合和整合资源，共享物质与精神食粮。</p><p>谣言、误解甚至敌视，或许都是因为交流不足、彼此不够了解和理解。青春在线创投基金的三人成虎交流平台，力争成为“三人成虎”现象的终结者，促成更多优质项目的良好传播和发展，促成更多优秀人士的交流与合作。</p><p>三人成虎交流平台，欢迎各届人士申请参与（简历含照片请发送2635454227@qq.com），也欢迎公司或个人友情赞助（联系邮件请发送622005022@qq.com）。</p>            </div>
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
<a href="#" id="toTop" style="display: block;"><span id="toTopHover"></span> <span id="toTopHover" style="opacity: 1;"> </span></a>


<a href="#" id="toTop">To Top</a></body></html>