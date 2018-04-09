	<div class="main-footer">

		<!-- <div class="col-md-12 text-center footnote">
			<a href="#"> Return Poilicy </a>
			<a href="#"> About Us </a>
			<a href="#"> Get Assistance </a>
		</div>
		 -->
		<!-- <div class="col-md-12 text-center footnote-icons">
			<a href="#"> <i class="fa fa-facebook-official" aria-hidden="true"></i> </a>
			<a href="#"> <i class="fa fa-instagram" aria-hidden="true"></i> </a>
			<a href="#"> <i class="fa fa-twitter-square" aria-hidden="true"></i> </a>
		</div> -->

		<div class="col-md-12 text-center footnote">
			<a href="#"> Powered by E-merse</a>
		</div>

	</div>

	<!-- Cab Modal-->

<div class="modal fade" id="cba">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

			<div class="modal-body">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-4 col-sm-4 hidden-xs cab-preview">
							<img src="assets/img/category1.png" alt="">
							<img src="assets/img/dng.jpg" alt="">
							<img src="assets/img/dng.jpg" alt="">
							<img src="assets/img/dng.jpg" alt="">
							<img src="assets/img/category1.png" alt="">
						
						</div>
						<div class="col-md-8 col-sm-4 col-xs-12">
							<div class="cab-form">
								<p>Check Availability</p>

									<form action="">
										<input type="text" placeholder="Enter you name">
										<input type="phone" placeholder="Phone address">
										<input type="email" placeholder="email address">
										<input type="text" placeholder="Enter you size">
										<input type="Submit" value="Get it">
									</form>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->

<div id="search">
    <button type="button" class="close"><i class="material-icons">close</i></button>
    <form>
        <input type="search" value="" placeholder="search here..." />
        <button type="submit" class="btn i-want-this">Search</button>
    </form>
</div>

<!--instaclick JS -->
<script src="assets/instaclick/instantclick.js" data-no-instant></script>
<script data-no-instant>InstantClick.init();</script>

<!--jquery-migrate -->
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<!-- Owl Carousel -->
<script src="assets/owlcarousel/owl.carousel.js"></script>
<script>
	$(document).ready(function(){
  $(".owl-carousel").owlCarousel();
});
</script>

 <!-- Bootstrap Dropdown Hover JS -->
 <script src="assets/js/bootstrap-dropdownhover.min.js"></script>

<script>
	$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        320:{
            items:2,
            nav:true
        },
        600:{
            items:3,
            nav:false
        },

        1000:{
            items:4,
            nav:true,
            loop:false
        }
    }
})
</script>

</body>
</html>


<script>
	$(document).ready(function(){
	  $('.slider').slick({
	    setting-name: setting-value
	  });
	});	
</script>

<script>
	$(".slider").slick({
    autoplay: false,
    dots: false,
    responsive: [{ 
        breakpoint: 500,
        settings: {
            dots: false,
            arrows: false,
            infinite: false,
            slidesToShow: 2,
            slidesToScroll: 2
        } 
    }]
});

</script>

<script>
$(function () {
    $('a[href="#search"]').on('click', function(event) {
        event.preventDefault();
        $('#search').addClass('open');
        $('#search > form > input[type="search"]').focus();
    });
    
    $('#search, #search button.close').on('click keyup', function(event) {
        if (event.target == this || event.target.className == 'close' || event.keyCode == 27) {
            $(this).removeClass('open');
        }
    });
    
    
    //Do not include! This prevents the form from submitting for DEMO purposes only!
    $('form').submit(function(event) {
        event.preventDefault();
        return false;
    })
});
</script>

<script>
	$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>




<!-- More Nav -->
<script>
function openNav() {
    document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
    document.getElementById("myNav").style.width = "0%";
}
</script>

<!-- Product Carousel --> 
<script>
	   $('#pCarousel').carousel();
    var winWidth = $(window).innerWidth();
    $(window).resize(function () {

        if ($(window).innerWidth() < winWidth) {
            $('.carousel-inner>.item>img').css({
                'min-width': winWidth, 'width': winWidth
            });
        }
        else {
            winWidth = $(window).innerWidth();
            $('.carousel-inner>.item>img').css({
                'min-width': '', 'width': ''
            });
        }
    });

</script>

