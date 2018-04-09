<?php
include "header.php";
?>


<div class="product-div">
	

	<div class="product-view">

		<div class="col-md-6 col-sm-6 col-sm-12">
			<div class="row">

				<div class="container-fluid product-img hidden-xs">
					<span class="zoom" id="ex3"><img src="assets/img/category1.png" alt="" class="col-md-12"></span>
					<span class="zoom" id="ex4"><img src="assets/img/dng.jpg" alt="" class="col-md-6"></span>
					<span class="zoom" id="ex5"><img src="assets/img/dng.jpg" alt="" class="col-md-6"></span>
					<span class="zoom" id="ex6"><img src="assets/img/dng.jpg" alt="" class="col-md-12"></span>
					<span class="zoom" id="ex7"><img src="assets/img/dng.jpg" alt="" class="col-md-6"></span>
					<span class="zoom" id="ex8"><img src="assets/img/dng.jpg" alt="" class="col-md-6"></span>
				</div>
				

				<div class="container-fluid product-img hidden-lg hidden-md hidden-sm col-xs-12">
					<div class="row">
						<div id="pCarousel" class="carousel slide">
							<div class="carousel-inner">
								<div class="item" style="">
									<span class="zoom" id="ex0"><img src="assets/img/dng.jpg" alt=""></span>
								</div>
								<div class="item active">
									<span class="zoom" id="ex1"><img src="assets/img/croc.jpg" alt=""></span>
								</div>
								<div class="item" style="">
									<span class="zoom" id="ex2"><img src="assets/img/dng.jpg" alt=""></span>
								</div>
							</div>    

							<a class="left carousel-control" href="#pCarousel" data-slide="prev">
								<i class="material-icons">keyboard_arrow_left</i>
							</a>

							<a class="right carousel-control" href="#pCarousel" data-slide="next">
								<i class="material-icons">keyboard_arrow_right</i>
							</a>


						</div><!-- End Carousel -->
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-6 col-sm-6 col-sm-12 action-on-product">
			<div class="product-info">
				<h3>Souprim Tee</h3>
				<h4>KES 800</h4>
				<h6>In Stock</h6>
				<hr>

				<h4>Description</h4>

				<p class="text-left">
					<p class="text-left">100% cotton tee's</p>

					<p class="text-left">• Soft feel to make you more comfortable. </p>
					<p class="text-left">• Products available are 100 % brand new. </p>
					<p class="text-left">• Various colors Now available!  </p>

					<p class="text-left">Available in all sizes</p>  

					 <a href="#" class="pr-add-to-cart"><i class="material-icons">shopping_cart</i> Add to Cart</a>
				</p>

				<div class="coupon">
					<form action="">
						<input type="text" Placeholder="Enter Coupon here">
					</form>

					<a data-toggle="modal" href="#cba" class="i-want-this-p"> I want This</a>
				</div>



				<div class="col-md-12 col-sm-12 col-xs-12 social-share">
					<div class="col-md-6 col-sm-6 col-xs-6 s-head text-left">Share this online</div>
					<div class="col-md-6 col-sm-6 col-xs-6 text-right">
						<a href="#"><img src="assets/img/facebook.svg" alt=""></a>
						<a href="#"><img src="assets/img/whatsapp.svg" alt=""></a>
					</div>
				</div>


			</div>
		</div>
	</div>

</div>




<div class="container-fluid custom-discount">

	<h4 class="text-center custom-message discount-color">RELATED ITEMS</h4>
	
		<!-- Item slider-->
		<div class="container-fluid">

			<?php
			include "discounts.php";
			?>
		  
		</div>
		<!-- Item slider end-->
</div>






<?php
include "footer.php";
?>