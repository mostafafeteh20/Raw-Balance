<?php 
session_start();
error_reporting(E_ALL);
// error_reporting(E_ERROR);
// error_reporting(0);
?>
<!DOCTYPE html>
<!-- saved from url=(0065)https://rawbalance.ca/ -->
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><script src="./assets/analytics.js.download" type="text/javascript"></script>
	<script type="text/javascript">window.addEventListener('DOMContentLoaded',function(){var v=archive_analytics.values;v.service='wb';v.server_name='wwwb-app217.us.archive.org';v.server_ms=316;archive_analytics.send_pageview({});});</script>
	<script type="text/javascript" src="./assets/bundle-playback.js.download" charset="utf-8"></script>
	<script type="text/javascript" src="./assets/wombat.js.download" charset="utf-8"></script>

	<link rel="stylesheet" type="text/css" href="./assets/banner-styles.css">
	<link rel="stylesheet" type="text/css" href="./assets/iconochive.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	<link rel="stylesheet" href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
<!-- End Wayback Rewrite JS Include -->

<?php
	include('common.php');	
	$handle = connectdb();
	mysqli_select_db($handle, "rawbalance_store");	

	if (isset($_GET['action']) && $_GET['action'] == 'addToCart')
	{
		$q = (int) $_GET['quantity'];
		$res = addToCart($id, $q, $handle);
		$addresult = $res;
	}	

?>
	
	<title>RawBalance - Contacts</title>
	<meta name="description" content="New Site by UXCode">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="icon" href="./assets/images/dest/favicon.ico">
	<meta property="og:image" content="https://rawbalance.ca/images/dest/preview.jpg">

	<!-- Custom Browsers Color Start -->
	<meta name="theme-color" content="#000">
	<!-- Custom Browsers Color End -->

	<link rel="stylesheet" href="./assets/app.min.css">
