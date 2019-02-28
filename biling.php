<?php
	include("includes/db.php");
	include("includes/functions.php");
	error_reporting(E_ALL ^ E_NOTICE);

	//Cek apakah sudah login, jika belum alihkan ke halaman login
	if(!isset($_SESSION['user'])){
		header('Location: ./index.php');
	}

$sql2 = ("SELECT * FROM `orders` ORDER BY id_order DESC");
$q = mysql_query($sql2);
$a = mysql_fetch_array($q);
$b = $a[id_order] + 1;

function get_berat($pid){
		  $result=mysql_query("select berat from barang where nobar=$pid") or die("select berat from barang where nobar=$pid"."<br/><br/>".mysql_error());
		  $row=mysql_fetch_array($result);
		return $row['berat'];
	}
	function get_berat_total(){
		  $max=count($_SESSION['cart']);
		  $sum=0;
		  for($i=0;$i<$max;$i++){
		   $pid=$_SESSION['cart'][$i]['productid'];		  
		   $q=$_SESSION['cart'][$i]['qty'];
		   $berat=get_berat($pid);
		   $sum+=$berat*$q;
		  }
		return $sum;
 }
?><!--
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
.table > tbody > tr > td{
  color: #000 !important;
}
</style><link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
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
		<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Pesanan</li>
			</ol>
		</div>
</div>
<?php
 $max=count($_SESSION['cart']);
 for($i=0;$i<$max;$i++){
 $pid=$_SESSION['cart'][$i]['productid'];
 $q=$_SESSION['cart'][$i]['qty'];
 $beratt=get_berat_total();
 $berattotal=(get_berat_total()/1000);
 $beratbulet=ceil("$berattotal");
 }
?>

<div class="recp-sec">
	<div class="container">
	<div class="recp-sec">
<div class="container" style="width:940px !important;">
<!-- start: Table -->
<div class="title"><h3 class="bil-title">Form Checkout</h3></div>
<div class="bil-info">Harap catat informasi</div>
<div class="bil-info">Isi Data untuk Penerimaan pengiriman produk, Periksa kembali sebelum menyimpan data karena setelah memilih simpan data, data pengirman akan disimpan dan dikonfirmasi</div>

