<!DOCTYPE html>

<html>
<head>
	<link href='http://fonts.googleapis.com/css?family=Raleway:300|Open+Sans'	rel='stylesheet' type='text/css'>
	<meta charset="utf-8">
	<title>Find Estate</title>
	<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>css/css_portal_home.css">
	<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>css/css_portal_findestate.css">
	<script type="text/javascript" src="js/popUpTerms.js"></script>
</head>

<body>
	<!--  ******************************************    HEADER     ****************************************** -->
	<header class=center>
		<h1>Golden House LLC</h1>
	</header>

	<!--  ******************************************    NAVIGATION     ****************************************** -->
	<nav class=center>
		<ul>
			<li><a href="<?php echo base_url(); ?>Home_controller">Home</a></li>
			<li><a href="<?php echo base_url(); ?>FindEstate_controller">Find Estate</a></li>
			<li><a href="<?php echo base_url(); ?>ContactUs_controller">Contact Us</a></li>
			<li><a href="<?php echo base_url(); ?>About_controller">About</a></li>
		</ul>
	</nav>

											
	<!--  ******************************************    CENTER SECTION     ****************************************** -->
	<section class="center">
		
		
		<!--  ******************************************    SEARCH PARAMETERS     ****************************************** -->
											
		<div class="filter">
			<form method="post" accept-charset="utf-8" action="<?php echo base_url(); ?>FindEstate_controller/findEstates">	
				<p>
					Price &nbsp;&nbsp;&nbsp; $<select name="price" >
						<option value="--">--</option>
						<option value="0">0 - 100,000</option>
						<option value="100">100,000 - 250,000</option>
						<option value="250">250,000 - 500,000</option>
						<option value="500">500,000-1,000,000</option>
						<option value="1000">1,000,000 +</option>
					</select>
				</p>
				<p>
					Type &nbsp;&nbsp;&nbsp; <select name="type">
						<option value="--">--</option>
						<option value="Single-family house">Single-family house</option>
						<option value="Multi-family house">Multi-family house</option>
						<option value="Apartment">Apartment</option>
					</select>
				</p>
				<p>
					Location &nbsp;&nbsp;&nbsp; <select name="location">
						<option value="--">--</option>
						<option value="Walnut Creek">Walnut Creek</option>
						<option value="Lafayette">Lafayette</option>
						<option value="Concord">Concord</option>
						<option value="Richmond">Richmond</option>
						<option value="San Ramon">San Ramon</option>
					</select>
				</p>
				<input type="submit" value="Search Estates">
				
			</form>
		</div> 
		<br>
		
				
		<!-- *****************************    SEARCH RESULTS - FOUND PROPERTIES    *******************************-->
		<div class="image">
			<h2>FIND YOUR DREAM HOME</h2>
		
			<img src="images/homepage2_img.jpg" alt="FindEstate image of a house, homepage2_img.jpg">
		</div>
	</section>

	<br><br>
	
	<!-- *****************************    FOOTER    *******************************-->
	
	<footer id=footer class="center" style="clear: both; padding-top: 40px " >
		<h6>
	    	<!-- GoldenHouse LLC -->
	        Copyright 2014 &copy; GoldenHouseLLC  |  
        			
	        <!-- Terms and Conditions popup -->
			<a style="color:#8B6914" href="<?php echo base_url(); ?>Home_controller/terms" 
			   onclick="return popUpTerms('<?php echo base_url(); ?>Home_controller/terms')">Terms and Conditions</a>  |
					
			<!-- Agency Login -->
	        <a style="color:#8B6914" href="<?php echo base_url(); ?>Login_controller">Agency Login</a> 		
        </h6>
	</footer>
</body>
</html>