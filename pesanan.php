<?php
	include("includes/db.php");
	include("includes/functions.php");
	error_reporting(E_ALL ^ E_NOTICE);

//Cek apakah sudah login, jika belum alihkan ke halaman login
if(!isset($_SESSION['user'])){
	header('Location: ./login.php');
}

	if($_REQUEST['command']=='delete' && $_REQUEST['pid']>0){
		remove_product($_REQUEST['pid']);
	}
	else if($_REQUEST['command']=='clear'){
		unset($_SESSION['cart']);
	}
	else if($_REQUEST['command']=='update'){
		$max=count($_SESSION['cart']);
		for($i=0;$i<$max;$i++){
			$pid=$_SESSION['cart'][$i]['productid'];
			$q=intval($_REQUEST['product'.$pid]);
			if($q>0 && $q<=999){
				$_SESSION['cart'][$i]['qty']=$q;
			}
			else{
				$msg='Ada Produk yang tidak terupdate!, quantity tidak boleh kurang dari 1 dan lebih dari 999';
			}
		}
	}


?>
<!DOCTYPE html>
<html>
<head>
<title>Super Market an Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Single Page :: w3layouts</title>
<style>
<?php
if(is_array($_SESSION['cart'])){ ?>
.table > tbody > tr > td {
    font-size: 1em !important;
    color: #000 !important;
}
<?php }else{ ?>
.kosong{
	font-size: 2em !important;
	color: #000 !important;
}
<?php } ?>
</style>
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
	function addtocart(pid){
		document.form1.productid.value=pid;
		document.form1.command.value='add';
		document.form1.submit();
	}
</script>
<script language="javascript">
	function del(pid){
		if(confirm('Anda yakin inging menghapus pesanan ini?')){
			document.form1.pid.value=pid;
			document.form1.command.value='delete';
			document.form1.submit();
		}
	}
	function clear_cart(){
		if(confirm('Ini akan mengkosongkan pesanan anda, lanjutkan?')){
			document.form1.command.value='clear';
			document.form1.submit();
		}
	}
	function update_cart(){
		document.form1.command.value='update';
		document.form1.submit();
	}
</script>
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
				<h1><a href="index.php"><img width =350 height=80 src='image/logo.png'/></a></h1>
			</div>
		<div class="w3l_search">
			<form action="#" method="post">
				<input type="search" name="Search" placeholder="Search for a Product..." required="">
				<button type="submit" class="btn btn-default search" aria-label="Left Align">
					<i class="fa fa-search" aria-hidden="true"> </i>
				</button>
				<div class="clearfix"></div>
			</form>
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
									
									<li><a href="offers.html">About Us</a></li>
									
									<li><a href="contact.html">Contact</a></li>
								</ul>
							</div>
							</nav>
			</div>
		</div>

<div class="newproducts-w3agile">
<div class="container">
<h3>Daftar Pesanan Anda</h3>

<form name="form1" method="post">
<input type="hidden" name="pid" />
<input type="hidden" name="command" />
<table border="0" cellpadding="5px" cellspacing="1px" style="font-family:Verdana, Geneva, sans-serif; font-size:11px;" width="100%" class="table table-hover table-condensed">
<?php
if(is_array($_SESSION['cart'])){
echo '<tr bgcolor="#FFFFFF" style="font-weight:bold"><td>No</td><td>Nama</td><td>Harga</td><td>Jumlah</td><td>Total</td><td>Jenis</td><td>Pilihan</td></tr>';
$max=count($_SESSION['cart']);
for($i=0;$i<$max;$i++){
$pid=$_SESSION['cart'][$i]['productid'];
$q=$_SESSION['cart'][$i]['qty'];
$pname=get_product_name($pid);

if($q==0) continue;
?>
<tr bgcolor="#FFFFFF">
<td><?php echo $i+1?></td>
<td><?php echo $pname?></td>
<td>RP. <?php echo get_price($pid)?></td>
<td><input type="text" name="product<?php echo $pid?>" value="<?php echo $q?>" maxlength="3" size="2" /></td>
<td>Rp. <?php echo get_price($pid)*$q?></td>
<td><?php if(get_tipe($pid)=="standar"){echo 'Standar';}else{echo 'Large';} ?></td>
<td><a href="javascript:del(<?php echo $pid?>)" class="btn btn-xs btn-warning">Hapus</a></td></tr>
<?php
}
?>
<tr>
<td><b>Total Belanja: Rp. <?php echo get_order_total()?></b></td>
<td></td><td></td>
<td colspan="5" align="right"><input type="button" value="Tambah Pesanan" onclick="window.location='menu.php'" class="btn btn-success">&nbsp;<input type="button" value="Kosongkan Pesanan" onclick="clear_cart()" class="btn btn-success">&nbsp;<input type="button" value="Perbarui Pesanan" onclick="update_cart()" class="btn btn-success">&nbsp;<input type="button" value="Konfirmasi Pesanan" onclick="window.location='biling.php'" class="btn btn-success"></td></tr>
<br>
<div class="bil-info">*Pilih Perbarui Pesanan setelah mengisi Jumlah produk</div>
<?php
}
else{
echo "<tr bgColor='#FFFFFF'><td class='kosong'>Daftar pesanan Anda kosong!</td>";
}
?>

</table>
</form>
<br>

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
		