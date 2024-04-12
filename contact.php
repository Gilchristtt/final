<?php
include './settings/core.php';
include './settings/connection.php';
include './functions/get_services.php';
checkLogin();
if($_SESSION['role_id'] !=3){
	header('Location: admin.php');
	exit;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Auto Repair - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
		<div class="wrap">
	    <div class="container">
				<div class="row justify-content-between">
					<div class="col-md-3 d-flex align-items-center">
						<a class="navbar-brand" href="index.php">Fita<span>.</span></a>
					</div>
					<div class="col-md-7">
						<div class="row">
							<div class="col">
								<div class="top-wrap d-flex">
									<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-location-arrow"></span></div>
									<div class="text"><span>Address</span><span>Nii Abose St, Accra</span></div>
								</div>
							</div>
							<div class="col">
								<div class="top-wrap d-flex">
									<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-location-arrow"></span></div>
									<div class="text"><span>Call us</span><span>(+233) 050 236 1998</span></div>
								</div>
							</div>
							<div class="col-md-3 d-flex justify-content-end align-items-center">
								<div class="social-media">
					    		<p class="mb-0 d-flex">
					    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
					    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
					    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
					    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
					    		</p>
				        </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	    
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
				
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav mr-auto">
	        	<li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
	        	<li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
	        	<li class="nav-item"><a href="services.php" class="nav-link">Services</a></li>
	        	<li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
				<li class="nav-item"><a href="contact.php" class="nav-link">Book Now</a></li>
				<li class="nav-item active"><a href="contact.php" class="nav-link">Contact</a></li>
				<li class="nav-item "><a href="shop.php" class="nav-link">Shop</a></li>
				<li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
	          
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.php">Home <i class="fa fa-chevron-right"></i></a></span> <span>Book us <i class="fa fa-chevron-right"></i></span></p>
            <h1 class="mb-0 bread">Book Us</h1>
          </div>
        </div>
      </div>
    </section>

    <!-- <section class="ftco-section bg-light">
    	<div class="container"> -->
			    </section>

				<section class="ftco-counter" id="section-counter">
					<div class="container">
							<div class="row">
					  <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
						<div class="block-18 text-center">
						  
						  
						</div>
					  </div>
					  <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
						<div class="block-18 text-center">
						 
						  
						</div>
					  </div>
					  <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
						<div class="block-18 text-center">
						
			
						  
						</div>
					  </div>
					  <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
						<div class="block-18 text-center">
						  
						 
						</div>
					  </div>
					</div>
					</div>
				</section>		

		<section class="ftco-appointment ftco-section ftco-no-pt ftco-no-pb img" style="background-image: url(images/bg_3.jpg);">
			<div class="overlay"></div>
    	<div class="container">
    		<div class="row d-md-flex justify-content-end">
    			<div class="col-md-12 col-lg-6 half p-3 py-5 pl-lg-5 ftco-animate heading-section heading-section-white">
    				<span class="subheading">Booking an Appointment</span>
    				<h2 class="mb-4">Free Consultation</h2>
    				<form action="booking.php" method="post" class="appointment">
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <div class="form-field">
				<div class="select-wrap">
    <div class="icon"><span class="fa fa-chevron-down"></span></div>
    <select name="service" id="service" class="form-control">
        <?php echo generateServiceOptions(); ?>
    </select>
</div>

                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Your Name">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <input type="tel" name="phone" class="form-control" placeholder="Phone number">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <div class="input-wrap">
                    <div class="icon">
						<span class="fa fa-calendar"></span></div>
                    <input type="date" name="appointment_date" id="appointment_date" class="form-control appointment_date" placeholder="Date" required>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <div class="input-wrap">
                    <div class="icon"><span class="fa fa-clock-o"></span></div>
                    <input type="time" name="appointment_time"   class="form-control appointment_time" placeholder="Time">
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <input name="submitx" type="submit" value="Book now" class="btn btn-dark py-3 px-4">
            </div>
        </div>
    </div>
</form>

    			</div>
    		</div>
    	</div>
    </section>
    		
					
    	<!-- </div>
    </section> -->


    <footer class="footer ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 col-lg">
            <div class="ftco-footer-widget mb-4">
              <h2 class="logo"><a href="#">Fita<span>.</span></a></h2>
              <p>Driving Confidence, One Repair at a Time.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-4">
                <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Services</h2>
              <ul class="list-unstyled">
                <li><a href="services.php" class="py-1 d-block"><span class="fa fa-check mr-3"></span>Oil Change</a></li>
                <li><a href="services.php" class="py-1 d-block"><span class="fa fa-check mr-3"></span>Batteries</a></li>
                <li><a href="services.php" class="py-1 d-block"><span class="fa fa-check mr-3"></span>Tow Truck</a></li>
                <li><a href="services.php" class="py-1 d-block"><span class="fa fa-check mr-3"></span>Tire Change</a></li>
                <li><a href="services.php" class="py-1 d-block"><span class="fa fa-check mr-3"></span>Engine Repair</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Contact information</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon fa fa-map-marker"></span><span class="text">Nii Abose St, Accra</span></li>
	                <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+233 050 326 1998</span></a></li>
	                <li><a href="#"><span class="icon fa fa-paper-plane"></span><span class="text">fita@gmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
          <div class="col-md-6 col-lg">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Business Hours</h2>
              <div class="opening-hours">
              	<h4>Opening Days:</h4>
              	<p class="pl-3">
              		<span>Monday – Friday : 9am to 20 pm</span>
              		<span>Saturday : 9am to 17 pm</span>
              	</p>
              	<h4>Vacations:</h4>
              	<p class="pl-3">
              		<span>All Sunday Days</span>
              		<span>All Official Holidays</span>
              	</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved  <i class="fa fa-heart" aria-hidden="true"></i> 
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <!-- <script src="js/bootstrap-datepicker.js"></script> -->
  <!-- <script src="js/jquery.timepicker.min.js"></script> -->
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    // Function to extract URL parameter by name
    function getUrlParameter(name) {
      name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
      var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
      var results = regex.exec(location.search);
      return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
    };

    // Function to display SweetAlert messages
    function displaySweetAlert(icon, title, message) {
      Swal.fire({
        icon: icon,
        title: title,
        text: message
      });
    }

    // Check if message parameter is present in the URL
    var msg = getUrlParameter('msg');
    if (msg) {
      // Display SweetAlert with message info
      displaySweetAlert('info', 'Info', msg);
    }
  });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Get current date
        var currentDate = new Date();
        var year = currentDate.getFullYear();
        var month = String(currentDate.getMonth() + 1).padStart(2, '0');
        var day = String(currentDate.getDate()).padStart(2, '0');
        var minDate = year + '-' + month + '-' + day;

        // Set min attribute of the date input to current date
        document.getElementById('appointment_date').setAttribute('min', minDate);
    });
</script>

  </body>
</html>