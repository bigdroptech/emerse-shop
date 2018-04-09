<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Emerse-Shop</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Styles -->
	<link rel="stylesheet" data-instant-track href="assets/css/main.css">
	<link rel="stylesheet" data-instant-track href="assets/css/bootstrap/bootstrap.css">
	<link rel="stylesheet" data-instant-track href="assets/css/bootstrap/bootstrap-theme.css" />

	<!-- Sass Import -->
	<link href="stylesheets/screen.css" data-instant-track media="screen, projection" rel="stylesheet" type="text/css" />
	<link href="stylesheets/style.css" data-instant-track media="screen, projection" rel="stylesheet" type="text/css" />
	<link href="stylesheets/print.css" data-instant-track media="print" rel="stylesheet" type="text/css" />
	<!--[if IE]>
	    <link href="/stylesheets/ie.css" media="screen, projection" rel="stylesheet" type="text/css" />
	    <![endif]-->	

	    <!-- CDN links -->
	    <link rel="stylesheet" href=" https://opensource.keycdn.com/fontawesome/4.7.0/font-awesome.min.css ">
	    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	    <!--Owl Carousel Stylesheet -->
	    <link rel="stylesheet" href="assets/owlcarousel/owl.carousel.css">
	    <link rel="stylesheet" href="assets/owlcarousel/owl.theme.default.css">

	    <!-- Bootstrap Dropdown Hover CSS -->
	    <link href="assets/css/animate.min.css" rel="stylesheet">
	    <link href="assets/css/bootstrap-dropdownhover.css" rel="stylesheet">



	    <!-- Zoom Product -->
	    <script data-instant-track src='assets/js/jquery.zoom.js'></script>
	    <script>
	    $(document).ready(function(){
	    	$('#ex0').zoom({ on:'click' });
	    	$('#ex1').zoom({ on:'click' });
	    	$('#ex2').zoom({ on:'click' });
	    	$('#ex3').zoom({ on:'click' });
	    	$('#ex4').zoom({ on:'click' });
	    	$('#ex5').zoom({ on:'click' });
	    	$('#ex6').zoom({ on:'click' });
	    	$('#ex7').zoom({ on:'click' });
	    	$('#ex8').zoom({ on:'click' });

	    });
	    </script>
	</head>
	<body>
		<header class="container-fluid header">

			<div class="header">
				<div class="col-md-2 col-sm-6 col-xs-6 t-nav">
					<a href="index.php"><img src="assets/img/logo.png" alt="Logo"></a>

				</div>

				<div class="col-md-8 hidden-sm hidden-xs text-center main-navs">

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-slide-dropdown">
						<ul class="nav navbar-nav">
							<li><a href="index.php">Home</a></li>
							<li><a href="shop.php">Women</a></li>
							<li><a href="shop.php">Men</a></li>
							<li><a href="shop.php">Kids</a></li>
							<li class="dropdown">
								<div class="dropdown" data-animations="fadeIn fadeIn fadeInUp fadeInRight">
									<a class="btn dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown">
										More <span class="caret"></span>
									</a>
									<ul class="dropdown-menu">
										<li><a href="#">Action</a></li>
										<li><a href="#">Another action</a></li>
										<li class="dropdown one-more">
											<a href="#" class="">One more dropdown</a>
											<ul class="dropdown-menu">
												<li><a href="#">Action</a></li>
												<li><a href="#">Another action</a></li>
												<li><a href="#">Something else here</a></li>
												<li><a href="#">Separated link</a></li>
											</ul>
										</li>
									</ul>
								</div>               
							</li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div>

				<div class="col-md-2 col-sm-6 col-xs-6 t-nav text-right">
					<a class="btn" href="#search"><i class="material-icons">search</i></a>
					<!-- <a class="btn" href="#"><i class="material-icons">account_circle</i></a> -->
					<a class="btn cart" href="cart.php"> <i class="material-icons">shopping_cart</i> <span></span> </a>
				</div>
			</div>



		</header>


		<div class="hidden-lg hidden-md col-sm-12 col-xs-12 mobile-nav">
			<div class="main-navs-mobile">
				<a href="shop.php">Women</a>
				<a href="shop.php">Men</a>
				<a href="shop.php">Kids</a>
				<a href="#tgnav" type="button" data-toggle="collapse" onclick="openNav()">More</a>
			</div>
		</div>
		
		<!-- More Nav -->
		<div id="myNav" class="overlay">
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			<div class="overlay-content">
				<a href="shop.php">Tops</a>
				<a href="shop.php">Shirts</a>
				<a href="shop.php">Dresses</a>
			</div>
		</div>
		<!-- /.nav-collapse -->


