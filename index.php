	<?php require_once './includes/db.php'; ?>
<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Super Market an Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Super Market Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
</head>
	
<body>
<!-- header -->
	<div class="agileits_header">
		<div class="container">
			<div class="w3l_offers">
				<p>Sushi Versi Anak Betawi. <a href="products.html">SHOP NOW</a></p>
			</div>
			<div class="agile-login">
				
				<ul>
					<?php if(isset($_SESSION['user'])){ ?>
					<li><a href="user.php">Member Area</a></li>
					<li><a href="logout.php">Logout</a></li>
					<?php }else{ ?>
					<li><a href="registered.php"> Create Account </a></li>
					<li><a href="login.php">Login</a></li>
					<?php } ?>

					
				</ul>
			</div>
			<div class="product_list_header">  
					<form action="#" method="post" class="last"> 
						<input type="hidden" name="cmd" value="_cart">
						<input type="hidden" name="display" value="1">
						<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
					</form>  
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>

	<div class="logo_products">
		<div class="container">
		<div class="w3ls_logo_products_left1">
				<ul class="phone_email">
					<li><i class="fa fa-phone" aria-hidden="true"></i>Order online or call us : +62895600525854 </li>
					
				</ul>
			</div>
			<div class="w3ls_logo_products_left">
				<h1><a href="about.php"><img width =350 height=80 src='image/logo.png'/></a></h1>
			</div>
		
			
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //header -->
<!-- navigation -->
	<div class="navigation-agileits">
		<div class="container">
			<nav class="navbar navbar-default">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header nav_2">
								<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div> 
							<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
								<ul class="nav navbar-nav">
									<li class="active"><a href="index.php" class="act">Home</a></li>	
									<!-- Mega Menu -->
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu<b class="caret"></b></a>
										<ul class="dropdown-menu multi-column columns-3">
											<div class="row">
												<div class="multi-gd-img">
													<ul class="multi-column-dropdown">
														<h6>Food</h6>
														<li><a href="menu.php">All Sushi</a></li>
														<li><a href="menu.php?kd=1">Standar Sushi</a></li>
														<li><a href="menu.php?kd=2">Large Sushi</a></li>
														
						
													</ul>
												</div>	
												
											</div>
										</ul>
									</li>
									<li><a href="pesanan.php">Pesanan</a></li>
									<li><a href="about.php">About Us</a></li>
									
									<li><a href="contact.php">Contact</a></li>
								</ul>
							</div>
							</nav>
			</div>
		</div>
		
<!-- //navigation -->
	<!-- main-slider -->
		<ul id="demo1">
			<li>
				<img src="image/slider1.jpg" alt="" />
				<!--Slider Description example-->
				<div class="slide-desc">
					<h3>SUSHIHAN </h3>
				</div>
			</li>
			<li>
				<img src="image/slider2.jpg" alt="" />
				  <div class="slide-desc">
					<h3>Sushi Dengan Harga Murah dan Enak</h3>
				</div>
			</li>
			
			<li>
				<img src="image/slider3.jpg" alt="" />
				<div class="slide-desc">
					<h3>Sushi 100% Halal Tanpa Daging Mentah</h3>
				</div>
			</li>
		</ul>
	<!-- //main-slider -->
	<!-- //top-header and slider -->
	<!-- top-brands -->

<!--//brands-->
<!-- new -->
	<div class="newproducts-w3agile">
		<div class="container">
			<h3>All Sushi</h3>
				<div class="agile_top_brands_grids">
				<?php
$result=mysql_query("SELECT * FROM barang") or die("SELECT * FROM barang".mysql_error());
while($data=mysql_fetch_array($result)){
?>
					<div class="col-md-3 top_brand_left-1">
						<div class="hover14 column">
							<div class="agile_top_brand_left_grid">
								<div class="agile_top_brand_left_grid_pos">
									<img src="image/offer.png" alt=" " class="img-responsive">
								</div>
								
								<div class="agile_top_brand_left_grid1">
									<figure>
										<div class="snipcart-item block">
											<div class="snipcart-thumb">
												<a ><img title=" " alt=" " src="<?php echo $data['image']; ?>"></a>		
												<p><?php echo $data['nabar']; ?></p>
												<p>Stok: <?php echo $data['stok']; ?></p>
												
											</div>
											<div class="snipcart-details top_brand_home_details">
												<form action="detail.php?id=<?php echo $data['nobar'];?>" method="post">
													<fieldset>
													
														<input type="submit" name="submit" value="detail" class="button">
													</fieldset>
												</form>
											</div>
										</div>
										
									</figure>
									
								</div>
							
							</div>
						</div>
						<br>
					</div>



						<?php } ?>
						<div class="clearfix"> </div>
				</div>
		</div>
	</div>
<!-- //new -->

