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
	$id = (int) $_GET['id'];

	if (isset($_GET['action']) && $_GET['action'] == 'addToCart')
	{
		$q = (int) $_GET['quantity'];
		$res = addToCart($id, $q, $handle);
		$addresult = $res;
	}	
	
	// $product_name = mysqli_real_escape_string($handle, $_GET['product_name']);
	// $product_desc = mysqli_real_escape_string($handle, $_GET['product_desc']);
	// $product_price = mysqli_real_escape_string($handle, $_GET['product_price']);
	// $product_image = mysqli_real_escape_string($handle, $_GET['product_image']);	
	// $product_weight = mysqli_real_escape_string($handle, $_GET['product_weight']);
	// $product_category = mysqli_real_escape_string($handle, $_GET['product_category']);
	// $product_units = mysqli_real_escape_string($handle, $_GET['units']);
?>
	
	<title>Rawbalance - Product</title>
	<meta name="description" content="New Site by UXCode">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="icon" href="./assets/images/dest/favicon.ico">
	<!-- <meta property="og:image" content="https://rawbalance.ca/images/dest/preview.jpg"> -->

	<!-- Custom Browsers Color Start -->
	<meta name="theme-color" content="#000">
	<!-- Custom Browsers Color End -->

	<link rel="stylesheet" href="./assets/app.min.css">
</head>
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
			<?php				
				$sql = "select products.*, categories.category_name as cname from products join categories on products.product_category = categories.id where products.id = ".$id." order by products.id ASC";							
				$result = $handle->query($sql);

				if ($result->num_rows > 0)                                  
				{
					// output data of each row
						while($row = $result->fetch_assoc()) 
					{
			?>
			<div class="inside__product">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6">
							
							<?php if (isset($addresult)) {
								echo $addresult;
							} 

							?>

							<div class="product__img">
								<img src="./product_images/<?php echo $row['product_image']; ?>" alt="<?php echo $row['product_name']; ?>">
							</div>
							<!-- /.product__img -->
						</div>
						<!-- /.col-lg-6 -->
						<div class="col-lg-6">
							<div class="product__title"><?php echo $row['product_name']; ?></div>
							<!-- /.product__title -->
							<div class="product__desc">
							<?php echo $row['product_desc']; ?>
							</div>
							<!-- /.product__desc -->
							<div class="product__price">
								<span>Price</span>
								C$ <?php echo $row['product_price']; ?>
							</div>
							<!-- /.product__price -->
							<!-- <div class="product__btn"> -->
							<!-- Add Cart Button -->

							<form method ='get' action ='product.php'>
								<input type = 'number' min="1" name = 'quantity' id = 'q' value = '1' style="width: 60px;" />
								<input type = 'hidden' name = 'id' value = '<?php echo $row['id']; ?>' />
								<input type = 'hidden' name = 'action' value = 'addToCart' />	
								<div class="product__btn">								
									<br>
									<input type = 'submit' class="btn" value = 'Add to Cart' />
								</div>
							</form>	
							
							<!-- /.product__btn -->
						</div>
						<!-- /.col-lg-6 -->
					</div>
					<!-- /.row -->
				</div>
				<!-- /.container -->
			</div>
			<!-- /.inside__product -->
			<?php
					}
				}
			?>

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
  captures_list: 255.105
  exclusion.robots: 0.238
  exclusion.robots.policy: 0.23
  RedisCDXSource: 14.082
  esindex: 0.008
  LoadShardBlock: 218.701 (3)
  PetaboxLoader3.datanode: 230.007 (4)
  CDXLines.iter: 19.905 (3)
  load_resource: 92.032
  PetaboxLoader3.resolve: 47.015-->
</body>
</html>