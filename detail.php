
<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php 
session_start();
$koneksi = new mysqli("localhost","root","","db_kost");


?>

<!DOCTYPE html>
<html>
<head>
<title>NgalamKost - Cepat dan Tepat cari kost</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--jQuery(necessary for Bootstrap's JavaScript plugins)-->
<script src="js/jquery-1.11.0.min.js"></script>
<!--Custom-Theme-files-->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Luxury Watches Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--start-menu-->
<script src="js/simpleCart.min.js"> </script>
<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>	
<!--dropdown-->
<script src="js/jquery.easydropdown.js"></script>			
</head>
<body> 
	<!--top-header-->
	
	<!--top-header-->
	<!--start-logo-->
	
	<!--start-logo-->
	<!--bottom-header-->
	<div class="header-bottom">
		<div class="container">
			<div class="header">
				<div class="col-md-9 header-left">
				<div class="top-nav">
					<div class="top-nav">
					<ul class="memenu skyblue"><li class="active"><a href="index.php">Home</a></li>
						<li class="grid"><a href="cart.php">Booking</a></li>
							<!-- if in 'pelanggan' session -->
						<?php if (isset($_SESSION["pelanggan"])): ?> 
							<li><a href="logout.php">Logout</a></li>
						<!-- else not yet to login on session -->
					<?php else: ?>
							<li><a href="login.php">Login</a></li>
						<?php endif ?>
						<li class="grid"><a href="daftar.php">Daftar</a></li>
						<li class="grid"><a href="contact.php">Contact</a></li>
					</ul>
				</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="col-md-3 header-right"> 
				<div class="search-bar">
					<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
					<input type="submit" value="">
				</div>
			</div>
			<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--bottom-header-->
	<!--start-breadcrumbs-->
	
	<!--end-breadcrumbs-->
	<!--start-ckeckout-->
	<div class="ckeckout">
		<div class="container">
			<div class="ckeck-top heading">
				<h2>Detail Kost</h2>
			</div>
			<div class="ckeckout-top">
			<div class="cart-items">
				<div class="row">
					
					<?php foreach ($_SESSION['detail'] as $id_kost => $jumlah): ?>

					<?php
					$ambil = $koneksi->query("SELECT * FROM kost WHERE id_kost='$id_kost'");
					$pecah = $ambil->fetch_assoc();
					$totalharga = $pecah["harga_kost"] * $jumlah;
					?>

			 	<div class="col-md-6">
			 		<img src="imgkost/<?php echo $pecah["foto_kost"]; ?>" alt="" class="img-responsive">
			 	</div>

			 	<div class="col-md-6">
			 		<h2><?php echo $pecah["nama_kost"]; ?></h2>
			 		<h3>Rp. <?php echo number_format($pecah["harga_kost"]); ?></h3>
			 		<h4><?php echo $pecah["alamat_kost"]; ?></h4>
			 		<p><?php echo $pecah["deskripsi_kost"]; ?></p>
					


				
			
		
		</div>
		<?php endforeach ?>
		</div>
	</div>
</div>
</div>
</div>
				
				
			
			<div class="clearfix"></div>  
	<!--end-ckeckout-->
	<!--information-starts-->
	<div class="information">
		<div class="container">
			<div class="infor-top">
				<div class="col-md-3 infor-left">
					<h3>Follow Us</h3>
					<ul>
						<li><a href="#"><span class="fb"></span><h6>Facebook</h6></a></li>
						<li><a href="#"><span class="twit"></span><h6>Twitter</h6></a></li>
						<li><a href="#"><span class="google"></span><h6>Google+</h6></a></li>
					</ul>
				</div>
				<div class="col-md-3 infor-left">
					<h3>Information</h3>
					<ul>
						<li><a href="#"><p>Specials</p></a></li>
						<li><a href="#"><p>New Products</p></a></li>
						<li><a href="#"><p>Our Stores</p></a></li>
						<li><a href="contact.html"><p>Contact Us</p></a></li>
						<li><a href="#"><p>Top Sellers</p></a></li>
					</ul>
				</div>
				<div class="col-md-3 infor-left">
					<h3>My Account</h3>
					<ul>
						<li><a href="account.html"><p>My Account</p></a></li>
						<li><a href="#"><p>My Credit slips</p></a></li>
						<li><a href="#"><p>My Merchandise returns</p></a></li>
						<li><a href="#"><p>My Personal info</p></a></li>
						<li><a href="#"><p>My Addresses</p></a></li>
					</ul>
				</div>
				<div class="col-md-3 infor-left">
					<h3>Store Information</h3>
					<h4>The company name,
						<span>Lorem ipsum dolor,</span>
						Glasglow Dr 40 Fe 72.</h4>
					<h5>+955 123 4567</h5>	
					<p><a href="mailto:example@email.com">contact@example.com</a></p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--information-end-->
	<!--footer-starts-->
	<div class="footer">
		<div class="container">
			<div class="footer-top">
				<div class="col-md-6 footer-left">
					<form>
						<input type="text" value="Enter Your Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Your Email';}">
						<input type="submit" value="Subscribe">
					</form>
				</div>
				<div class="col-md-6 footer-right">					
					<p>© 2018 NgalamKost.me | Developed by  <a href="http://w3layouts.com/" target="_blank">Nando Cahyono</a> </p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--footer-end-->	
</body>
</html>