<div class="bil-info">Total Belanja Anda Rp. <?php echo get_order_total()?>,-</b></div>
<?php
$result=mysql_query("SELECT * FROM user WHERE uid='$uid'");
while($data=mysql_fetch_array($result)){

	$email=$data['email'];
	$telepon=$data['telepon'];
	$username=$data['username'];
	
?>	
<form action="selesai.php" name="form1" method="post">
	<div align="center">
  <table border="0" cellpadding="2px" class="table table-condensed" style="width:auto !important; margin-left:auto; margin-right:auto;">
		<input type="hidden" name="uid" value="<?php echo $uid; ?>" />
		<input type="hidden" name="username" value="<?php echo $username; ?>" />
  <tr>
		<td>Nama Penerima:</td>
		<td><input type="text" name="namapenerima" value="<?php echo "$nama_penerima"; ?>" " /></td>
	</tr>
  <tr>
		<td>Alamat Penerima:</td>
		<td><textarea input type="text" name="alamatpenerima"><?php echo "$alamat_penerima"; ?> </textarea></td>
	</tr>
	<tr>
		<td>No Telpon:</td>
		<td><input type="text" name="telepon" value="<?php echo "$telepon"; ?>" /></td>

	</tr>
	
		<tr>
		<td>Kota Tujuan</td>
		<td>
    <select style="" id="kota" name="tujuan" class="span4" required="">
     <option value="" style="color:red">Pilih kota</option>
     <option value="151">Jakarta Barat</option>
     <option value="152">Jakarta Pusat</option>
     <option value="153">Jakarta Selatan</option>
     <option value="154">Jakarta Timur</option>
     <option value="155">Jakarta Utara</option>
     <option value="79">Kota Bogor</option>
     <option value="78">Kabupaten Bogor</option>
     <option value="115">Depok</option>
     <option value="457">Kota Tangerang</option>      
     <option value="456">Kabupaten Tangerang</option>
     <option value="458">Tangerang Selatan</option>     
     <option value="55">Kota Bekasi</option>
     <option value="54">Kabupaten Bekasi</option>
    </select>
    </td>
	

	</tr>
	<tr>
	<td>Konfirmasi Kota :</td>
		<td><input type="text" name="kota" id="kota2" disabled="true"></td>
		<input type="hidden"  name="kota" id="kota3" />
	</tr>
	 <tr>
		<td>kode pos:</td>
		<td><input type="text"  name="kode_pos" value="<?php echo "$kode_pos"; ?>" " /></td>

	</tr>
	<td>Kurir :</td>
		<td>
              <select onchange="ongkir()" style="" id="kurir" name="kurir" required="">
              <option>--Pilih Kurir--</option>
              <option value="jne">JNE</option>
              <option value="tiki">TIKI</option>
              <option value="pos">POS INDONESIA</option>
			</select>
         </td>
		<tr>
			 <td>Jenis Paket :</td>
			 <td>
			  <div id="ongkir"></div>
			 </td>
        </tr>	 
	<tr>
		<td>Total Berat Produk:</td>
		<td><input id="berat" type="text" name="beratt" value="<?php echo "$pid"; ?>" disabled="true"/></td>
		<input type="hidden" name="berat" value="<?php echo "$max"; ?>"/>
   </tr>
  
	<tr>
		<td>Total Harga Produk	Rp:</td>
		<td><input id="harga" type="text" name="hargatotall" value="<?php echo get_order_total()?>"disabled="true" /></td>
		<input type="hidden" name="hargatotal" value="<?php echo get_order_total()?>" />
	</tr>
	
	<tr>
		<td>Total Ongkos Kirim	 Rp :</td>
		<td><input id="dana" type="text" name="ongkoss" disabled="true"/></td>
		<input type="hidden" name="ongkos" id="dana1" />
   </tr>
   <tr>
		<td><label>Total Yang Harus Dibayar Rp :</label></td>
		<td><input id="totalbarang" type="text" name="batott" disabled="true" /></td>
		<input type="hidden" name="batot" id="totalbarang1" />
   </tr>

<tr>
	<tr><td>No Referensi:</td><td><input type="text" name="ref" value="<?php echo "$b"; ?>" disabled="true" /></td></tr>
	<input type="hidden" name="id_order" value="<?php echo $b; ?>" />	
  <tr><td>&nbsp;</td><td><input type="submit" value="Simpan Data" name="finish" class="btn btn-sm btn-primary"/>&nbsp;<a href="index.php" class="btn btn-sm btn-primary">Kembali</a></td></tr>
  </table>
	</div>
</form>
<?php } ?>
</div>

		<br><br/>
		<br><br/>

</div>

</div>

		

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
<script>
function ongkir() {
   var kota = $('#kota').val();
   var kurir = $('#kurir').val();
   var berat = $('#berat').val();
        $.ajax({
             type : 'POST',
             url : './cek_ongkir.php',
             data :  {'kurir' : kurir, 'kab_id' : kota, 'berat': berat},
     success: function (data) {
     //jika data berhasil didapatkan, tampilkan ke dalam element div ongkir
     $("#ongkir").html(data);
    }
           });
  }
  </script>
<script> 
 function pilihan(id) {
 var pilihan = $('#pilih'+id).val();
 var harga = $('#harga').val();
 var x = parseInt(pilihan);
 var y = parseInt(harga);
 var totalbarang = x + y;
     $("#dana").val(pilihan);
     $("#dana1").val(pilihan);
     $("#totalbarang").val(totalbarang);
     $("#totalbarang1").val(totalbarang);
}

$(document).ready(function(){
		$('#kota').change(function(){
			//Mengambil value dari option select provinsi kemudian parameternya dikirim menggunakan ajax 
			var kota = $('#kota').val();
      		$.ajax({
            	type : 'GET',
           		url : './cek_kota.php',
            	data :  'kota_id=' + kota,
					success: function (data) {
					//jika data berhasil didapatkan, tampilkan ke dalam option select kabupaten
					$("#kota2").val(data);
					$("#kota3").val(data);
				}
          	});
		});
	});
</script>
<!-- //main slider-banner --> 
</body>
</html>
		