<?php 
session_start();
 error_reporting(0);
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
		<!--<script src="css/sweetalert.css"></script>-->
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>

        

        <!-- Navigation & Logo-->
        <div class="mainmenu-wrapper">
	        <div class="container">
	        	<div class="menuextras">
					<div class="extras">
						<ul>
							<li class="shopping-cart-items"><i class="glyphicon glyphicon-shopping-cart icon-white"></i> <a href="page-shopping-cart.php"><b><?php echo count($_SESSION['urunler'])." ürün"; ?></b></a></li>
							<li>
								<div class="dropdown choose-country">
									<a class="#" data-toggle="dropdown" href="#"><img src="img/flags/gb.png" alt="Great Britain"> UK</a>
									<ul class="dropdown-menu" role="menu">
										<li role="menuitem"><a href="#"><img src="img/flags/us.png" alt="United States"> US</a></li>
										<li role="menuitem"><a href="#"><img src="img/flags/de.png" alt="Germany"> DE</a></li>
										<li role="menuitem"><a href="#"><img src="img/flags/es.png" alt="Spain"> ES</a></li>
									</ul>
								</div>
							</li>
			        		<li><a href="page-login.html">Giriş</a></li>
			        	</ul>
					</div>
		        </div>
		        <nav id="mainmenu" class="mainmenu">
					<ul>
						<li class="logo-wrapper"><a href="index.php"><img src="img/mPurpose-logo.png"
									alt="Multipurpose Twitter Bootstrap Template"></a></li>
						<li class="has-submenu active">
							<a href="index.html" >Ürünler</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>

        <!-- Page Title -->
		<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>Sepetim</h1>
					</div>
				</div>
			</div>
		</div>
        <div class="section">
	    	<div class="container">
				<div class="row">
					<div class="col-md-12">
						<!-- Shopping Cart Items -->
						<table class="shopping-cart">
						<?php if(!isset($_SESSION['urunler'])) { ?>
						<tr> 
						<strong> Sepet boş</strong>
						</tr>
						<?php } else {?>


							<?php
								 foreach($_SESSION['urunler'] as $urun) {?>
							<tr>
								<td class="image"><a href="page-product-details.html"><img src="../Admin/images/products/<?php echo base64_decode($urun['image']); ?>" class="img-fluid "  alt="resim" style="width: 25rem;"></a></td>
								
								<td>
									<div class="cart-item-title"><a href="page-product-details.php"><strong><?php echo $urun['name'];?></strong></a></div>
								
								</td>
								<td>Adet Fiyatı : <?php echo ($urun['fee'])."₺"; ?></td>
								
								<td class="quantity">
									<input class="form-control input-sm input-micro" name="adet" type="number" id="p_<?php echo $urun['ide']; ?>" onchange="addAmount(<?php echo $urun['ide']; ?>);" value="<?php echo $urun['adet']?>">
								</td>
								
								<td class="price" id="pr_<?php echo $urun['ide']; ?>"><?php $top=($urun['fee']*$urun['adet']);
								$format = number_format($top, 2, ',', '.');
								echo "₺".$format;
								?></td>
								
								<td class="actions">
									<a href="#" class="btn btn-xs btn-grey"><i class="glyphicon glyphicon-pencil"></i></a>
									<button class="btn btn-xs btn-grey" onclick="clear();"><i class="glyphicon glyphicon-trash" title="sil"></i></button>
								</td>
							</tr>
							<?php }?>
							<?php }?>
						
						</table>
						<!-- End Shopping Cart Items -->	
					</div>
				</div>
				<script>
				</script>
				
				<div class="row">
					<!-- Promotion Code -->
					<div class="col-md-4  col-md-offset-0 col-sm-6 col-sm-offset-6">
						<div class="cart-promo-code">
							<h6><i class="glyphicon glyphicon-gift"></i> Promosyon kodunuz var mı??</h6>
							<div class="input-group">
								<input class="form-control input-sm" id="appendedInputButton" type="text" value="">
								<span class="input-group-btn">
									<button class="btn btn-sm btn-grey" type="button">Uygula</button>
								</span>
							</div>
						</div>
					</div>
					<!-- Shipment Options -->
					<div class="col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-6">
						<div class="cart-shippment-options">
							<h6><i class="glyphicon glyphicon-plane"></i> Teslimat seçenekleri</h6>
							<div class="input-append">
								<select class="form-control input-sm">
									<option value="1">Standard - Ücretsiz</option>
									<option value="2">Sonraki Gün Teslimat - $10.00</option>
								</select>
							</div>
						</div>
					</div>
					
					<!-- Shopping Cart Totals -->
					<div class="col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-6">
						<table class="cart-totals">
							<tr>
								<td><b>Teslimat</b></td>
								<td>Ücretsiz</td>
							</tr>
							<!-- <tr>
								<td><b>İndirim</b></td>
								<td>- $18.00</td>
							</tr> -->
							<tr class="cart-grand-total">
								<td><b>Toplam</b></td>

								 <td><b id="total"><?php
								$sum=0;
								foreach($_SESSION['urunler'] as $urun) { 
									$sum=$sum + ($urun['fee'] * $urun['adet']);
									$format = number_format($sum, 2, ',', '.');
								}  echo "₺".$format ;?></b></td>						
							</tr>
							
						</table>
						
						<!-- Action Buttons -->
						<div class="pull-right">
							<a href="javascript:FlushBasket();" class="btn btn-grey"><i class="glyphicon glyphicon-refresh"></i> Sil </a>
							<a href="#" class="btn"><i class="glyphicon glyphicon-shopping-cart icon-white"></i> Tamamla</a>
						</div>
					</div>
				</div>
			</div>
		</div>

	    <!-- Footer -->
	    <div class="footer">
	    	<div class="container">
		    	<div class="row">
		    		<div class="col-footer col-md-3 col-xs-6">
		    			<h3>Our Latest Work</h3>
		    			<div class="portfolio-item">
							<div class="portfolio-image">
								<a href="page-portfolio-item.html"><img src="img/portfolio6.jpg" alt="Project Name"></a>
							</div>
						</div>
		    		</div>
		    		<div class="col-footer col-md-3 col-xs-6">
		    			<h3>Navigate</h3>
		    			<ul class="no-list-style footer-navigate-section">
		    				<li><a href="page-blog-posts.html">Blog</a></li>
		    				<li><a href="page-portfolio-3-columns-2.html">Portfolio</a></li>
		    				<li><a href="page-products-3-columns.html">eShop</a></li>
		    				<li><a href="page-services-3-columns.html">Services</a></li>
		    				<li><a href="page-pricing.html">Pricing</a></li>
		    				<li><a href="page-faq.html">FAQ</a></li>
		    			</ul>
		    		</div>
		    		
		    		<div class="col-footer col-md-4 col-xs-6">
		    			<h3>Contacts</h3>
		    			<p class="contact-us-details">
	        				<b>Address:</b> 123 Fake Street, LN1 2ST, London, United Kingdom<br/>
	        				<b>Phone:</b> +44 123 654321<br/>
	        				<b>Fax:</b> +44 123 654321<br/>
	        				<b>Email:</b> <a href="mailto:getintoutch@yourcompanydomain.com">getintoutch@yourcompanydomain.com</a>
	        			</p>
		    		</div>
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
<script>
function FlushBasket(){			
	swal("Sepet boşaltılmıştır.", "İşlem başarılı", "success");
	$.ajax({
		type:"Post",
		url: "engine/Engine.php",
		data:{isset:"FlushBasket"},
		success: function(res){
			var basket= $_SESSION['urunler'];
			$(basket).fadeOut("slow");
		}

	});




		}
		function addAmount(id){
			var input = "p_"+id;
			$.ajax({
				type: "Post",
				url: "engine/Engine.php",
				data: {isset: "AddAmount", id: id, amount: document.getElementById(input).value},
				success: function(res){
					var data =JSON.parse(res);
					var price = (data.adet * data.fee);
					var input2 = "pr_"+ data.ide;
					document.getElementById(input2).innerText = "₺" + price.toFixed(2);					
					var total = document.getElementById("total").innerText;
					console.log((total.substr(1)).constructor);
					sessionStorage.setItem("key", JSON.stringify(data));
				},	
				error: function(res){
					console.log(JSON.parse(res));
				}
			});
			
		}
</script>
        <!-- Javascripts -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="js/bootstrap.min.js"></script>
        <script src="http://cdn.leafletjs.com/leaflet-0.5.1/leaflet.js"></script>
        <script src="js/jquery.fitvids.js"></script>
        <script src="js/jquery.sequence-min.js"></script>
        <script src="js/jquery.bxslider.js"></script>
        <script src="js/main-menu.js"></script>
        <script src="js/template.js"></script>
    </body>
</html>