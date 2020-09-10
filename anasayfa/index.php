<?php

include("../engine/Database.php");

$listele = $database->query("Select * From urunler");
$kategori = $database->query("Select *From kategoriler");
session_start();

?>



<!DOCTYPE html>

<html class="no-js">


<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>mPurpose - Multipurpose Feature Rich Bootstrap Template</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width">

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/icomoon-social.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/leaflet.css" />

	<link rel="stylesheet" href="css/main.css">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

	<script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>

<body>

	<div class="mainmenu-wrapper">
		<div class="container">
			<div class="menuextras">
				<div class="extras">
					<ul>
						<li class="shopping-cart-items"><i class="glyphicon glyphicon-shopping-cart icon-white"></i> <a href="page-shopping-cart.php
						"><b> <?php echo count($_SESSION['urunler'])." ürün"; ?> </b></a></li>
						<li>
							<div class="dropdown choose-country">
								<a class="#" data-toggle="dropdown" href="#"><img src="img/flags/gb.png" alt="Great Britain"> UK</a>
								<ul class="dropdown-menu" role="menu">
									<li role="menuitem"><a href="#"><img src="img/flags/us.png" alt="United States">
											US</a></li>
									<li role="menuitem"><a href="#"><img src="img/flags/de.png" alt="Germany"> DE</a>
									</li>
									<li role="menuitem"><a href="#"><img src="img/flags/es.png" alt="Spain"> ES</a></li>
								</ul>
							</div>
						</li>
						<li><a href="page-login.html">Login</a></li>
					</ul>
				</div>
			</div>
			<nav id="mainmenu" class="mainmenu">
				<ul>
					
					<li class="logo-wrapper"><a href="index.html"><img src="img/mPurpose-logo.png" alt="Multipurpose Twitter Bootstrap Template"></a></li> 
					<li class="has-submenu active">
						<a href="index.html">Ürünler</a>
					</li>


				</ul>
			</nav>
		</div>
	</div>
	<div class="section section-breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>Ürünler</h1>
				</div>
			</div>
		</div>
	</div>
	<div class="eshop-section section">
		<div class="container">
			<div class="row ">
				<div class="col">
					<?php
					for ($j = 0; $j < count($listele); $j++) { ?>
						<div class="col-md-3 col-sm-6">
							<div class="shop-item">

								<div class="shop-item-image" style="width: 25rem; height: 25rem;">
									<a href="page-product-details.php?ide=<?php echo $listele[$j]['ide']; ?>"><img src="../Admin/images/products/<?php echo base64_decode($listele[$j]['resim']); ?>" class="img-fluid " alt="resim"></a>
								</div>
								<div class="title">
									<h3><a href="page-product-details.html"><?= $listele[$j]['isim'] ?></a></h3>
								</div>
								<div class="price">
									<?= $listele[$j]['satis'] . " " . "₺" ?>
								</div>
								<div class="actions">
									<a href="javascript:addTobasket(<?php echo $listele[$j]['ide']; ?>)"><button class="btn btn-small" name="isset"><i class="icon-shopping-cart icon-white"></i> Sepete Ekle</button> </a> <span>veya <a href="page-product-details.php?ide=<?php echo $listele[$j]['ide']; ?>">Ürün Detayı</a></span>
								</div>
							</div>
						</div>

					<?php
					}

					?>

				</div>
			</div>
			<div class="pagination-wrapper ">
				<ul class="pagination pagination-lg">
					<li class="disabled"><a href="#">Önceki</a></li>
					<li class="active"><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#">6</a></li>
					<li><a href="#">7</a></li>
					<li><a href="#">8</a></li>
					<li><a href="#">9</a></li>
					<li><a href="#">10</a></li>
					<li><a href="#">Sonraki</a></li>
				</ul>
			</div>
		</div>
	</div>
	</div>

	<script>	
	
		function addTobasket(id) {
			$.ajax({
				url: "engine/Engine.php",
				method: "POST",
				data: {
					isset: "addToBasket",
					ide: id,
				},
				success: function(res) {
							
	swal("Ürün Sepetinize Eklendi", "İşlem başarılı", "success");
			
					
				}
			});
		}		
	</script>





	<!-- Footer -->
	<div class="footer">
		<div class="container">
			<!-- <div class="row">
				<div class="col-footer col-md-3 col-xs-6">
					<h3>Our Latest Work</h3>
					<div class="portfolio-item">
						<div class="portfolio-image">
							<a href="page-portfolio-item.html"><img src="img/portfolio6.jpg" alt="Project Name"></a>
						</div>
					</div>
				</div> -->
			<!-- <div class="col-footer col-md-3 col-xs-6">
					<h3>Navigate</h3>
					<ul class="no-list-style footer-navigate-section">
						<li><a href="page-blog-posts.html">Blog</a></li>
						<li><a href="page-portfolio-3-columns-2.html">Portfolio</a></li>
						<li><a href="page-products-3-columns.html">eShop</a></li>
						<li><a href="page-services-3-columns.html">Services</a></li>
						<li><a href="page-pricing.html">Pricing</a></li>
						<li><a href="page-faq.html">FAQ</a></li>
					</ul>
				</div> -->



			<div class="col-footer col-md-4 col-xs-6">
				<h3>Contacts</h3>
				<p class="contact-us-details">
					<b>Address:</b> 123 Fake Street, LN1 2ST, London, United Kingdom<br />
					<b>Phone:</b> +44 123 654321<br />
					<b>Fax:</b> +44 123 654321<br />
					<b>Email:</b> <a href="mailto:getintoutch@yourcompanydomain.com">getintoutch@yourcompanydomain.com</a>
				</p>
			</div>
			<div class="col-footer col-md-4 col-xs-6"></div>
			<div class="col-footer col-md-4 col-xs-6"></div>
			<div class="col-footer col-md-2 col-xs-6">
				<h3>Stay Connected</h3>
				<ul class="footer-stay-connected no-list-style">
					<li><a href="#" class="facebook"></a></li>
					<li><a href="#" class="twitter"></a></li>
					<li><a href="#" class="googleplus"></a></li>
				</ul>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="footer-copyright">&copy; 2013 mPurpose. All rights reserved.</div>
			</div>
		</div>
	</div>
	</div>

	<!-- Javascripts -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script>
		window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')
	</script>
	<script src="js/bootstrap.min.js"></script>
	<script src="http://cdn.leafletjs.com/leaflet-0.5.1/leaflet.js"></script>
	<script src="js/jquery.fitvids.js"></script>
	<script src="js/jquery.sequence-min.js"></script>
	<script src="js/jquery.bxslider.js"></script>
	<script src="js/main-menu.js"></script>
	<script src="js/template.js"></script>

</body>

</html>