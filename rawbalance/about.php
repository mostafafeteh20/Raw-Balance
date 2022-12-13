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

	<title>RawBalance - About</title>
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

			<div class="inside__wrapper about">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<h2>About Us</h2>
							<p>
								Providing the very best in quality nutrition for our canine companions. Utilizing the proven PREY model
								for an overall improvement in health, energy, and appearance. Providing only the best ingredients, all
								sourced in Ontario, we offer a wide selection of raw meat, treats, and supplements to keep your dog in
								tip-top shape. We are a small company, doing everything ourselves. We source, cut, grind, package, and
								label everything in house. We can tell you everything about our products, so give us a call, or come in
								today. We started the company because we love our dogs, and wanted to provide the best possible care for
								our furriest members of the family.
							</p>

						</div>
						<!-- /.col-12 -->
					</div>
					<!-- /.row -->
				</div>
				<!-- /.container -->

				<div class="about__info">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<p>
									Our prices are and will always remain reasonable. We do not compete on price, because in order to be
									cheaper, companies will put preservatives, fillers, and other products into the meat. We only use
									local grown, grass fed cattle, pasture raised chicken, fresh farm raised turkey, and the highest
									quality local pork. All of our meat is of the highest quality, it is the same meat that our family
									eats at the dinner table. We invite all of our customers to our production facility, where they can
									see for themselves the process. All of our meat can be ordered whole, and wholesale. It is impossible
									to sell a pound of high quality meat for under $2 per pound. Our meat is worth every penny
								</p>
							</div>
							<!-- /.col-12 -->
						</div>
						<!-- /.row -->
					</div>
					<!-- /.container -->
				</div>
				<!-- /.about__info -->

			</div>
			<!-- /.inside__wrapper -->

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
playback timings (ms):
  captures_list: 78.562
  exclusion.robots: 0.345
  exclusion.robots.policy: 0.333
  RedisCDXSource: 6.994
  esindex: 0.009
  LoadShardBlock: 51.013 (3)
  PetaboxLoader3.datanode: 66.317 (4)
  CDXLines.iter: 17.728 (3)
  load_resource: 144.79
  PetaboxLoader3.resolve: 61.609-->
</body>
</html>