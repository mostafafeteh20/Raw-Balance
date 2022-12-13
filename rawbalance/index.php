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

	<title>RawBalance - Homepage</title>
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
			<header class="main__header">				
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-2 col-4">
                            <br>		
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
				
				<!-- /.top__line -->
				<div class="header__content">
					<div class="container">
						<div class="row">
							<div class="col-lg-6">
								<div class="header__content-left">
									<span class="header__content-title">Raw is Better</span>
									<h1 class="header__content-h1">Raw Balance</h1>
									<p class="header__content-desc">Balanced Diet</p>
									<!-- /.header__content-desc -->
									<div class="header__content-wrapper">
										<a href="#shop" id="shop-link" class="btn header__content-link"><i class="fa fa-shopping-bag fa-fw"></i>go to shop</a>
									</div>
									<!-- /.btn__wrapper -->
								</div>
								<!-- /.header__content-left -->
							</div>
							<!-- /.col-lg-6 -->
						</div>
						<!-- /.row -->
					</div>
					<!-- /.container -->
				</div>
				<!-- /.header__content -->
			</header>
			<!-- /.main__header -->

			<section class="section s-about">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-5 order-lg-1 order-2">
							<div class="about__left">
								<h2 class="about__left-h2">Raw is <strong>better</strong></h2>
								<p class="about__left-desc">
									We focus on providing the highest quality Raw Dog Food. All of the meat we use is local. We offer only
									the highest quality products. There is no substitute for quality, so we provide only the best. All of
									our products are available non-ground, so you rest assured that there is no additives or substitutes
									in what you feed your dog. Our dogs deserve our love, affection, and Raw Balance dog food.
								</p>
								<div class="about__left-wrapper">
									<a href="about.php" class="btn-border"><i class="fa fa-info-circle"></i>Read more</a>
								</div>
								<!-- /.about__btn-wrapper -->
							</div>
							<!-- /.about__left -->
						</div>
						<!-- /.col-lg-5 -->
						<!-- /.col-lg-7 -->
					</div>
					<!-- /.row -->
				</div>
				<!-- /.container -->

				<div class="feed__raw">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<h2>Why feed <strong>Raw?</strong></h2>
								<span>Click to learn the amazing benefits</span>

								<div class="dog__wrapper">
									<img src="./assets/images/dest/dog.png" alt="Dog">

									<div class="dog__items">
										<div class="dog__text" style="display: none;">
											<p>Brighter eyes</p>
										</div>
										<!-- /.dog__text -->
										<div class="dog__action">+</div>
										<!-- /.dog__action -->
									</div>
									<!-- /.dog__items -->

									<div class="dog__items">
										<div class="dog__text" style="display: none;">
											<p>Whiter teeth</p>
										</div>
										<!-- /.dog__text -->
										<div class="dog__action">+</div>
										<!-- /.dog__action -->
									</div>
									<!-- /.dog__items -->

									<div class="dog__items">
										<div class="dog__text" style="display: none;">
											<p>Increases bones &amp; tendon strength</p>
										</div>
										<!-- /.dog__text -->
										<div class="dog__action">+</div>
										<!-- /.dog__action -->
									</div>
									<!-- /.dog__items -->

									<div class="dog__items">
										<div class="dog__text" style="display: none;">
											<p>Builds strong immune system</p>
										</div>
										<!-- /.dog__text -->
										<div class="dog__action">+</div>
										<!-- /.dog__action -->
									</div>
									<!-- /.dog__items -->

									<div class="dog__items">
										<div class="dog__text" style="display: none;">
											<p>Reduces or eliminates allergies</p>
										</div>
										<!-- /.dog__text -->
										<div class="dog__action">+</div>
										<!-- /.dog__action -->
									</div>
									<!-- /.dog__items -->

									<div class="dog__items">
										<div class="dog__text" style="display: none;">
											<p>Aids in digestion</p>
										</div>
										<!-- /.dog__text -->
										<div class="dog__action">+</div>
										<!-- /.dog__action -->
									</div>
									<!-- /.dog__items -->

									<div class="dog__items">
										<div class="dog__text" style="display: none;">
											<p>Soft &amp; Shiny coat</p>
										</div>
										<!-- /.dog__text -->
										<div class="dog__action">+</div>
										<!-- /.dog__action -->
									</div>
									<!-- /.dog__items -->

									<div class="dog__items">
										<div class="dog__text" style="display: none;">
											<p>Less stool &amp; less smell</p>
										</div>
										<!-- /.dog__text -->
										<div class="dog__action">+</div>
										<!-- /.dog__action -->
									</div>
									<!-- /.dog__items -->

									<div class="dog__items">
										<div class="dog__text" style="display: none;">
											<p>Strengthen muscles</p>
										</div>
										<!-- /.dog__text -->
										<div class="dog__action">+</div>
										<!-- /.dog__action -->
									</div>
									<!-- /.dog__items -->



								</div>
								<!-- /.dog__wrapper -->

							</div>
							<!-- /.col-12 -->
						</div>
						<!-- /.row -->
					</div>
					<!-- /.container -->
				</div>
				<!-- /.feed__raw -->

				<div class="balanced">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<h2>Healthy. Balanced. Complete.</h2>
							</div>
							<!-- /.col-12 -->
						</div>
						<!-- /.row -->
						<div class="row align-items-center no-gutters">
							<div class="col-lg-6">
								<div class="balanced__left">
									<ul>
										<li>Premium Quality Ingredients</li>
										<li>Locally Sourced</li>
										<li>Hormone &amp; Antibiotic Free</li>
										<li>Specialized Blends</li>
										<li>Individual Portions</li>
										<li>Made in Canada</li>
									</ul>
								</div>
								<!-- /.balanced__left -->
							</div>
							<!-- /.col-lg-6 -->
							<div class="col-lg-6">
								<div class="balanced__right">
									<div class="balanced__img">
										<img src="./assets/images/dest/balanced-img.jpg" alt="Meat">
									</div>
								</div>
								<!-- /.balanced__right -->
							</div>
							<!-- /.col-lg-6 -->
						</div>
						<!-- /.row -->
					</div>
					<!-- /.container -->
				</div>
				<!-- /.balanced -->

				<div class="size">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<h2>Pick the perfect portion</h2>
								<span>Pick the perfect portion</span>
							</div>
							<!-- /.col-12 -->
						</div>
						<!-- /.row -->
						<div class="size__wrapper">
							<div class="row align-items-center">
								<div class="col-lg-4">
									<ul class="size__nav">
										<li class="active">
											<div class="icon__img">
												<img src="./assets/images/dest/0.png" alt="XL size dogs">
											</div>
											<!-- /.icon__img -->
											<strong>Giant dog</strong>
										</li>
										<li class="">
											<div class="icon__img">
												<img src="./assets/images/dest/1.png" alt="XL size dogs">
											</div>
											<!-- /.icon__img -->
											<strong>Large dog</strong>
										</li>
										<li>
											<div class="icon__img">
												<img src="./assets/images/dest/2.png" alt="XL size dogs">
											</div>
											<!-- /.icon__img -->
											<strong>Medium dog</strong>
										</li>

										<li>
											<div class="icon__img">
												<img src="./assets/images/dest/3.png" alt="XL size dogs">
											</div>
											<!-- /.icon__img -->
											<strong>Small dog</strong>
										</li>
										<li>
											<div class="icon__img">
												<img src="./assets/images/dest/4.png" alt="XL size dogs">
											</div>
											<!-- /.icon__img -->
											<strong>Toy dog</strong>
										</li>
									</ul>
									<!-- /.size__nav -->
								</div>
								<!-- /.col-lg-4 -->
								<div class="col-lg-8">
									<div class="size__items" style="">
										<div class="size__img">
											<img src="./assets/images/dest/big-1.png" alt="XL">
										</div>
										<!-- /.size__img -->
										<p>&gt;99 lb / &gt;44.9 kg ( 2.97lb+)
											2-3% of the body weight </p>
									</div>
									<!-- /.size__items -->
									<div class="size__items">
										<div class="size__img">
											<img src="./assets/images/dest/big-2.png" alt="XL">
										</div>
										<!-- /.size__img -->
										<p>57 - 99 lb / 25.9 - 44.9 kg ( 1.75lb- 2.97lb)
											2-3% of the body weight</p>
									</div>
									<!-- /.size__items -->
									<div class="size__items" style="display: none;">
										<div class="size__img">
											<img src="./assets/images/dest/big-3.png" alt="XL">
										</div>
										<!-- /.size__img -->
										<p>22 - 57 lb / 10 - 25.9 kg ( 0.64-1.71 lb)
											2-3% of the body weight</p>
									</div>
									<!-- /.size__items -->
									<div class="size__items" style="display: none;">
										<div class="size__img">
											<img src="./assets/images/dest/big-4.png" alt="XL">
										</div>
										<!-- /.size__img -->
										<p>12 - 22 lb / 5.4 - 10 kg (portion 0.44-0.64 lb)
											2-3% of the body weight
										</p>
									</div>
									<!-- /.size__items -->
									<div class="size__items" style="display: none;">
										<div class="size__img">
											<img src="./assets/images/dest/big-5.png" alt="XL">
										</div>
										<!-- /.size__img -->
										<p>
											&lt; 12 lb / &lt; 5.4 kg (Portion, 0.25-0.40lb) 2-3% of the body weight </p>
									</div>
									<!-- /.size__items -->
								</div>
								<!-- /.col-lg-8 -->
							</div>
							<!-- /.row -->
						</div>
						<!-- /.size__wrapper -->
					</div>
					<!-- /.container -->
				</div>
				<!-- /.size -->

			</section>
			<!-- /.section s-about -->

			<section class="section s-products" id="shop">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="products__top">
								<h2 class="products__top-h2"><strong>SHOP</strong> WITH US</h2>
								<!-- /.products__top-h2 -->
								<p class="products__top-desc">By feeding your dog raw meat there will be many noticeable improvements in
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
                                // include('common.php');
                                // $handle = connectdb();
                                // mysqli_select_db($handle, "rawbalance_store");
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

						<div class="row">
							<div class="col-lg-12">
								<div class="products__bottom">
									<a href="products.php" class="btn-border">Show More</a>
								</div>
								<!-- /.products__bottom -->
							</div>
							<!-- /.col-lg-12 -->
						</div>
						<!-- /.row -->
					</div>
					<!-- /.products__wrapper -->
				</div>
				<!-- /.container -->
			</section>
			<!-- /.section s-products -->

			<section class="section s-video">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<h2>Video</h2>
							<div class="video__wrapper">
								<iframe src="https://www.youtube.com/embed/zP_al8bxkjM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
							</div>
							<!-- /.video__wrapper -->
						</div>
						<!-- /.col-lg-12 -->
					</div>
					<!-- /.row -->
				</div>
				<!-- /.container -->
			</section>
			<!-- /.section s-video -->

			<section class="section s-reviews">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<h2><strong>Reviews</strong> of our clients</h2>
						</div>
						<!-- /.col-12 -->
					</div>
					<!-- /.row -->
				</div>
				<!-- /.container -->

				<div class="reviews__wrapper owl-carousel owl-loaded owl-drag">					
					

				<div class="owl-stage-outer"><div class="owl-stage" style="transition: all 0s ease 0s; width: 5739px; transform: translate3d(-1115px, 0px, 0px);"><div class="owl-item cloned" style="width: 308.833px; margin-right: 10px;"><a href="#" class="reviews__items" style="background-image: url(assets/images/dest/reviews/1.jpeg);">
					</a></div><div class="owl-item cloned" style="width: 308.833px; margin-right: 10px;"><a href="#" class="reviews__items" style="background-image: url(assets/images/dest/reviews/2.jpeg);">
					</a></div><div class="owl-item cloned" style="width: 308.833px; margin-right: 10px;"><a href="#" class="reviews__items" style="background-image: url(assets/images/dest/reviews/3.jpeg);">
					</a></div><div class="owl-item cloned" style="width: 308.833px; margin-right: 10px;"><a href="#" class="reviews__items" style="background-image: url(assets/images/dest/reviews/4.jpeg);">
					</a></div><div class="owl-item cloned active" style="width: 308.833px; margin-right: 10px;"><a href="#" class="reviews__items" style="background-image: url(assets/images/dest/reviews/5.jpeg);">
					</a></div><div class="owl-item cloned active" style="width: 308.833px; margin-right: 10px;"><a href="#" class="reviews__items" style="background-image: url(assets/images/dest/reviews/6.jpeg);">
					</a></div><div class="owl-item active center" style="width: 308.833px; margin-right: 10px;"><a href="#" class="reviews__items" style="background-image: url(assets/images/dest/reviews/1.jpeg);">
					</a></div><div class="owl-item active" style="width: 308.833px; margin-right: 10px;"><a href="#" class="reviews__items" style="background-image: url(assets/images/dest/reviews/2.jpeg);">
					</a></div><div class="owl-item active" style="width: 308.833px; margin-right: 10px;"><a href="#" class="reviews__items" style="background-image: url(assets/images/dest/reviews/3.jpeg);">
					</a></div><div class="owl-item active" style="width: 308.833px; margin-right: 10px;"><a href="#" class="reviews__items" style="background-image: url(assets/images/dest/reviews/4.jpeg);">
					</a></div><div class="owl-item" style="width: 308.833px; margin-right: 10px;"><a href="#" class="reviews__items" style="background-image: url(assets/images/dest/reviews/5.jpeg);">
					</a></div><div class="owl-item" style="width: 308.833px; margin-right: 10px;"><a href="#" class="reviews__items" style="background-image: url(assets/images/dest/reviews/6.jpeg);">
					</a></div><div class="owl-item cloned" style="width: 308.833px; margin-right: 10px;"><a href="#" class="reviews__items" style="background-image: url(assets/images/dest/reviews/1.jpeg);">
					</a></div><div class="owl-item cloned" style="width: 308.833px; margin-right: 10px;"><a href="#" class="reviews__items" style="background-image: url(assets/images/dest/reviews/2.jpeg);">
					</a></div><div class="owl-item cloned" style="width: 308.833px; margin-right: 10px;"><a href="#" class="reviews__items" style="background-image: url(assets/images/dest/reviews/3.jpeg);">
					</a></div><div class="owl-item cloned" style="width: 308.833px; margin-right: 10px;"><a href="#" class="reviews__items" style="background-image: url(assets/images/dest/reviews/4.jpeg);">
					</a></div><div class="owl-item cloned" style="width: 308.833px; margin-right: 10px;"><a href="#" class="reviews__items" style="background-image: url(assets/images/dest/reviews/5.jpeg);">
					</a></div><div class="owl-item cloned" style="width: 308.833px; margin-right: 10px;"><a href="#" class="reviews__items" style="background-image: url(assets/images/dest/reviews/6.jpeg);">
					</a></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots disabled"><button role="button" class="owl-dot active"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button></div></div>
				<!-- /.reviews__wrapper -->

			</section>
			<!-- /.section s-reviews -->

		</main>
		<!-- /.main__content -->

		<section class="section s-contacts">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h2 class="footer_h2">Contact us</h2>
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
					<div class="col-lg-4">
						<div class="footer__center">
							<div class="footer__txt">
								<p>
									When you are looking for the best raw dog food, give us a call, or visit our website, or check us out
									on
									<a href="https://www.instagram.com/rawbalance.ca/" target="_blank">Instagram.</a>
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

							<div class="footer__map">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2875.8655557194456!2d-79.44203018417473!3d43.87933707911413!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b2a4efddaaaab%3A0x6900694ed331512a!2s10330%20Yonge%20St%20unit%201%2C%20Richmond%20Hill%2C%20ON%20L4C%205N1!5e0!3m2!1sen!2sca!4v1652732355333!5m2!1sen!2sca" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
							</div>
							<!-- /.footer__map -->
						</div>
						<!-- /.footer__center -->
					</div>
					<!-- /.col-lg-4 -->
					<div class="col-lg-4">
						<div class="footer__form">
							<h3>For questions about any of our products, or help with placing your order, don't hesitate to
								<strong>contact us:</strong>
							</h3>
							<form action="https://rawbalance.ca/send_mail/" method="POST">
								<input type="hidden" name="csrfmiddlewaretoken" value="iLrM8I5nMqtlOvgS4TjwQDtyK9TtbvgdGhJaOY5SKstiLrv8JgOPfpdbzk56ugTm">
								<label>
									<input type="text" name="name" placeholder="Name" required="">
								</label>
								<label>
									<input type="tel" name="phone" id="phone" required="" placeholder="+1 (___) ___-__-__" maxlength="18">
								</label>
								<label>
									<input type="email" name="email" placeholder="E-mail" required="">
								</label>
								<label>
									<button type="submit" class="btn">Submit</button>
								</label>
							</form>
						</div>
						<!-- /.footer__form -->
					</div>
					<!-- /.col-lg-4 -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->
		</section>
		<!-- /.section s-contacts -->

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
     FILE ARCHIVED ON 10:43:12 Feb 05, 2022 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 17:11:23 May 16, 2022.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.

     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
-->
<!--
playback timings (ms):
  captures_list: 149.218
  exclusion.robots: 0.185
  exclusion.robots.policy: 0.178
  cdx.remote: 0.059
  esindex: 0.008
  LoadShardBlock: 102.681 (3)
  PetaboxLoader3.datanode: 119.477 (4)
  CDXLines.iter: 22.751 (3)
  load_resource: 153.893
  PetaboxLoader3.resolve: 95.538-->
</body>
</html>