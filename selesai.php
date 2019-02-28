<?php
	include("includes/db.php");
	include("includes/functions.php");
	error_reporting(E_ALL ^ E_NOTICE);
	//Cek apakah sudah login, jika belum alihkan ke halaman login
	if(!isset($_SESSION['user'])){
		header('Location: ./index.php');
	}
?>
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
<style>
.table > tbody > tr > td {
    font-size: 1em !important;
    color: #000 !important;
}
.bil-title{
	border-bottom: 5px double #89c236 !important;
	margin-bottom: -4px !important;
	display: inline-block !important;
	padding: 0px 10px !important;
	margin-left: 15px !important;
	margin-right: 15px !important;
	font-family: "Boogaloo" !important;
	font-weight: normal !important;
	color: #666;
	font-size: 24px;
	line-height: 40px;
	text-rendering: optimizelegibility;
}
.bil-info{
	background: #fff url(./images/bg-k10.png);
	border-left: 4px solid #89c236;
	padding: 13px 13px 13px 15px;
	font-style: italic;
	margin: 20px auto;
	-webkit-border-radius: 0px;
	-moz-border-radius: 0px;
	border-radius: 0px;
	font-size: 14px !important;
}
</style>
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
  <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: false,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
  <script language="javascript">
	function addtocart(pid){
		document.form1.productid.value=pid;
		document.form1.command.value='add';
		document.form1.submit();
	}
</script>
<script language="javascript">
	function del(pid){
		if(confirm('Anda yakin ingin menghapus pesanan ini?')){
			document.form1.pid.value=pid;
			document.form1.command.value='delete';
			document.form1.submit();
		}
	}
	function clear_cart(){
		if(confirm('Apakah anda ingin mengosongkan pesanan?')){
			document.form1.command.value='clear';
			document.form1.submit();
		}
	}
	function update_cart(){
		document.form1.command.value='update';
		document.form1.submit();
	}
</script>
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
									
									<li><a href="offers.html">About Us</a></li>
									
									<li><a href="contact.html">Contact</a></li>
								</ul>
							</div>
							</nav>
			</div>
		</div>
		

<div class="recp-sec">
	<div class="container">
	<div class="recp-sec">
<div class="container" style="width:940px !important;">
<div class="table-responsive">
<div class="bil-title"><h3>Checkout Selesai</h3></div>
<div class="bil-info">Selamat Anda telah berhasil checkout, silahkan catat info di bawah ini..</div>
<div class="bil-info" style="font-size: 18px;font-weight: 200;line-height: 30px;color: inherit;margin: 0 0 10px;">
<?php
if($_POST['finish']){
$nama_penerima=$_POST['namapenerima'];
$username=$_POST['username'];
$alamat_penerima=$_POST['alamatpenerima'];
$tujuan=$_POST['tujuan'];
$kurir=$_POST['kurir'];
$berat=$_POST['berat'];
$ongkos=$_POST['ongkos'];
$batot=$_POST['batot'];
$hargatotal=$_POST['hargatotal'];
$kode_pos=$_POST['kode_pos'];
$telepon=$_POST['telepon'];
$uid=$_POST['uid'];
$id_order=$_POST['id_order'];

	$now = date('Y-m-d');
 	$today = new DateTime($now);
 	$regtimeTmp = $today->format('Y-m-d');
 	$expired_new = clone $today;
	
	$date = $regtimeTmp;


$result=mysql_query("INSERT INTO `orders` values('$id_order','$username','$nama_penerima','$alamat_penerima','$kode_pos','$tujuan','$kurir','$berat','$hargatotal','$ongkos','$batot','$telepon','$uid','Baru','$date')");
$customerid=mysql_insert_id();

$max=count($_SESSION['cart']);
for($i=0;$i<$max;$i++){
$pid=$_SESSION['cart'][$i]['productid'];
$q=$_SESSION['cart'][$i]['qty'];
$price=get_price($pid);
$coba[$i]= mysql_query("INSERT INTO `order_detail` values('$id_order','$pid','$q','$price')");
}

//Ganti session_destroy jadi unset agar admin tidak logout, line 175
//session_destroy();
echo '<p>Total biaya untuk pembelian Produk adalah RP. '.get_order_total().' dan biaya bisa di kirimkan melalui Rekening Bank BRO cabang Ciamis dengan nomor rekening 4059-01-001698 atas nama Si farhan.</p>';
echo '<p style="margin: 0 0 10px;">Dan barang akan kami kirim ke alamat di bawah ini:</p>';
echo '<p style="margin: 0 0 10px;">Nama Penerima : '.$_POST['namapenerima'].'<br>';
echo 'Alamat Penerima : '.$_POST['alamatpenerima'].'<br>';
echo 'Kota  : '.$_POST['kota'].'<br>';
echo 'kode_pos : '.$_POST['kode_pos'].'<br>';
echo 'Nomer Telpon : '.$_POST['telepon'].'<br>';

echo 'Nomer Referensi : ORDER-'.$id_order.'</p>';
echo '<a href="index.php" style="color: #0088cc !important;">Back To Home</a><br>';
echo '<a href="javascript:window.print()" style="color: #0088cc !important;">Click to Print This Page</a>';
//unset session cart
unset($_SESSION['cart']);
}
else {
echo '<script language="javascript">alert("Data Gagal Dimasukan , silakan ualngi"); document.location="./index.php";</script>';
}
?>
</div>
</div>
</div>
</div>
		<br><br/>
		<br><br/>

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
		