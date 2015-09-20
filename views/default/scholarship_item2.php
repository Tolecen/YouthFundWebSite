<!DOCTYPE html>
<html>
<head>
    <title>李燕-<?php echo $GLOBALS['setting']['site_title']; ?></title>
    <link href="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/js/jquery.min.js"></script>
    <!-- Custom Theme files -->
    <link href="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Custom Theme files -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="<?php echo $GLOBALS['setting']['seo_keyword']; ?>">
    <meta name="description" content="<?php echo $GLOBALS['setting']['seo_description']; ?>">
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
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
            });
        });
    </script>

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
            <h3>李燕</h3>
            <p style="font-size: 1.2em;">曾任香港成报传媒集团香港成报网总编、搜狐新闻客户端用户运营主管、搜狐集团市场部公关主管、尽膳口福连锁餐饮营运总裁、疯狂洗车联合创始人、COO，是自媒体天方燕谈创建者、腾讯OMG（网络媒体事业群）专家顾问...</p>
            <span></span>
        </div>
        <div class="about-section-grids">
            <div class="col-md-3 about-section-grid">
                <img src="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/images/avatar001.jpg" alt="" style="border-radius: 268px" />
            </div>
            <div class="col-md-9 about-section-grid" style="font-size: 1.4em">
                <p>男，四川乐山人。</p>
                <p>山东理工大学法学院2004级社会工作专业本科毕业，法学学士。大学期间，担任山东理工大学学生工作部（处）青春在线网站第七届站长、山东理工大学党委宣传部大学生记者协会第二届主席、山东理工大学团委《理工青年》报创刊编委、副主编、教育部中国大学生在线发展协会山东理工大学分会首届会长。</p>
                <p>曾任乐山市更生学校团委书记、高中部2011届文科8班班主任、教师，包头宝林生态工程有限公司运营总监、广州百道网络科技有限公司总经理、香港成报传媒集团香港成报网总编、搜狐新闻客户端用户运营主管、搜狐集团市场部公关主管、尽膳口福连锁餐饮营运总裁、疯狂洗车联合创始人、COO，是自媒体天方燕谈创建者、腾讯OMG（网络媒体事业群）专家顾问、冰帆海淘营销顾问、枣到了营销顾问、抽屉新热榜战略顾问、青岛日报报业集团掌控传媒新媒体顾问、虚拟货币交易平台OKCoin媒体顾问。也是搜狐集团认证讲师、2013搜狐集团“创新思享汇”年度最受欢迎讲师，2013联想集团创客大赛自媒体评委、2014海尔集团海立方创客大赛评委、2014年虎嗅网年度“FM”节主持人，同时担任乐山市更生学校校友总会秘书长、山东理工大学北京青年校友会常务副秘书长。</p>
                <p>现为青春在线创投基金创始人、执行事务合伙人，更生之火校友基金创始人、执行事务合伙人，I律师创始人、CEO，是青春在线奖学金创始发起人、投资人，乐山市更生学校火魂奖学金创始发起人、投资人。</p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="col-md-2 footer-top-left">
                <a href="#"><img src="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/images/wqcode.jpg" alt="" width="150" /></a>
                <p>扫描</p>
                <p>关注官方微信</p>
            </div>
            <div class="col-md-2 footer-top-left">
                <a href="#"><img src="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/images/wqcode.jpg" alt="" width="150" /></a>
                <p>扫描</p>
                <p>关注官方微博</p>
            </div>
            <div class="col-md-3 footer-top-right">
                <h5>联系我们</h5>
                <ul>
                    <li>
                    <li><i class="phone"></i></li>
                    <li><p>点击关注新浪微博 </p></li>
                    </li>
                </ul>
                <ul>
                    <li><i class="phone"></i></li>
                    <li><p>256.478.3252 </p></li>
                </ul>
                <ul>
                    <li><i class="msg"></i></li>
                    <li><a href="main-to:example@mail.com">little@little-neko.com</a></li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>

    </div>
    <div class="clearfix" style="height: 60px; text-align: center; padding-top: 20px">Copyright©2013-2015 青春在线创业基金会.All Rights Reserved.</div>
</div>
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