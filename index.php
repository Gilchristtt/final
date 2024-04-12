<?php
include './settings/connection.php';
include './functions/get_services.php';
include './settings/core.php';
checkLogin();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Auto Repair - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
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
									<div class="text"><span>Call us</span><span>(+233)050 326 1998</span></div>
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
	        	<li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
	        	<li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
	        	<li class="nav-item"><a href="services.php" class="nav-link">Services</a></li>
	        	<li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
                <li class="nav-item"><a href="contact.php" class="nav-link">Book Now</a></li>
                <li class="nav-item"><a href="shop.php" class="nav-link">Shop</a></li>
				<li class="nav-item"><a href="login.php" class="nav-link">LogIn</a></li>
				

	         
			 
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    <div class="hero-wrap">
	    <div class="home-slider owl-carousel">
	      <div class="slider-item" style="background-image:url(images/bg_1.jpg);">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row no-gutters slider-text align-items-center justify-content-start">
		          <div class="col-md-6 ftco-animate">
		          	<div class="text w-100">
		          		<h2>We are best car repair services</h2>
			            <h1 class="mb-4">Make your car last longer</h1>
			            <p><a href="contact.php" class="btn btn-primary">Book an appointment</a></p>
		            </div>
		          </div>
		        </div>
	        </div>
	      </div>

	      <div class="slider-item" style="background-image:url(images/bg_2.jpg);">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row no-gutters slider-text align-items-center justify-content-start">
		          <div class="col-md-6 ftco-animate">
		          	<div class="text w-100">
		          		<h2>We care about your car</h2>
			            <h1 class="mb-4">It's time to come to repair your car</h1>
			            <p><a href="contact.php" class="btn btn-primary">Book an appointment</a></p>
		            </div>
		          </div>
		        </div>
	        </div>
	      </div>
	    </div>
	  </div>
		
		<section class="intro">
			<div class="container intro-wrap">
				<div class="row no-gutters">
					<div class="col-md-12 col-lg-9 bg-intro d-sm-flex align-items-center align-items-stretch">
						<div class="intro-box d-flex align-items-center">
							<div class="icon d-flex align-items-center justify-content-center">
								<i class="flaticon-repair"></i>
							</div>
							<h2 class="mb-0">Are you ready? <span>Let's repair it now!</span></h2>
						</div>
						<a href="contact.php" class="bg-primary btn-custom d-flex align-items-center"><span>Book an Appointment</span></a>
					</div>
				</div>
			</div>	
		</section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">We offer Services</span>
            <h2>Our car services</h2>
          </div>
        </div>
    		<div class="row">
          <div class="col-md-4 services ftco-animate">
			<?php
displayServicesInDifferentStructure($conn);


?>
            <!-- <div class="d-block d-flex">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-car-service"></span>
              </div>
              <div class="media-body pl-3">
                <h3 class="heading">Oil change</h3>
                <p>Ensure your engine runs smoothly with our professional oil change service. We'll replace your old, dirty oil with fresh, high-quality oil, keeping your engine lubricated and protected for optimal performance.</p>
               
              </div>
            </div> -->
            <!-- <div class="d-block d-flex">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-tyre"></span>
              </div>
              <div class="media-body pl-3">
                <h3 class="heading">Tire Change</h3>
                <p>Keep your vehicle rolling smoothly with our tire change service. Whether you need a simple tire rotation, patching, or a full tire replacement, our skilled technicians will get you back on the road quickly and safely, ensuring optimal traction and stability.</p>
             
              </div>
            </div>  -->

          </div>
          <div class="col-md-4 services ftco-animate">
            <!-- <div class="d-block d-flex">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-battery"></span>
              </div>
              <div class="media-body pl-3">
                <h3 class="heading">Batteries</h3>
                <p>Don't get stranded with a dead battery. Our experts can test your battery's health and provide replacements if needed, ensuring your vehicle starts reliably every time. Trust us for top-notch battery services and peace of mind on the road.</p>
    
              </div>
            </div>  -->
            <!-- <div class="d-block d-flex">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-car-engine"></span>
              </div>
              <div class="media-body pl-3">
                <h3 class="heading">Engine Repair</h3>
                <p>Trust our experienced mechanics to diagnose and repair any issues with your engine efficiently. From minor adjustments to major overhauls, we have the expertise and equipment to restore your engine's performance and efficiency, getting you back on the road with confidence.</p>
               
              </div>
            </div>     -->
          </div>

          <div class="col-md-4 services ftco-animate">
            <!-- <div class="d-block d-flex">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-tow-truck"></span>
              </div>
              <div class="media-body pl-3">
                <h3 class="heading">Tow Truck</h3>
                <p>When you're stuck on the roadside due to a breakdown or accident, our reliable tow truck service is just a call away. Count on our prompt assistance to safely transport your vehicle to our shop or another desired location, minimizing hassle during stressful situations.</p>
              
              </div>
            </div> -->
            <!-- <div class="d-block d-flex">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-repair"></span>
              </div>
              <div class="media-body pl-3">
                <h3 class="heading">Car Maintenance</h3>
                <p>Stay ahead of costly repairs with our comprehensive car maintenance services. From routine inspections and fluid checks to filter replacements and tune-ups, we'll help prolong the life of your vehicle and maintain its peak performance, saving you time and money in the long run.</p>
             
              </div>
            </div>        -->
          </div>
        </div>
    	</div>
    </section>
   	
    <section class="ftco-section ftco-no-pt ftco-no-pb bg-light">
    	<div class="container">
    		<div class="row d-flex no-gutters">
    			<div class="col-md-6 d-flex">
    				<div class="img img-video d-flex align-self-stretch align-items-center justify-content-center mb-4 mb-sm-0" style="background-image:url(images/about.jpg);">
    					<a href="https://vimeo.com/122316206" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
    						<span class="fa fa-play"></span>
    					</a>
    				</div>
    			</div>

    			<div class="col-md-6 pl-md-5">
    				<div class="row justify-content-start py-5">
		          <div class="col-md-12 heading-section ftco-animate">
		          	<span class="subheading">Welcome to Fita</span>
		            <h2 class="mb-4">Driving Confidence, One Repair at a Time.</h2>
		            <p>
