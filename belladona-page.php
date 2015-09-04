<?php
/**
 * Template Name: Belladona Home Page
 * @package WordPress
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Belladona HealthCare Services</title>
    <?php
    	$css_files = array('bootstrap.min.css', 'font-awesome.min.css', 'main.css', 'animate.css', 'responsive.css');
    	$css_file = '';
    	foreach($css_files as $css_file){
    		print '<link href="'.get_template_directory_uri().'/belladona_template_files/css/'.$css_file.'" rel="stylesheet">';
    	}
    ?>
    <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
    <![endif]--> 
</head><!--/head-->

<body class="container">
	<header id="header" role="banner">		
		<div class="main-nav">
			<div class="container">
				<div class="header-top"></div> 
		        <div class="row">	        		
		            <div class="navbar-header">
		                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		                    <span class="sr-only">Toggle navigation</span>
		                    <span class="icon-bar"></span>
		                    <span class="icon-bar"></span>
		                    <span class="icon-bar"></span>
		                </button>
		                <a class="navbar-brand" href="index.html">
		                	<img class="img-responsive img-rounded hidden-xs" src="http://www.belladonnahealthcare.com/assets/images/logo.png" alt="logo">
		                	<img class="img-responsive visible-xs" src="http://www.belladonnahealthcare.com/assets/images/logo.png" alt="logo">
		                </a>                    
		            </div>
		            <div class="collapse navbar-collapse">
		                <ul class="nav navbar-nav navbar-right">                 
		                    <li class="scroll active"><a href="#home">Home</a></li>
		                    <li class="scroll"><a href="#about">About Us</a></li>
    						<li class="scroll"><a href="#pharmacies-and-clinics">Pharmacies & Clinics</a>
    						<li class="scroll"><a href="#health-information">Health Information</a>
    						<li class="scroll"><a href="#b">Buy</a>
    						<li class="scroll"><a href="#reach-us">Contact Us</a></li>
		                </ul>
		            </div>
		        </div>
	        </div>
        </div>                 
    </header>
    <!--/#header--> 

    <section id="home">
    	<div id="xs-main-slider" class="carousel slide visible-xs" data-ride="carousel">
			<div class="carousel-inner">
				<div class="item active">
					<img class="img-responsive xs-slider-img" src="images/slider/bg1.jpg" alt="slider">		
					<div class="carousel-caption col-md-8 col-sm-10 col-xs-10">
						<h2>Belladona HealthCare services </h2>
						<h4>Healthcare you can trust</h4>
					</div>
				</div>
			</div>
		</div>

		<div id="main-slider" class="carousel slide carousel-fade hidden-xs" data-ride="carousel">
			<div class="carousel-inner carousel">
				<div class="item active">
					<img class="img-responsive" src="<?php echo get_template_directory_uri()?>/belladona_template_files/images/slider/bg1.jpg" alt="slider">						
					<div class="carousel-caption col-md-8 col-sm-10 col-xs-10">
						<h2>Belladona HealthCare services </h2>
						<h4>Healthcare you can trust</h4>
					</div>
				</div>		

				<div class="item">
					<img class="img-responsive" src="<?php echo get_template_directory_uri()?>/belladona_template_files/images/slider/bg2.jpg" alt="slider">						
					<div class="carousel-caption col-md-8 col-sm-10 col-xs-10">
						<h2>Belladona HealthCare services </h2>
						<h4>Healthcare you can trust</h4>
					</div>
				</div>

				<div class="item">
					<img class="img-responsive" src="<?php echo get_template_directory_uri()?>/belladona_template_files/images/slider/bg3.jpg" alt="slider">						
					<div class="carousel-caption col-md-8 col-sm-10 col-xs-10">
						<h2>Belladona HealthCare services </h2>
						<h4>Healthcare you can trust</h4>
					</div>
				</div>

				<div class="item">
					<img class="img-responsive" src="<?php echo get_template_directory_uri()?>/belladona_template_files/images/slider/slide6.jpg" alt="slider">						
					<div class="carousel-caption col-md-8 col-sm-10 col-xs-10">
						<h2>Belladona HealthCare services </h2>
						<h4>Healthcare you can trust</h4>
					</div>
				</div>

				<div class="item">
					<img class="img-responsive" src="<?php echo get_template_directory_uri()?>//images/slider/slide7.jpg" alt="slider">						
					<div class="carousel-caption col-md-8 col-sm-10 col-xs-10">
						<h2>Belladona HealthCare services </h2>
						<h4>Healthcare you can trust</h4>
					</div>
				</div>

				<div class="item">
					<img class="img-responsive" src="<?php echo get_template_directory_uri()?>/belladona_template_files/images/slider/bg4.jpg" alt="slider">						
					<div class="carousel-caption col-md-8 col-sm-10 col-xs-10">
						<h2>Belladona HealthCare services </h2>
						<h4>Healthcare you can trust</h4>
					</div>
				</div>x
			</div>
		</div>	
    </section>
	<!--/#home-->

	<!--
	<section id="about">
		<div class="guitar2">				
			<img class="img-responsive" src="http://www.centuracollege.edu/blog/wp-content/uploads/2013/11/Medical-Assisting-11-6-2013.jpg" alt="guitar">
		</div>
		<div class="about-content">					
			<h2>About Belladona HealthCare Services</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>

			<button class="btn btn-info">Get Online Prescription</button>
		</div>
	</section><!--/#about-->

	<section id="pharmacies-and-clinics" class="" style="margin-top:-10px;">
		<div class="container-fluid">
			<div class="col-md-5">					
				<h2>Our Clinics</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
				<a href="#" class="btn btn-red">Visit our clinics and pharmacies</a>
			</div>

			<div class="col-md-3">					
				<h2>Business Hours</h2>
				<p>We are open 24hrs a day from Monday to Sunday(including Holidays)</p>
				<a href="#" class="btn btn-red">Online prescription request</a>
			</div>

			<div class="col-md-4">					
				<h2>Find a Doctor Online</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>	
			</div>
		</div>
	</section><!--/#pharmacies-and-clinics-->

	<section id="reach-us">
		<div class="container-fluidd top-10">
			<div class="col-md-12"><h2 style="color:#1C4A1F;" class="text text-left">Contact Us</h2></div>
			<div class="reach-us-content col-md-4">		
				<h4>Address</h4>
				<p>Belladonna Village Market Pharmacy & Clinic</p>
				<p>Village Market Shopping Complex | Gigiri | Limuru Road</p>
				<p>P.O. Box 602 – 00621 Village Market | Nairobi | Kenya</p>
			<!--</div>

			<div class="reach-us-content col-md-2">-->
				
			</div>

			<div class="reach-us-content col-md-3">
			    <h4>Email</h4>
			    <p>pharmacy@belladonnahealthcare.com</p>
			    <p>delivery@belladonnahealthcare.com</p>
			    <p>doctor@belladonnahealthcare.com</p>
			</div>

			<div class="reach-us-content col-md-4 col-md-offset-1">
			    <h4>Call Us</h4>
			    <span>+254 (0)20 7122141/7, </span>
			    <span>+254 711 122 147, </span>
			    <span>+254 738 996 104</span>

			    <h4>Quick Email</h4>
			    <a href="">drop us a quick email</a>
			</div>
		</div>
	</section><!-- reach-us -->
	
    <footer id="footer">
        <div class="container">
            <div class="text-center">
                <p> Copyright © 2015 Belladonna Healthcare Services. All rights reserved.</p>                
            </div>
        </div>
    </footer>
    <!--/#footer-->
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <?php
    	$js_files = array('jquery.js',
    	                   'bootstrap.min.js',
    	                   'gmaps.js',
    	                   'smoothscroll.js',
    	                   'coundown-timer.js',
    	                   'jquery.scrollTo.js',
    	                   'jquery.nav.js',
    	                   'main.js',
    	                   'jquery.parallax.js');
    	$js_file = '';
    	foreach($js_files as $js_file){
    		print '<script type="text/javascript" src="'.get_template_directory_uri().'/belladona_template_files/js/'.$js_file.'"></script>';
    	}
    ?>

    <script type="text/javascript">
    	//$(window).resize(function(){location.reload();});
    	$( document ).ready(function() {
		    $('.main-nav').width($('.container').width());
		});
    </script>
</body>
</html>