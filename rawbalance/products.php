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
	
	<title>RawBalance - Products</title>
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

			<div class="inside__wrapper products">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<h2>Products</h2>
						</div>
						<!-- /.col-12 -->
					</div>
					<!-- /.row -->
				</div>
				<!-- /.container -->

				<section class="section s-products">
					<div class="container">
						<div class="row">
							<div class="col-lg-12">
								<div class="products__top">
									<!-- /.products__top-h2 -->
									<p class="products__top-desc">By feeding your dog raw meat there will be many noticeable
										improvements in
										regards<br> to your pet's hygiene, weight, stamina, and energy level.</p>
									<!-- /.products__top-desc -->
									<ul class="products__top-filter">
										<li class="filter__list active" data-filter="all">All</li>
										
										<li class="filter__list" data-filter="Chicken">Chicken</li>
										
										<li class="filter__list" data-filter="Turkey">Turkey</li>
										
										<li class="filter__list" data-filter="Beef">Beef</li>
										
										<li class="filter__list" data-filter="Pork">Pork</li>
										
										<li class="filter__list" data-filter="Rabbit">Rabbit</li>
										
										<li class="filter__list" data-filter="Treats">Treats</li>
										
										<li class="filter__list" data-filter="Vegetables">Vegetables</li>
										
										<li class="filter__list" data-filter="Supplements">Supplements</li>
										
										<li class="filter__list" data-filter="Bones">Bones</li>
										
										<li class="filter__list" data-filter="Fish">Fish</li>
										

										<!-- <li class="filter__list" data-filter="beef">Beef</li>
										<li class="filter__list" data-filter="chicken">Chicken</li>
										<li class="filter__list" data-filter="bones">Bones</li>
										<li class="filter__list" data-filter="organs">Organs</li> -->
									</ul>
									<!-- /.products__top-filter -->
								</div>
								<!-- /.products__top -->
							</div>
							<!-- /.col-lg-12 -->
						</div>
						<!-- /.row -->
						<div class="products__wrapper">
						<div class="row">
							<?php
                                mysqli_select_db($handle, "rawbalance_store");
                                $sql = "select products.*, categories.category_name as cname from products join categories on products.product_category = categories.id order by id ASC";
                                $result = $handle->query($sql);

                                if ($result->num_rows > 0)                                  
                                {
                                	// output data of each row
										while($row = $result->fetch_assoc()) 
									{
                            ?>
                            <!--start product-->
                            <div class="col-lg-3">
                                <div class="products__items" data-cat="<?php echo $row['cname']; ?>">
                                    <div class="products__items-img">
                                        <img src="product_images/<?php echo $row['product_image']; ?>" alt="<?php echo $row['product_name']; ?>">
                                    </div>
                                    <!-- /.products__items-img -->
                                    <h4 class="products__items-title"><a href="product.php?id=<?php echo $row['id']; ?>">
                                    <?php echo $row['product_name']." ";
                                    
                                    if ($row['units'] != "") echo str_replace(".00","",$row['product_weight']).$row['units']; ?></a></h4>
                                    <!-- /.products__items-title -->
                                    <p class="products__items-desc"><?php echo substr($row['product_desc'],0,30); ?>...</p>
                                    <!-- /.products__items-desc -->
                                    <div class="products__items-bottom">
                                        <div class="price">C$ <?php echo $row['product_price']; ?></div>
                                        <!-- /.price -->
                                        <a href="product.php?id=<?php echo $row['id']; ?>" class="btn">Buy</a>
                                    </div>
                                    <!-- /.products__items-bottom -->
                                </div>
                                <!-- /.products__items -->
                            </div>
                            <!-- /.col-lg-3 -->
                            <?php
                                	}
                                }
                            ?>
							<!--end product-->

							<!-- /.col-lg-3 -->						

						</div>
						<!-- /.row -->

						</div>
						<!-- /.products__wrapper -->
					</div>
					<!-- /.container -->
				</section>
				<!-- /.section s-products -->

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
  captures_list: 368.209
  exclusion.robots: 0.285
  exclusion.robots.policy: 0.274
  cdx.remote: 0.101
  esindex: 0.013
  LoadShardBlock: 303.655 (3)
  PetaboxLoader3.datanode: 102.65 (4)
  CDXLines.iter: 20.069 (3)
  load_resource: 141.503
  PetaboxLoader3.resolve: 88.661-->
</body>
</html>