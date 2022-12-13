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
	

<!--http://localhost/rawbalance_test/product.php?id=1&product_name=Pet%20CBD%20450Mg&product_desc=This is the description&product_price=C$80,00&product_image=Pet_CBD_450mgx.jpg-->

<?php
	include('common.php');	
	$handle = connectdb();
	mysqli_select_db($handle, "rawbalance_store");
?>
	
	<title>Rawbalance - Ordering Process</title>
	<meta name="description" content="New Site by UXCode">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="icon" href="./assets/images/dest/favicon.ico">
	<!-- <meta property="og:image" content="https://rawbalance.ca/images/dest/preview.jpg"> -->

	<!-- Custom Browsers Color Start -->
	<meta name="theme-color" content="#000">
	<!-- Custom Browsers Color End -->

	<link rel="stylesheet" href="./assets/app.min.css">
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
								
									<!-- <li class="account__li"><a href="https://web.archive.org/web/20220204223552/https://rawbalance.ca/login/" class="account__link">Login</a></li> -->
									<!-- <li class="account__li btn-border"><a href="https://web.archive.org/web/20220204223552/https://rawbalance.ca/registration/" class="account__link">Sign in</a></li> -->
								
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

			<div class="login__wrapper">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<form method="post" class="form__in">
								<input type="hidden" name="csrfmiddlewaretoken" value="9C5YWEP6cb0kPALTlME89IkL8bPRtnQeJFZ99J32oglaDV9KMs93Z5sa3rHdWZYZ">
								<p><label for="id_email">Email:</label> <input type="email" name="email" required="" id="id_email">
								
								</p>
								<p><label for="id_fio">Full name:</label> <input type="text" name="fio" maxlength="255" required="" id="id_fio">
										
										</p>
								<p><label for="id_adress">Address:</label> <input type="text" name="adress" required="" id="id_adress">
									
								</p>
								<p><label for="id_phone">Phone:</label> <input type="tel" name="phone" required="" id="id_phone"></p>
								
								<p><button type="submit" class="btn">Buy Now</button></p>
							</form>
						</div>
						<!-- /.col-lg-12 -->
					</div>
					<!-- /.row -->
				</div>
				<!-- /.container -->
			</div>
			<!-- /.login__wrapper -->

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


	<script src="./ordering_process_files/app.min.js.download"></script>

	<!-- Developed by UxCodes -->




<!--
     FILE ARCHIVED ON 22:35:52 Feb 04, 2022 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 21:39:07 May 27, 2022.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.

     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
-->
<!--
playback timings (ms):
  captures_list: 67.892
  exclusion.robots: 0.328
  exclusion.robots.policy: 0.312
  RedisCDXSource: 4.881
  esindex: 0.013
  LoadShardBlock: 39.47 (3)
  PetaboxLoader3.datanode: 63.195 (4)
  CDXLines.iter: 19.874 (3)
  load_resource: 75.039
  PetaboxLoader3.resolve: 33.814
--></body></html>