</p>
		            <div class="tabulation-2 mt-4">
									<ul class="nav nav-pills nav-fill d-md-flex d-block">
									  <li class="nav-item mb-md-0 mb-2">
									    <a class="nav-link active py-2" data-toggle="tab" href="#home1">Our Mission</a>
									  </li>
									  <li class="nav-item px-lg-2 mb-md-0 mb-2">
									    <a class="nav-link py-2" data-toggle="tab" href="#home2">Our Vision</a>
									  </li>
									  <li class="nav-item">
									    <a class="nav-link py-2 mb-md-0 mb-2" data-toggle="tab" href="#home3">Our Value</a>
									  </li>
									</ul>
									<div class="tab-content rounded mt-2">
									  <div class="tab-pane container p-0 active" id="home1">
									  	<p>Our mission is to keep your vehicle running smoothly and safely while providing top-notch customer service.</p>
									  </div>
									  <div class="tab-pane container p-0 fade" id="home2">
									  	<p> Our vision is to become the trusted destination for all automotive needs, providing unparalleled quality, convenience, and customer satisfaction. We aspire to be the go-to resource for drivers seeking reliable, efficient, and affordable solutions for their vehicles.</p>
									  </div>
									  <div class="tab-pane container p-0 fade" id="home3">
									  	<p>We are dedicated to providing unparalleled service, rooted in quality, integrity, reliability, and customer focus. Our commitment to excellence ensures that every interaction is marked by honesty, transparency, and fair pricing. With skilled technicians and stringent quality controls, we deliver dependable solutions, prioritizing customer needs and satisfaction at every step. Trust us to keep your vehicle running smoothly and your experience hassle-free.</p>
									  </div>
									</div>
								</div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>

    <section class="ftco-counter" id="section-counter">
    	<div class="container">
				<div class="row">
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="45">0</strong>
              </div>
              <div class="text">
              	<span>Years of Experienced</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="8500">0</strong>
              </div>
              <div class="text">
              	<span>Project completed</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="2342">0</strong>
              </div>
              <div class="text">
              	<span>Happy Customers</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="30">0</strong>
              </div>
              <div class="text">
              	<span>Award Winning</span>
              </div>
            </div>
          </div>
        </div>
    	</div>


    <section class="ftco-section testimony-section bg-light">
		<div class="container">
		  <div class="row justify-content-center pb-5 mb-3">
			<div class="col-md-7 heading-section heading-section-white text-center ftco-animate">
			  <span class="subheading">Testimonies</span>
			  <h2>Happy Clients &amp; Feedbacks</h2>
			</div>
		  </div>
		  <div class="row ftco-animate">
			<div class="col-md-12">
			  <div class="carousel-testimony owl-carousel ftco-owl">
				<div class="item">
				  <div class="testimony-wrap py-4">
					<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
					<div class="text">
					  <p class="mb-4">Been taking my car to Fita for years. They're always honest and upfront about repairs. Highly recommend!</p>
					  <div class="d-flex align-items-center">
						<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
						<div class="pl-3">
						  <p class="name">Roger Scott</p>
						</div>
					  </div>
					</div>
				  </div>
				</div>
				<div class="item">
				  <div class="testimony-wrap py-4">
					<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
					<div class="text">
					  <p class="mb-4">So glad I found Fita. They fixed my brakes quickly and at a fair price. Will definitely be back!</p>
					  <div class="d-flex align-items-center">
						<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
						<div class="pl-3">
						  <p class="name">Jeffrey Churchill</p>
						</div>
					  </div>
					</div>
				  </div>
				</div>
				<div class="item">
				  <div class="testimony-wrap py-4">
					<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
					<div class="text">
					  <p class="mb-4">The online appointment booking on Fita's website is so convenient! Saved me a lot of time.</p>
					  <div class="d-flex align-items-center">
						<div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
						<div class="pl-3">
						  <p class="name">Michael K.</p>
						</div>
					  </div>
					</div>
				  </div>
				</div>
	  
				</div>
			</div>
		  </div>
		</div>
	  </section>
	  
		
		<section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">News &amp; Blog</span>
            <h2>Latest news from our blog</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.php" class="block-20 rounded" style="background-image: url('images/image_1.jpg');">
              </a>
              <div class="text mt-3">
              	<div class="posted mb-3 d-flex">
              		<div class="img author" style="background-image: url(images/person_2.jpg);"></div>
              		<div class="desc pl-3">
              			<span>Posted by John doe</span>
              			<span>24 February 2020</span>
              		</div>
              	</div>
                <h3 class="heading"><a href="blog-single.php">Reasons why your car needs regular servicing.</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.php" class="block-20 rounded" style="background-image: url('images/image_2.jpg');">
              </a>
              <div class="text mt-3">
              	<div class="posted mb-3 d-flex">
              		<div class="img author" style="background-image: url(images/person_3.jpg);"></div>
              		<div class="desc pl-3">
              			<span>Posted by John doe</span>
              			<span>24 February 2020</span>
              		</div>
              	</div>
                <h3 class="heading"><a href="blog-double.php">Best maintenance practices for your car</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.php" class="block-20 rounded" style="background-image: url('images/image_3.jpg');">
              </a>
              <div class="text mt-3">
              	<div class="posted mb-3 d-flex">
              		<div class="img author" style="background-image: url(images/person_1.jpg);"></div>
              		<div class="desc pl-3">
              			<span>Posted by John doe</span>
              			<span>24 February 2020</span>
              		</div>
              	</div>
                <h3 class="heading"><a href="blog-triple.php">Tips for a healthy car engine</a></h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Price &amp; Plans</span>
            <h2>Pricing</h2>
          </div>
        </div>
    		<div class="row">
				<?php
				
				displayServices($conn);

				?>

    			<!-- <div class="col-md-6 col-lg-3 ftco-animate">
	          <div class="block-7">
	            <div class="text-center">
            	<span class="excerpt d-block">First PMS</span>
	            <span class="price"><sup>$</sup> <span class="number">78.98</span></span>
	            
	            <div class="pricing-text">
	              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
	            </div>

	            <a href="#" class="btn btn-secondary d-block px-2 py-3">Get Started</a>
	            </div>
	          </div>
	        </div> -->
	        <!-- <div class="col-md-6 col-lg-3 ftco-animate">
	          <div class="block-7">
	            <div class="text-center">
            	<span class="excerpt d-block">Engine Diagnostics</span>
	            <span class="price"><sup>$</sup> <span class="number">83.75</span></span>
	            
	            <div class="pricing-text">
	              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
	            </div>

	            <a href="#" class="btn btn-secondary d-block px-2 py-3">Get Started</a>
	            </div>
	          </div>
	        </div> -->
	        <!-- <div class="col-md-6 col-lg-3 ftco-animate">
	          <div class="block-7">
	            <div class="text-center">
            	<span class="excerpt d-block">Tow Truck</span>
	            <span class="price"><sup>$</sup> <span class="number">85.00</span></span>
	            
	            <div class="pricing-text">
	              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
	            </div>

	            <a href="#" class="btn btn-secondary d-block px-2 py-3">Get Started</a>
	            </div>
	          </div>
	        </div> -->
	        <!-- <div class="col-md-6 col-lg-3 ftco-animate">
	          <div class="block-7">
	            <div class="text-center">
            	<span class="excerpt d-block">Car Wash</span>
	            <span class="price"><sup>$</sup> <span class="number">30.50</span></span>
	            
	            <div class="pricing-text">
	              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
	            </div>

	            <a href="#" class="btn btn-secondary d-block px-2 py-3">Get Started</a>
	            </div>
	          </div>
	        </div> -->
	      </div>
    	</div>
    </section>

    
    <footer class="footer ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 col-lg">
            <div class="ftco-footer-widget mb-4">
              <h2 class="logo"><a href="">Fita<span>.</span></a></h2>
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
                <li><a href="#" class="py-1 d-block"><span class="fa fa-check mr-3"></span>Oil Change</a></li>
                <li><a href="#" class="py-1 d-block"><span class="fa fa-check mr-3"></span>Batteries</a></li>
                <li><a href="#" class="py-1 d-block"><span class="fa fa-check mr-3"></span>Tow Truck</a></li>
                <li><a href="#" class="py-1 d-block"><span class="fa fa-check mr-3"></span>Tire Change</a></li>
                <li><a href="#" class="py-1 d-block"><span class="fa fa-check mr-3"></span>Engine Repair</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Contact information</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon fa fa-map-marker"></span><span class="text">Nii Abose St, Accra</span></li>
	                <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+233 050 3261 998</span></a></li>
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
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> 
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
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>