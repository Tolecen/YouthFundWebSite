<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<link href="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Ashley Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.useso.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<!-- start slider -->
<link rel="stylesheet" type="text/css" href="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/css/slider.css" />
<script type="text/javascript" src="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/js/modernizr.custom.28468.js"></script>
<script type="text/javascript" src="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/js/jquery.cslider.js"></script>
	<script type="text/javascript">
			$(function() {
				$('#da-slider').cslider({
					autoplay : true,
					bgincrement : 450
				});

			});
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
			<div class="logo">
				<a href=""><img src="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/images/logo.jpg" alt="" /></a>
			</div>
			<span class="menu"></span>
			<div class="top-menu">
				<ul>
					<li><a class="active scroll" href="#home"><i class="home"></i>home</a></li>
					<li><a class="scroll" href="#news"><div class="message"><i class="news"></i><i class="news1"></i></div>news</a></li>
					<li><a class="scroll" href="#service"><div class="ser"><i class="service"></i><i class="service1"></i></div>services</a></li>
					<li><a class="scroll" href="#about"><div class="abt"><i class="about"></i><i class="about1"></i></div>ABOUT</a></li>
					<li><a class="scroll" href="#works"><div class="wrk"><i class="works"></i><i class="works1"></i></div>WORKS</a></li>
					<li><a class="scroll" href="#team"><div class="tm"><i class="team"></i><i class="team1"></i></div>team</a></li>
					<li><a class="scroll" href="#contact"><div class="cntc"><i class="contact"></i><i class="contact1"></i></div>contact</a></li>
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
				<div id="da-slider" class="da-slider"><!-- start slider -->
					<div class="da-slide">
						<h2>HELLO, THIS IS <br>ASHLEY</h2>
						<p>Bootstrap 3 One Page Template</p>
					</div>
					<div class="da-slide">
						<h2>HELLO, THIS IS  <br>ASHLEY</h2>
						<p>Bootstrap 3 One Page Template</p>
					</div>
					<div class="da-slide">
						<h2>HELLO, THIS IS  <br>ASHLEY</h2>
						<p>Bootstrap 3 One Page Template </p>
					</div>
					<nav class="da-arrows">
						<span class="da-arrows-prev"></span>
						<span class="da-arrows-next"></span>
					</nav>
				</div><!-- end slider -->
			</div>
		</div>
		<div class="col-md-5 banner-right">
			<img src="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/images/lady.png" alt="" />
		</div>
		<div class="clearfix"></div>
		</div>
	</div>
	<!-- end slider -->
    <div class="copyrights">Collect from <a href="http://www.cssmoban.com/" >企业网站模板</a></div>
	<div class="content">
		<div class="purchase">
			<div class="container">
				<div class="col-md-9 purchase-left">
					<h4><span>Ashley Bootstrap Website Template</span> is perfect for simple and clean presentation of your business.</h4>
				</div>
				<div class="col-md-3 purchase-right">
					<a href="#"><img src="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/images/p.png" alt="" />purchase now</a>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="news-section" id="news">
			<div class="container">
				<div class="news-section-head text-center">
					<h3>Breaking news</h3>
					<p>Here, there and everywhere... what we've been doing</p>
					<span></span>
				</div>
				<div class="news-section-grids">
					<div class="col-md-4 news-section-grid">
						<img src="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/images/n1.jpg" alt="" />
						<div class="info">
							<h5>New hair cut today</h5>
							<label>september 12</label>
							<p>The Duchess took her choice, and was gone in a moment. 'Let's go on with the game,' the Queen said to Alice; and Alice was too much frightened to say a word, but slowly followed her back to the croquet-ground.</p>
							<a class="more" href="#"><img src="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/images/go.png" class="readmore" alt="" />Read more</a>
						</div>
					</div>
					<div class="col-md-4 news-section-grid">
						<img src="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/images/n2.jpg" alt="" />
						<div class="info">
							<h5>New hair cut today</h5>
							<label>september 12</label>
							<p>The Duchess took her choice, and was gone in a moment. 'Let's go on with the game,' the Queen said to Alice; and Alice was too much frightened to say a word, but slowly followed her back to the croquet-ground.</p>
							<a class="more" href="#"><img src="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/images/go.png" class="readmore" alt="" />Read more</a>
						</div>
					</div>
					<div class="col-md-4 news-section-grid">
						<img src="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/images/n3.jpg" alt="" />
						<div class="info">
							<h5>New hair cut today</h5>
							<label>september 12</label>
							<p>The Duchess took her choice, and was gone in a moment. 'Let's go on with the game,' the Queen said to Alice; and Alice was too much frightened to say a word, but slowly followed her back to the croquet-ground.</p>
							<a class="more" href="#"><img src="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/images/go.png" class="readmore" alt="" />Read more</a>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<div class="services-section" id="service">
			<div class="container">
				<div class="services-section-head text-center">
					<h3>our services</h3>
					<p>We are doing a couple of things you might be interested in</p>
					<span></span>
				</div>
				<div class="services-section-grids">
					<div class="col-md-6 services-section-grid">
						<div class="icon">
							<i class="h"></i>
						</div>
						<div class="icon-text">
							<h5>Clean design</h5>
							<p>Elegant layouts that help you organize your content in the best way</p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-6 services-section-grid">
						<div class="icon">
							<i class="f"></i>
						</div>
						<div class="icon-text">
							<h5>HTML5 & CSS3</h5>
							<p>Elegant layouts that help you organize your content in the best way</p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-6 services-section-grid">
						<div class="icon">
							<i class="r"></i>
						</div>
						<div class="icon-text">
							<h5>Responsive design</h5>
							<p>Elegant layouts that help you organize your content in the best way</p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-6 services-section-grid">
						<div class="icon">
							<i class="c"></i>
						</div>
						<div class="icon-text">
							<h5>Easy Customization</h5>
							<p>Elegant layouts that help you organize your content in the best way</p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<div class="designer text-center">
			<div class="container">
				<h3>BEING A FAMOUS DESIGNER</h3>
				<h3>IS LIKE BEING A FAMOUS DENTIST</h3>
				<a href="#">_ NOREEN MORIOKA</a>
			</div>
		</div>
		<div class="about-section" id="about">
			<div class="container">
				<div class="about-section-head text-center">
					<h3>About us</h3>
					<p>Ashley is a versatile one page website template</p>
					<span></span>
				</div>
				<div class="about-section-grids">
					<div class="col-md-4 about-section-grid">
						<img src="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/images/abt_pic.jpg" alt="" />
					</div>
					<div class="col-md-4 about-section-grid">
						<h5>Build your website, now!</h5>
						<p>This did not seem to encourage the witness at all: he kept shifting from one foot to the other, looking uneasily at the Queen, and in his confusion he bit a large piece out of his teacup instead of the bread-and-butter.</p>
						<p>Just at this moment Alice felt a very curious sensation, which puzzled her a good deal until she made out what it was: she was beginning to grow larger again, and she thought at first she would get up and leave the court; but on second thoughts she decided to remain where she was as long as there was room for her.</p>
					</div>
					<div class="col-md-4 about-section-grid">
						<h5>Ashley website template</h5>
						<p>This did not seem to encourage the witness at all: he kept shifting from one foot to the other, looking uneasily at the Queen, and in his confusion he bit a large piece out of his teacup instead of the bread-and-butter.</p>
						<p>Just at this moment Alice felt a very curious sensation, which puzzled her a good deal until she made out what it was: she was beginning to grow larger again, and she thought at first she would get up and leave the court; but on second thoughts she decided to remain where she was as long as there was room for her.</p>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<div class="plan-section">
			<div class="container">
				<div class="plan-section-head text-center">
					<h3>our plans</h3>
					<span></span>
				</div>
				<div class="heads-up">
					<p><span>Heads up!</span> This template comes with all the features you need. <span>check them here</span></p>
					<a href="#"><img src="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/images/close.jpg" alt="" /></a>
					<div class="clearfix"></div>
				</div>
				<div class="plan-section-grids text-center">
					<div class="col-md-3 plan-section-grid">
						<div class="item">
							<p>Free</p>
						</div>
						<div class="rate">
							<h3>$10</h3>
							<p>per month</p>
						</div>
						<div class="plan-list">
							<ul>
								<li><a href="#">Lorem ipsum dolor sit amet</a></li>
								<li><a href="#">Lorem ipsum dolor sit amet</a></li>
								<li><a href="#">Lorem ipsum dolor sit amet</a></li>
								<li><a href="#">Lorem ipsum dolor sit amet</a></li>
								<li><a href="#">Lorem ipsum dolor sit amet</a></li>
								<li><a href="#">Lorem ipsum dolor sit amet</a></li>
							</ul>
						</div>
						<div class="sign-up">
							<input type="submit" value="sign up">
						</div>
					</div>
					<div class="col-md-3 plan-section-grid">
						<div class="item">
							<p>Silver</p>
						</div>
						<div class="rate">
							<h3>$10</h3>
							<p>per month</p>
						</div>
						<div class="plan-list">
							<ul>
								<li><a href="#">Lorem ipsum dolor sit amet</a></li>
								<li><a href="#">Lorem ipsum dolor sit amet</a></li>
								<li><a href="#">Lorem ipsum dolor sit amet</a></li>
								<li><a href="#">Lorem ipsum dolor sit amet</a></li>
								<li><a href="#">Lorem ipsum dolor sit amet</a></li>
								<li><a href="#">Lorem ipsum dolor sit amet</a></li>
							</ul>
						</div>
						<div class="sign-up">
							<input type="submit" value="sign up">
						</div>
					</div>
					<div class="col-md-3 plan-section-grid">
						<div class="item">
							<p>Gold</p>
						</div>
						<div class="rate">
							<h3>$25</h3>
							<p>per month</p>
						</div>
						<div class="plan-list">
							<ul>
								<li><a href="#">Lorem ipsum dolor sit amet</a></li>
								<li><a href="#">Lorem ipsum dolor sit amet</a></li>
								<li><a href="#">Lorem ipsum dolor sit amet</a></li>
								<li><a href="#">Lorem ipsum dolor sit amet</a></li>
								<li><a href="#">Lorem ipsum dolor sit amet</a></li>
								<li><a href="#">Lorem ipsum dolor sit amet</a></li>
							</ul>
						</div>
						<div class="sign-up">
							<input type="submit" value="sign up">
						</div>
					</div>
					<div class="col-md-3 plan-section-grid">
						<div class="item">
							<p>Platinium</p>
						</div>
						<div class="rate">
							<h3>$40</h3>
							<p>per month</p>
						</div>
						<div class="plan-list">
							<ul>
								<li><a href="#">Lorem ipsum dolor sit amet</a></li>
								<li><a href="#">Lorem ipsum dolor sit amet</a></li>
								<li><a href="#">Lorem ipsum dolor sit amet</a></li>
								<li><a href="#">Lorem ipsum dolor sit amet</a></li>
								<li><a href="#">Lorem ipsum dolor sit amet</a></li>
								<li><a href="#">Lorem ipsum dolor sit amet</a></li>
							</ul>
						</div>
						<div class="sign-up">
							<input type="submit" value="sign up">
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<div class="mobile text-center">
			<div class="container">
				<img src="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/images/devices.png" alt="" />
				<h3>MOBILE FIRST, TRULY RESPONSIVE,</h3>
				<h3>BASED ON BOOTSTRAP 3</h3>
			</div>
		</div>
		<div class="works-section" id="works">
			<div class="container">
				<div class="works-section-head text-center">
					<h3>our work</h3>
					<p>Latest cool projects we've been working on</p>
					<span></span>
				</div>
				<div class="works-section-grids">
					<div class="col-md-4 works-section-grid">
						<img src="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/images/pic1.jpg" alt="" />
						<h4>Full width image</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu lacus aliquam, pretium sapien ut, scelerisque turpis. </p>
						<a href="#"><i class="more"></i>read more</a>
					</div>
					<div class="col-md-4 works-section-grid">
						<img src="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/images/pic2.jpg" alt="" />
						<h4>Full width image</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu lacus aliquam, pretium sapien ut, scelerisque turpis. </p>
						<a href="#"><i class="more"></i>read more</a>
					</div>
					<div class="col-md-4 works-section-grid">
						<img src="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/images/pic3.jpg" alt="" />
						<h4>Full width image</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu lacus aliquam, pretium sapien ut, scelerisque turpis. </p>
						<a href="#"><i class="more"></i>read more</a>
					</div>
					<div class="col-md-4 works-section-grid">
						<img src="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/images/pic4.jpg" alt="" />
						<h4>Full width image</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu lacus aliquam, pretium sapien ut, scelerisque turpis. </p>
						<a href="#"><i class="more"></i>read more</a>
					</div>
					<div class="col-md-4 works-section-grid">
						<img src="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/images/pic1.jpg" alt="" />
						<h4>Full width image</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu lacus aliquam, pretium sapien ut, scelerisque turpis. </p>
						<a href="#"><i class="more"></i>read more</a>
					</div>
					<div class="col-md-4 works-section-grid">
						<img src="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/images/pic5.jpg" alt="" />
						<h4>Full width image</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu lacus aliquam, pretium sapien ut, scelerisque turpis. </p>
						<a href="#"><i class="more"></i>read more</a>
					</div>
					<div class="col-md-4 works-section-grid">
						<img src="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/images/pic6.jpg" alt="" />
						<h4>Full width image</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu lacus aliquam, pretium sapien ut, scelerisque turpis. </p>
						<a href="#"><i class="more"></i>read more</a>
					</div>
					<div class="col-md-4 works-section-grid">
						<img src="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/images/pic3.jpg" alt="" />
						<h4>Full width image</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu lacus aliquam, pretium sapien ut, scelerisque turpis. </p>
						<a href="#"><i class="more"></i>read more</a>
					</div>
					<div class="col-md-4 works-section-grid">
						<img src="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/images/pic2.jpg" alt="" />
						<h4>Full width image</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu lacus aliquam, pretium sapien ut, scelerisque turpis. </p>
						<a href="#"><i class="more"></i>read more</a>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<div class="write text-center">
			<div class="container">
				<img src="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/images/star.png" alt="" />
				<h3>Write drunk; edit sober</h3>
				<a href="#">_ ernest hemingway</a>
			</div>
		</div>
		<div class="team-section" id="team">
			<div class="container">
				<div class="team-section-head text-center">
					<h3>Meet our team</h3>
					<p>We are beautiful and smart</p>
					<span></span>
				</div>
				<div class="team-section-grids">
					<div class="col-md-3 team-section-grid">
						<img src="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/images/t1.jpg" alt="" />
						<div class="team-member text-center">
							<h4>John DOE</h4>
							<p>Executive Director</p>
						</div>
							<a class="author" href="#">j.doe@ashley.com</a>
						<div class="social-icons">
							<a href="#"><i class="facebook"></i></a>
							<a href="#"><i class="twitter"></i></a>
							<a href="#"><i class="googlepluse"></i></a>
							<a href="#"><i class="linkedin"></i></a>
							<a href="#"><i class="flickr"></i></a>
						</div>
					</div>
				</div>
				<div class="col-md-3 team-section-grid">
						<img src="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/images/t3.jpg" alt="" />
						<div class="team-member text-center">
							<h4>Johanna Newsom</h4>
							<p>Salesman</p>
						</div>
							<a class="author" href="#">j.newsom@ashley.com</a>
						<div class="social-icons">
							<a href="#"><i class="facebook"></i></a>
							<a href="#"><i class="twitter"></i></a>
							<a href="#"><i class="googlepluse"></i></a>
							<a href="#"><i class="linkedin"></i></a>
							<a href="#"><i class="flickr"></i></a>
						</div>
					</div>
					<div class="col-md-3 team-section-grid">
						<img src="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/images/t2.jpg" alt="" />
						<div class="team-member text-center">
							<h4>Alexander Doe</h4>
							<p>Graphic designer</p>
						</div>
							<a class="author" href="#">a.doe@ashley.com</a>
						<div class="social-icons">
							<a href="#"><i class="facebook"></i></a>
							<a href="#"><i class="twitter"></i></a>
							<a href="#"><i class="googlepluse"></i></a>
							<a href="#"><i class="linkedin"></i></a>
							<a href="#"><i class="flickr"></i></a>
						</div>
					</div>
					<div class="col-md-3 team-section-grid">
						<img src="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/images/t4.jpg" alt="" />
						<div class="team-member text-center">
							<h4>Pamela Anderson</h4>
							<p>Programmer</p>
						</div>
							<a class="author" href="#">p.anderson66@ashley.com</a>
						<div class="social-icons">
							<a href="#"><i class="facebook"></i></a>
							<a href="#"><i class="twitter"></i></a>
							<a href="#"><i class="googlepluse"></i></a>
							<a href="#"><i class="linkedin"></i></a>
							<a href="#"><i class="flickr"></i></a>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="touch text-center">
				<h3>Keep in touch with us</h3>
			</div>
			<div class="contact-section" id="contact">
				<div class="container">
					<div class="contact-section-head text-center">
						<h3>Contact us</h3>
						<span></span>
					</div>
					<div class="map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d109999.82879367232!2d-97.60761925385881!3d30.50704909528786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited+States!5e0!3m2!1sen!2sin!4v1424169481181" frameborder="0" style="border:0"></iframe>
					</div>
					<div class="contact-form-bottom">
						<div class="col-md-4 address">
							<address>
								<h5>Address:</h5>
								<p>Himalaya Company</p>
								<p>77 Mass. Ave., E14/E15</p>
								<p class="bottom">Cambridge, MA 02139-4307 USA</p>
								<h5>Phone:</h5>
								<p>615.987.1234</p>
							</address>
						</div>
						<div class="col-md-4 contact-form">
						<form>
								<div class="contact-form-row">
									<div>
										<span>Name</span>
										<input type="text" class="text" value="" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = '';}">
									</div>
									<div>
										<span>Email</span>
										<input type="text" class="text" value="" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = '';}">
									</div>
									<div>
										<span>phone</span>
										<input type="text" class="text" value="" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = '';}">
									</div>
									<input type="submit" value="Submit" />
									<div class="clearfix"> </div>
								</div>
						</form>
					</div>
					<div class="col-md-4 contact-form-row comments">
						<div>
							<span>Comments</span>
							<textarea value="" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = '';}"></textarea>
						</div>
						<div>
							<span>Security</span>
							<img src="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/images/security.jpg" class="code" alt="" />
							<input type="text" class="text" value="" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = '';}">
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer">
			<div class="footer-top">
			<div class="container">
				<div class="col-md-9 footer-top-left">
					<a href="#"><img src="<?php echo $GLOBALS['app']['scheme']; ?>://<?php echo $GLOBALS['app']['host']; ?>/static/images/main-logo.jpg" alt="" /></a>
					<p><span>Little Neko</span> is a web design and development studio. We build responsive HTML5 and CSS3 templates, integrating best web design practises and up-to-date web technologies to create great user experiences. We love what we do and we hope you too !</p>
				</div>
				<div class="col-md-3 footer-top-right">
					<h5>Little NEKO</h5>
					<ul>
						<li><i class="location"></i></li>
						<li>
							<p>77 Mass. Ave., E14/E15</p>
							<p>Cambridge, MA 02139-4307 USA </p>
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
		<div class="container">
			<div class="footer-bottom">
				<div class="copyright">
					<p>Copyright &copy; 2015.Company name All rights reserved.More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></p>
				</div>
				<div class="social-icons footer-icons">
					<a href="#"><i class="facebook"></i></a>
					<a href="#"><i class="twitter"></i></a>
					<a href="#"><i class="googlepluse"></i></a>
					<a href="#"><i class="linkedin"></i></a>
					<a href="#"><i class="flickr"></i></a>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
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