<!--//ukuran-->	
	<div class="newproducts-w3agile">
			<div class="container">
			<h3>Sushi Standar</h3>
				<div class="agile_top_brands_grids">
				<?php
$result=mysql_query("SELECT * FROM barang WHERE jenis='standar'") or die("SELECT * FROM barang WHERE jenis='standar'".mysql_error());
while($data=mysql_fetch_array($result)){
?>
					<div class="col-md-3 top_brand_left-1">
						<div class="hover14 column">
							<div class="agile_top_brand_left_grid">
								<div class="agile_top_brand_left_grid_pos">
									<img src="image/offer.png" alt=" " class="img-responsive">
								</div>
								<div class="agile_top_brand_left_grid1">
									<figure>
										<div class="snipcart-item block">
											<div class="snipcart-thumb">
												<a><img title=" " alt=" " src="<?php echo $data['image']; ?>"></a>		
												<p><?php echo $data['nabar']; ?></p>
											<p>Stok: <?php echo $data['stok']; ?></p>
												
											</div>
											<div class="snipcart-details top_brand_home_details">
												<form action="detail.php?id=<?php echo $data['nobar'];?>" method="post">
													<fieldset>
													
														<input type="submit" name="submit" value="detail" class="button">
													</fieldset>
												</form>
											</div>
										</div>
										
									</figure>
								</div>
							</div>
						</div>
					</div>



						<?php } ?>
						<div class="clearfix"> </div>
				</div>
		</div>
	</div>

	<!---ukuran-->	
	<div class="newproducts-w3agile">
			<div class="container">
			<h3>Sushi Large</h3>
				<div class="agile_top_brands_grids">
				<?php
$result=mysql_query("SELECT * FROM barang WHERE jenis='large'") or die("SELECT * FROM barang WHERE jenis='large'".mysql_error());
while($data=mysql_fetch_array($result)){
?>
					<div class="col-md-3 top_brand_left-1">
						<div class="hover14 column">
							<div class="agile_top_brand_left_grid">
								<div class="agile_top_brand_left_grid_pos">
									<img src="image/offer.png" alt=" " class="img-responsive">
								</div>
								<div class="agile_top_brand_left_grid1">
									<figure>
										<div class="snipcart-item block">
											<div class="snipcart-thumb">
												<a><img title=" " alt=" " src="<?php echo $data['image']; ?>"></a>		
												<p><?php echo $data['nabar']; ?></p>
												<p>Stok: <?php echo $data['stok']; ?></p>
												
											</div>
											<div class="snipcart-details top_brand_home_details">
													<fieldset>
												<form action="detail.php?id=<?php echo $data['nobar'];?>" method="post">
													
														<input type="submit" name="submit" value="detail" class="button">
													</fieldset>
												</form>
											</div>
										</div>
										
									</figure>
								</div>
							</div>
						</div>
					</div>



						<?php } ?>
						<div class="clearfix"> </div>
				</div>
		</div>
	</div>
	
<!-- //footer -->
<div class="footer">
		<div class="container">
			<div class="w3_footer_grids">
				<div class="col-md-3 w3_footer_grid">
					<h3>Contact</h3>
					
					<ul class="address">
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Harapan Indah <span>Bekasi.</span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>farhanrivkha146@gmail.com</li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+62895 600 525 854</li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Information</h3>
					<ul class="info"> 
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="about.php">About Us</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="contact.php">Contact Us</a></li>

					</ul>
				</div>
				
				<div class="clearfix"> </div>
			</div>
		</div>
		
		<div class="footer-copy">
			
			<div class="container">
				<p>© 2017 Sushihan</p>
			</div>
		</div>
		
	</div>	
	<div class="footer-botm">
			<div class="container">
				<div class="w3layouts-foot">
					<ul>
						<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						<li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
					</ul>
				</div>

				<div class="clearfix"> </div>
			</div>
		</div>
<!-- //footer -->	
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- top-header and slider -->
<!-- here stars scrolling icon -->
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
<!-- //here ends scrolling icon -->
<script src="js/minicart.min.js"></script>
<script>
	// Mini Cart
	paypal.minicart.render({
		action: '#'
	});
	
	if (~window.location.search.indexOf('reset=true')) {
		paypal.minicart.reset();
	}
</script>
<!-- main slider-banner -->
<script src="js/skdslider.min.js"></script>
<link href="css/skdslider.css" rel="stylesheet">
<script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery('#demo1').skdslider({'delay':5000, 'animationSpeed': 2000,'showNextPrev':true,'showPlayButton':true,'autoSlide':true,'animationType':'fading'});
						
			jQuery('#responsive').change(function(){
			  $('#responsive_wrapper').width(jQuery(this).val());
			});
			
		});
</script>	
<!-- //main slider-banner --> 
</body>
</html>