
<!DOCTYPE html>
<html>
<head>
<title>Welcome to e-shop</title>
<link href="<?php echo base_url()?>assets/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Eshop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<!-- for bootstrap working -->
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<!-- cart -->
	<script src="<?php echo base_url()?>assets/js/simpleCart.min.js"> </script>
<!-- cart -->
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/flexslider.css" type="text/css" media="screen" />
</head>
<body>
	<!-- header-section-starts -->
	<div class="header">
		<div class="header-top-strip">
			<div class="container">
				<div class="header-top-left">
					<ul>
						<li>
							<?php
							if($this->session->userdata('umail') =='')
							{ 
								?>
								<a href="<?php echo base_url('User_login/userLogin')?>"><span class="glyphicon glyphicon-user"> </span>Login</a>
							<?php
							 }
							else
								{
									?>
									<a href="<?php echo base_url('User_login/logout')?>"><span class="glyphicon glyphicon-user"> </span>Logout</a>
								<?php
								}
								?>
					</li>
						<li><a href="<?php echo base_url('User_Register/register')?>"><span class="glyphicon glyphicon-lock"> </span>Create an Account</a></li>			
					</ul>
				</div>
				<div class="header-right">
						<div class="cart box_1">
							<a href="<?php echo base_url()?>admin/Cart">
								<h3> 
									<span class="simpleCart_total"> $0.00 </span> 
									(<span id="simpleCart_quantity" class="simpleCart_quantity"> 0 </span>)
									<img src="<?php echo base_url()?>assets/images/bag.png" alt="">
								</h3>
							</a>	
							<p><a href="javascript:;" class="simpleCart_empty">Empty cart</a></p>
							<div class="clearfix"> </div>
						</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- header-section-ends -->
			<div class="banner-top">
		<div class="container">
				<nav class="navbar navbar-default" role="navigation">
	    <div class="navbar-header">
	        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
	        </button>
				<div class="logo">
					<h1><a href="<?php echo base_url('home/index')?>"><span>E</span> -Shop</a></h1>
				</div>
	    </div>
	    <!--/.navbar-header-->
	
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	        <ul class="nav navbar-nav">
			<li><a href="<?php echo base_url('home/index')?>">Home</a></li>
		        <li class="dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Men <b class="caret"></b></a>
		            <ul class="dropdown-menu multi-column columns-3">
			            <div class="row">
				            <div class="col-sm-4">
					            <ul class="multi-column-dropdown">
									<h6>NEW IN</h6>
						            <li><a href="products.html">New In Clothing</a></li>
						            <li><a href="products.html">New In Bags</a></li>
						            <li><a href="products.html">New In Shoes</a></li>
						            <li><a href="products.html">New In Watches</a></li>
						            <li><a href="products.html">New In Grooming</a></li>
					            </ul>
				            </div>
				            <div class="col-sm-4">
					            <ul class="multi-column-dropdown">
									<h6>CLOTHING</h6>
						            <li><a href="products.html">Polos & Tees</a></li>
						            <li><a href="products.html">Casual Shirts</a></li>
						            <li><a href="products.html">Casual Trousers</a></li>
						            <li><a href="products.html">Jeans</a></li>
						            <li><a href="products.html">Shorts & 3/4th</a></li>
						            <li><a href="products.html">Formal Shirts</a></li>
						            <li><a href="products.html">Formal Trousers</a></li>
						            <li><a href="products.html">Suits & Blazers</a></li>
						            <li><a href="products.html">Track Wear</a></li>
						            <li><a href="products.html">Inner Wear</a></li>
					            </ul>
				            </div>
				            <div class="col-sm-4">
					            <ul class="multi-column-dropdown">
									<h6>WATCHES</h6>
						            <li><a href="products.html">Analog</a></li>
						            <li><a href="products.html">Chronograph</a></li>
						            <li><a href="products.html">Digital</a></li>
						            <li><a href="products.html">Watch Cases</a></li>
					            </ul>
				            </div>
							<div class="clearfix"></div>
			            </div>
		            </ul>
		        </li>
		        <li class="dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">women <b class="caret"></b></a>
		            <ul class="dropdown-menu multi-column columns-3">
			            <div class="row">
				            <div class="col-sm-4">
					            <ul class="multi-column-dropdown">
									<h6>NEW IN</h6>
						            <li><a href="products.html">New In Clothing</a></li>
						            <li><a href="products.html">New In Bags</a></li>
						            <li><a href="products.html">New In Shoes</a></li>
						            <li><a href="products.html">New In Watches</a></li>
						            <li><a href="products.html">New In Beauty</a></li>
					            </ul>
				            </div>
				            <div class="col-sm-4">
					            <ul class="multi-column-dropdown">
									<h6>CLOTHING</h6>
						            <li><a href="products.html">Polos & Tees</a></li>
						            <li><a href="products.html">Casual Shirts</a></li>
						            <li><a href="products.html">Casual Trousers</a></li>
						            <li><a href="products.html">Jeans</a></li>
						            <li><a href="products.html">Shorts & 3/4th</a></li>
						            <li><a href="products.html">Formal Shirts</a></li>
						            <li><a href="products.html">Formal Trousers</a></li>
						            <li><a href="products.html">Suits & Blazers</a></li>
						            <li><a href="products.html">Track Wear</a></li>
						            <li><a href="products.html">Inner Wear</a></li>
					            </ul>
				            </div>
				            <div class="col-sm-4">
					            <ul class="multi-column-dropdown">
									<h6>WATCHES</h6>
						            <li><a href="products.html">Analog</a></li>
						            <li><a href="products.html">Chronograph</a></li>
						            <li><a href="products.html">Digital</a></li>
						            <li><a href="products.html">Watch Cases</a></li>
					            </ul>
				            </div>
							<div class="clearfix"></div>
			            </div>
		            </ul>
		        </li>
		        <li class="dropdown">
		        	<a href="#" class="dropdown-toggle" data-toggle="dropdown">kids <b class="caret"></b></a>
		            <ul class="dropdown-menu multi-column columns-2">
			            <div class="row">
				            <div class="col-sm-6">
					            <ul class="multi-column-dropdown">
									<h6>NEW IN</h6>
						            <li><a href="products.html">New In Boys Clothing</a></li>
						            <li><a href="products.html">New In Girls Clothing</a></li>
						            <li><a href="products.html">New In Boys Shoes</a></li>
						            <li><a href="products.html">New In Girls Shoes</a></li>
					            </ul>
				            </div>
				            <div class="col-sm-6">
					             <ul class="multi-column-dropdown">
									<h6>ACCESSORIES</h6>
						            <li><a href="products.html">Bags</a></li>
						            <li><a href="products.html">Watches</a></li>
						            <li><a href="products.html">Sun Glasses</a></li>
						            <li><a href="products.html">Jewellery</a></li>
					            </ul>
				            </div>
							<div class="clearfix"></div>
			            </div>
		            </ul>
		        </li>
					<li><a href="typography.html">TYPO</a></li>
					<li><a href="contact.html">CONTACT</a></li>
	        </ul>
	    </div>
	    <!--/.navbar-collapse-->
	</nav>
	<!--/.navbar-->
</div>
</div>