<?php
include "header.php";
?>

<div class="banner">
	<section class="jk-slider">

		<div id="carousel-example" class="carousel slide" data-ride="carousel" data-interval="5000">
			<ol class="carousel-indicators">
				<li data-target="#carousel-example" data-slide-to="0" class="active"></li><br>
				<li data-target="#carousel-example" data-slide-to="1"></li><br>
				<li data-target="#carousel-example" data-slide-to="2"></li>
			</ol>

			<div class="carousel-inner">

				<div class="item active">
					<a href="#"><img src="assets/img/bg.png" /></a>
				</div>

				<div class="item">
					<a href="#"><img src="assets/img/bg.png" /></a>
				</div>

				<div class="item">
					<a href="#"><img src="assets/img/bg.png" /></a>
				</div>

			</div>


		</div>

	</section>
</div>

<div class="container-fluid categories">
	<div class="container">
		<div class="col-md-6 col-sm-6 col-xs-6 to-category text-center">
			<div class="category-bg">
				<a href="shop.php"><img src="assets/img/category1.png" alt=""></a>
				<div class="category-title">T-SHIRTS</div>
			</div>
		</div>
		<div class="col-md-6 col-sm-6 col-xs-6 to-category text-center">
			<div class="category-bg">
				<a href="shop.php"><img src="assets/img/category2.png" alt=""></a>
				<div class="category-title">BOMBERS</div>
			</div>
		</div>
	</div>
</div>


<div class="container-fluid custom-discount">

	<h4 class="text-center custom-message discount-color">ITEMS ON OFFER</h4>

	

		<!-- Item slider-->
		<div class="container-fluid">

			<?php
			include "discounts.php";
			?>
		  
		</div>
		<!-- Item slider end-->

	



	
</div>


<div class="container-fluid new-items hidden-xs">

	<h4 class="text-center custom-message">check out <span>new </span>Items</h4>

	<!-- Item slider-->
		<div class="container-fluid">
			
			<?php
			include "new-items.php";
			?>

		</div>
		<!-- Item slider end-->

</div>



<div class="container-fluid discount-box">
	<div class="col-md-4 hidden-sm col-xs-12 for-alerts">
		<img src="assets/img/alert.png" alt="">
	</div>
	<div class="col-md-8 col-sm-12 col-xs-12 discount-form">
		<h3>Discount Alerts! Be the first to know when we have discounts!</h3>

		<form action="">
			<div class="col-md-8 col-sm-12 col-xs-12">
				<div class="col-md-6 col-sm-12 col-xs-12"> <input type="text" placeholder="Name"> </div>
				<div class="col-md-6 col-sm-12 col-xs-12"> <input type="phone" placeholder="Phone"> </div>
				<div class="col-md-6 col-sm-12 col-xs-12"> <input type="email" placeholder="Email"> </div>
				<div class="col-md-6 col-sm-12 col-xs-12"> <input type="text" placeholder="Product Interest"> </div>
			</div>
			<div class="col-md-4 col-sm-12  col-xs-12 text-center">
				<input type="submit">
			</div>

		</form>

	</div>
</div>

<?php
include "footer.php";
?>