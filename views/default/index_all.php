<!DOCTYPE html>
<html>
<head>
<title><?php echo $GLOBALS['setting']['site_title']; ?></title>
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
	<div class="header">
		<div class="container">
			<div class="logo" <?php if(!isMobile()){?> style="position: absolute;left: 36px;margin-top: 2.25em;" <?php }?>>
				<a href=""><img <?php if(!isMobile()){?> width="500" <?php }else{?> width="300" <?php }?> src="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/images/main_logo.png" alt="" /></a>
			</div>
			<span class="menu" <?php if(!isMobile()){?> style="float: left;height: 109px;width: 100px;margin-top: 2.25em;" <?php }?> ></span>
			<div class="top-menu" <?php if(!isMobile()){?> style="position: absolute;right: 36px;margin-top: 2.25em;" <?php }?>>
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
	<!-- start slider -->
	<div class="banner">
	<div class="container">
		<div class="col-md-7 banner-left">
			<div class="slider text-left" id="home">
                <!-- start slider -->
<!--				<div id="da-slider" class="da-slider">-->
<!--					<div class="da-slide">-->
<!--						<h2>青春在线</h2>-->
<!--						<p>青春在线创投基金</p>-->
<!--					</div>-->
<!--					<div class="da-slide">-->
<!--                        <h2>青春在线</h2>-->
<!--                        <p>青春在线创投基金</p>-->
<!--					</div>-->
<!--					<div class="da-slide">-->
<!--                        <h2>青春在线</h2>-->
<!--                        <p>青春在线创投基金</p>-->
<!--					</div>-->
<!--					<nav class="da-arrows">-->
<!--						<span class="da-arrows-prev"></span>-->
<!--						<span class="da-arrows-next"></span>-->
<!--					</nav>-->
<!--				</div>-->
<!-- end slider -->
			</div>
		</div>
		<div class="clearfix"></div>
		</div>
	</div>
	<!-- end slider -->
	<div class="content">
		<div class="purchase">
			<div class="container">
				<div class="col-md-9 purchase-left">
					<h1>项目推介及融资申请</h1>
					<h4>为您的项目申请推介或融资</h4>
				</div>
				<div class="col-md-3 purchase-right">
					<a href="#"><img src="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/images/p.png" alt="" />填写资料</a>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="news-section" id="news">
			<div class="container">
				<div class="news-section-head text-center">
					<h3>新闻动态<a class="more" href="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/article/all">查看更多 ></a></h3>
					<p>我们的最新动态，投资及投资项目动态</p>
					<span></span>
				</div>
				<div class="news-section-grids">
					<?php for($i = 0; $i < count($topics); $i++){ ?>
					<div class="col-md-4 news-section-grid">
						<img src="<?php echo $topics[$i]['file']['host'].$topics[$i]['file']['path'].$topics[$i]['file']['key'];?>" alt="" />
						<div class="info">
							<h5><?php echo $topics[$i]["topic_name"];?></h5>
							<label><?php echo date('Y-m-d', $topics[$i]["created_time"]);?></label>
							<p><?php echo $topics[$i]["topic_intro"];?></p>
							<a class="more" href="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/article/<?php echo $topics[$i]["topic_id"];?>"><img src="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/images/go.png" class="readmore" alt="" />详 情</a>
						</div>
					</div>
					<?php } ?>

					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<div class="services-section" id="service">
			<div class="container">
				<div class="services-section-head text-center">
					<h3>项目推介 融资申请</h3>
					<p>为您的项目申请推介或融资</p>
					<span></span>
				</div>
				<div class="services-section-grids">

                    <div class="col-md-6 services-left" <?php if(isMobile()){?> style="float: none" <?php }?>>
                        <a href="#"><img src="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/images/p-3.png" alt="" width="30" />高校项目</a>
                    </div>
                    <div class="col-md-6 services-left" <?php if(isMobile()){?> style="float: none" <?php }?>>
                        <a href="#"><img src="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/images/p-2.png" alt="" width="30" />社会项目</a>
                    </div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
        <div class="works-section" id="works">
            <div class="container">
                <div class="works-section-head text-center">
                    <h3>青春在线奖学金<a class="more" href="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/scholarship/all">查看详情 ></a></h3>
                    <p>山东理工大学站友发起，重视创新、创业的各界人士共同投资、运营</p>
                    <span></span>
                </div>
                <div class="works-section-grids">
                    <div class="col-md-2 works-section-grid">
                        <img src="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/images/avatar001.jpg" alt="" style="border-radius: 268px" />
                        <h4>刘杰</h4>
                        <p>曾任搜狐汽车事业部区域内容总监、搜狐移动新媒体专业顾问，是笨鸟网、车图腾创始人，现任AutoKol联合创始人、媒体事业部总经理，青春在线奖学金创始发起人、投资人...</p>
                        <a href="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/scholarship/0"><i class="more"></i>更多</a>
                    </div>
                    <div class="col-md-2 works-section-grid">
                        <img src="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/images/avatar002.jpg" alt="" style="border-radius: 268px" />
                        <h4>伏彦</h4>
                        <p>曾任清华大学中国学术期刊杂志社总编室编辑、奥琦玮信息科技（北京）有限公司市场营销部经理。现任翠辉珠宝有限公司董事长兼总经理，翡翠玉石论坛、翡翠之家、翠辉珠宝创始人，是青春在线奖学金创始发起人、投资人... </p>
                        <a href="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/scholarship/1"><i class="more"></i>更多</a>
                    </div>
                    <div class="col-md-2 works-section-grid">
                        <img src="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/images/avatar003.jpg" alt="" style="border-radius: 268px" />
                        <h4>李燕</h4>
                        <p>曾任香港成报传媒集团香港成报网总编、搜狐新闻客户端用户运营主管、搜狐集团市场部公关主管、尽膳口福连锁餐饮营运总裁、疯狂洗车联合创始人、COO，是自媒体天方燕谈创建者、腾讯OMG（网络媒体事业群）专家顾问...</p>
                        <a href="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/scholarship/2"><i class="more"></i>更多</a>
                    </div>
                    <div class="col-md-2 works-section-grid">
                        <img src="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/images/avatar004.jpg" alt="" style="border-radius: 268px" />
                        <h4>马智</h4>
                        <p>曾任搜狐网搜狐教育频道编辑、腾讯网腾讯教育频道编辑，腾讯精品课运营负责人。现为青春在线创投基金合伙人，北京爱天平信息技术服务有限公司股东、I律师联合创始人、COO，是青春在线奖学金创始发起人、投资人...</p>
                        <a href="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/scholarship/3"><i class="more"></i>更多</a>
                    </div>
                    <div class="col-md-2 works-section-grid">
                        <img src="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/images/avatar005.jpg" alt="" style="border-radius: 268px" />
                        <h4>王嘉</h4>
                        <p>曾任淄博实验中学教师，是国家认证理财师。现任淄博卡哥投资咨询有限公司总经理、北京爱天平信息技术服务有限公司股东、I律师联合创始人、CFO，是青春在线奖学金创始发起人、投资人...</p>
                        <a href="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/scholarship/4"><i class="more"></i>更多</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="mobile text-center">
            <div class="container">
                <h1>三人成虎</h1>
                <h3>一个投资人与创业者的早餐、午餐或晚餐会</h3>
                <h3><a href="#">查看详情>></a></h3>
            </div>
        </div>
		<div class="about-section" id="about">
			<div class="container">
				<div class="about-section-head text-center">
					<h3>关于我们</h3>
					<p>青春在线创投基金简介</p>
					<span></span>
				</div>
				<div class="about-section-grids">
					<div class="col-md-4 about-section-grid">
						<img src="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/images/abt_pic.jpg" alt="" />
					</div>
					<div class="col-md-8 about-section-grid">
                        <p>青春在线创投基金，是北京青春在线投资管理中心（有限合伙）成立的一支关注高校和社会30岁以下人群、创新创业项目的投资基金。</p>
                        <p>现任中国总理李克强，最早在2014年9月的夏季达沃斯论坛上，公开场合发出“大众创业、万众创新”的号召。当时他提出，要在960万平方公里土地上掀起“大众创业”、“草根创业”的新浪潮，形成“万众创新”、“人人创新”的新态势。此后，他在首届世界互联网大会、国务院常务会议和各种场合中频频阐释这一关键词。每到一地考察，李克强总理几乎都要与当地年轻的“创客”会面。他希望激发民族的创业精神和创新基因。</p>
                        <p>2015年，李克强总理在政府工作报告又提出：“大众创业，万众创新”。政府工作报告中这样表述——推动大众创业、万众创新，“既可以扩大就业、增加居民收入，又有利于促进社会纵向流动和公平正义”。</p>
                        <p>创新、创业，强调“让人们在创造财富的过程中，更好地实现精神追求和自身价值”。</p>
                        <p>2015年8月15日，国务院办公厅关于同意建立推进大众创业万众创新部际联席会议制度的函（国办函〔2015〕90号）：国务院同意建立由发展改革委牵头的推进大众创业万众创新部际联席会议制度。联席会议不刻制印章，不正式行文，按照国务院有关文件精神，认真组织开展工作。当前中国经济发展正处于新旧动力转换的关键时期，保持经济运行在合理区间，使新的增长点破茧而出，简政放权、放管结合、强化服务改革，政府正在跑出加速度。在持续为大众创业、万众创新清障搭台，释放中国经济的无限活力方面，青春在线创投基金愿意贡献绵薄之力。</p>
                        <p>青春在线创投基金第一期规模500万元人民币，主要对高校和社会30岁以下人群创新创业项目的种子期和天使轮，进行投资和深度孵化。</p>
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