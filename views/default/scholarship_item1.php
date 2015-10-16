<!DOCTYPE html>
<html>
<head>
    <title>伏彦-<?php echo $GLOBALS['setting']['site_title']; ?></title>
    <link rel="shortcut icon" href="/favicon.ico" />
    <link href="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/js/jquery.min.js"></script>
    <!-- Custom Theme files -->
    <link href="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Custom Theme files -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="<?php echo $GLOBALS['setting']['seo_keyword']; ?>">
    <meta name="description" content="山东理工大学原物理学院2003级教育技术学专业毕业，理学学士。大学期间，担任学院新闻部部长、山东理工大学学生工作部（处）青春在线第六届共建部主任、山东理工大学报社学生记者，兼任“中国教育在线”通讯员、“中国青年网”通讯员、中国青年作家协会会员、山东省青年作家协会会员等职，获第五届全国“挑战杯”大学生创业计划大赛山东省一等奖等奖励。--<?php echo $GLOBALS['setting']['seo_description']; ?>">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--webfont-->
    <link href='http://fonts.useso.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!-- start slider -->
    <link rel="stylesheet" type="text/css" href="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/css/slider.css" />
    <script type="text/javascript" src="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/js/modernizr.custom.28468.js"></script>
    <script type="text/javascript" src="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/js/jquery.cslider.js"></script>
    <script type="text/javascript">
        //			$(function() {
        //				$('#da-slider').cslider({
        //					autoplay : true,
        //					bgincrement : 450
        //				});
        //
        //			});
    </script>
    <script type="text/javascript" src="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/js/move-top.js"></script>
    <script type="text/javascript" src="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/js/easing.js"></script>

</head>
<body>
<!-- header-section-starts -->
<div class="header" style="background:#44A9FA">
    <div class="container">
        <div class="logo" <?php if(!isMobile()){?> style="position: absolute;left: 70px;margin-top: 2.25em;" <?php }?>>
            <a href="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>"><img <?php if(!isMobile()){?> width="280" <?php }else{?> width="300" <?php }?> src="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/images/logo.png" alt="" /></a>
        </div>
        <span class="menu" <?php if(!isMobile()){?> style="float: left;height: 109px;width: 100px;margin-top: 2.25em;" <?php }?> ></span>
        <div class="top-menu" <?php if(!isMobile()){?> style="position: absolute;right: 70px;margin-top: 2.25em;" <?php }?>>
            <ul>
                <li><a class="active scroll" href="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>#home"><i class="home"></i>首页</a></li>
                <li><a class="scroll" href="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>#news"><div class="message"><i class="news"></i><i class="news1"></i></div>动态</a></li>
                <li><a class="scroll" href="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>#service"><div class="ser"><i class="service"></i><i class="service1"></i></div>项目</a></li>
                <li><a class="scroll" href="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>#works"><div class="wrk"><i class="works"></i><i class="works1"></i></div>奖学金</a></li>
                <li><a class="scroll" href="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>#team"><div class="tm"><i class="team"></i><i class="team1"></i></div>三人成虎</a></li>
                <li><a class="scroll" href="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>#contact"><div class="cntc"><i class="contact"></i><i class="contact1"></i></div>联系</a></li>
                <div class="clearfix"></div>
            </ul>
            </ul>
        </div>
        <!-- script for menu -->
        <script>
            $( "span.menu" ).click(function() {
                $( ".top-menu" ).slideToggle( "slow", function() {
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
            <h3>伏彦</h3>
            <span></span>
        </div>
        <div class="about-section-grids">
            <div class="col-md-3 about-section-grid">
                <img src="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/images/avatar002.jpg" alt="" style="border-radius: 268px" />
            </div>
            <div class="col-md-9 about-section-grid" style="font-size: 1.1em">
                <p>男，云南昆明人。</p>
                <p>山东理工大学原物理学院2003级教育技术学专业毕业，理学学士。大学期间，担任学院新闻部部长、山东理工大学学生工作部（处）青春在线第六届共建部主任、山东理工大学报社学生记者，兼任“中国教育在线”通讯员、“中国青年网”通讯员、中国青年作家协会会员、山东省青年作家协会会员等职，获第五届全国“挑战杯”大学生创业计划大赛山东省一等奖等奖励。</p>
                <p>曾任清华大学中国学术期刊杂志社总编室编辑、奥琦玮信息科技（北京）有限公司市场营销部经理。现任翠辉珠宝有限公司董事长兼总经理，翡翠玉石论坛、翡翠之家、翠辉珠宝创始人，是青春在线奖学金创始发起人、投资人。</p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<?php include("footer.php"); ?>
<script type="text/javascript">
    $(document).ready(function() {
        /*
         var defaults = {
         containerID: 'toTop', // fading element id
         containerHoverID: 'toTopHover', // fading element hover id
         scrollSpeed: 1200,
         easingType: 'linear'
         };
         */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

</body>
</html>