</head>
<body>
	<!-- Developed by UxCodes -->
	<!-- <div class="loader" id="page-loader">
		<div class="preloader__wrapper">
			<div class="prelaoder-block"></div>
			<div class="prelaoder-block"></div>
			<div class="prelaoder-block"></div>
			<div class="prelaoder-block"></div>
			<div class="prelaoder-block"></div>
		</div>
	</div> -->

	<div class="wrapper">
		<main class="main__content">
			<div class="top__line">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-2 col-4">		
							<img src="./assets/images/dest/newlogo.png" alt="Raw Balance" style="width: 150px;">
						</div>
						<!-- /.col-lg-2 -->
						<div class="col-lg-7 col-8">
							<div class="hamburger-wrapper d-block d-lg-none">
								<button class="hamburger hamburger--collapse" type="button">
									<span class="hamburger-box">
										<span class="hamburger-inner"></span>
									</span>
								</button>
							</div>
							<!-- /.hamburger-wrapper -->
							<nav class="top__line-nav d-lg-block d-none">
								<ul class="nav">
									<li class="nav__li"><a href="index.php" class="nav__link">Home</a></li>
									<li class="nav__li"><a href="about.php" class="nav__link">About us</a></li>
									<li class="nav__li"><a href="products.php" class="nav__link">Products</a></li>
									<li class="nav__li"><a href="contact.php" class="nav__link">Contacts</a></li>
									<li class="nav__li"><a href="cart.php" class="fas fa-shopping-cart" class="nav__link"></a></li>
									<li class="cart_item_count"><span>&nbsp;&nbsp;<?php echo countItemsInCart(); ?></span></li>															
									<li class="nav__li"><a href="cart.php" class="nav__link">Total: $<?php echo getCartTotal($handle); ?></a></li>									
								</ul>
							</nav>
							<!-- /.top__line-nav -->
						</div>
						<!-- /.col-lg-7 -->
						<div class="col-lg-3 d-lg-flex d-none">
							<ul class="top__line-account d-lg-flex d-none">									
								<!-- <li class="account__li"><a href="login.html" class="account__link">Login</a></li> -->
								<!-- <li class="account__li btn-border"><a href="signup.html" class="account__link">Sign up</a></li> -->
							</ul>
							<!-- /.top__line-account -->
						</div>
						<!-- /.col-lg-3 -->
					</div>
					<!-- /.row -->
				</div>
				<!-- /.container -->
			</div>
			<!-- /.top__line -->

			<section class="section s-contacts inside-contacts">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<h2 class="header_h2">Contact us</h2>
						</div>
						<!-- /.col-12 -->
					</div>
					<!-- /.row -->
					<div class="row">
						<div class="col-lg-4">
							<ul class="footer__contacts">
								<li class="footer__contacts-li"><a href="https://www.google.com/maps/place/Advanced+Printing/@43.8793409,-79.4420302,17z/data=!3m2!4b1!5s0x882b2a4effce8fa1:0xd07dc8d2ab1a1015!4m5!3m4!1s0x882b2a4e553b731d:0x61fc5ea4ce345078!8m2!3d43.8793371!4d-79.4398415"><i class="fa fa-map-marker fa-fw"></i> 10330 Yonge St Unit 1,
										Richmondhill, Toronto, ON L4C 5N1</a></li>
								<li class="footer__contacts-li"><a href="tel:+1%20(416)%20669-0619"><i class="fa fa-phone fa-fw"></i> +1 (416) 669-0619 </a></li>
								<li class="footer__contacts-li"><a href="mailto:info@rawbalance.ca"><i class="fa fa-envelope fa-fw"></i>info@rawbalance.ca</a></li>
							</ul>
							<!-- /.footer__contacts -->
							<ul class="footer__social">
								<li class="social__li"><a href="https://www.instagram.com/rawbalance.ca/" target="_blank"><i class="fa fa-instagram"></i></a></li>
								<li class="social__li"><a href="https://www.facebook.com/RawBalance-104685821470957/"><i class="fa fa-facebook-f"></i></a></li>
								<li class="social__li"><a href="#"><i class="fa fa-twitter"></i></a></li>
							</ul>
							<!-- /.footer__social -->
							<ul class="footer__working">
								<li class="working"><span class="working__day">Mon</span><span class="working__time">08:00 - 20:00</span>
								</li>
								<li class="working"><span class="working__day">Tue</span><span class="working__time">08:00 - 20:00</span>
								</li>
								<li class="working"><span class="working__day">Wed</span><span class="working__time">08:00 - 20:00</span>
								</li>
								<li class="working"><span class="working__day">Thu</span><span class="working__time">08:00 - 20:00</span>
								</li>
								<li class="working"><span class="working__day">Fri</span><span class="working__time">08:00 - 20:00</span>
								</li>
								<li class="working"><span class="working__day">Sat</span><span class="working__time">08:00 - 20:00</span>
								</li>
								<li class="working closed"><span class="working__day">Sun</span><span class="working__time">Closed</span>
								</li>
								<!-- /.working -->
							</ul>
							<!-- /.footer__working -->
						</div>
						<!-- /.col-lg-4 -->
						<div class="col-lg-7 offset-lg-1">
							<div class="footer__center">
								<div class="footer__map">
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2875.8655557194456!2d-79.44203018417473!3d43.87933707911413!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b2a4efddaaaab%3A0x6900694ed331512a!2s10330%20Yonge%20St%20unit%201%2C%20Richmond%20Hill%2C%20ON%20L4C%205N1!5e0!3m2!1sen!2sca!4v1652732355333!5m2!1sen!2sca" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
								</div>
								<!-- /.footer__map -->
								<div class="footer__txt">
									<p>
										When you are looking for the best raw dog food, give us a call, or visit our website, or check us out
										on
										<a href="http://web.archive.org/web/20220204223600/https://www.instagram.com/rawbalance.ca/" target="_blank">Instagram.</a>
									</p>
	
									<p>
										You can also visit the store and get to know us better! We specialize in fresh, locally grown, high
										quality meat.
									</p>
	
									<p>
										We only deliver fresh, human grade, high quality Dog food. The same meat we serve our families.
									</p>
								</div>
								<!-- /.footer__txt -->
							</div>
							<!-- /.footer__center -->
						</div>
						<!-- /.col-lg-4 -->
					</div>
					<!-- /.row -->
				</div>
				<!-- /.container -->
			</section>
			<!-- /.section s-contacts -->

		</main>
		<!-- /.main__content -->

		<footer class="main__footer">
			<div class="footer__line">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-2">
							<img src="./assets/images/dest/newlogo.png" alt="Raw Balance" style="width: 150px;">
							<!-- /.brand -->
						</div>
						<!-- /.col-lg-2 -->
						<div class="col-lg-7">
							<div class="footer__line-center">
								<div class="footer__line-link">
									<a href="#">Privacy Policy</a>
								</div>
								<!-- /.footer__line-link -->
								<div class="footer__line-copy">© RAW BALANCE, 2020. Copyright all rights reserved</div>
							</div>
							<!-- /.footer__line-center -->
						</div>
						<!-- /.col-lg-7 -->
						<div class="col-lg-3">
							<div class="footer__line-right">
								<div class="footer__line-phone">
									<a href="tel:+1%20(416)%20669-0619"><i class="fa fa-phone"></i>+1 (416) 669-0619</a>
								</div>
								<!-- /.footer__line-phone -->
							</div>
							<!-- /.footer__line-right -->
						</div>
						<!-- /.col-lg-3 -->
					</div>
					<!-- /.row -->
				</div>
				<!-- /.container -->
			</div>
			<!-- /.footer__line -->
		</footer>
		<!-- /.main__footer -->

	</div>
	<!-- /.wrapper -->


	<script src="./assets/app.min.js.download"></script>

	<!-- Developed by UxCodes -->




<!--
     FILE ARCHIVED ON 22:36:00 Feb 04, 2022 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 17:30:14 May 19, 2022.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.

     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
-->
<!--
playback timings (ms):
  captures_list: 412.983
  exclusion.robots: 0.395
  exclusion.robots.policy: 0.379
  RedisCDXSource: 185.883
  esindex: 0.014
  LoadShardBlock: 203.813 (3)
  PetaboxLoader3.datanode: 207.235 (4)
  CDXLines.iter: 20.092 (3)
  load_resource: 153.585
  PetaboxLoader3.resolve: 88.984-->
</body>
</html>