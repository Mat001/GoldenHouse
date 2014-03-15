<!DOCTYPE html>

<html>
<head>
	<link href='http://fonts.googleapis.com/css?family=Raleway:300|Open+Sans'	rel='stylesheet' type='text/css'>
	<meta charset="utf-8">
	<title>Find Estate</title>
	<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>css/css_portal_home.css">
	<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>css/css_portal_findestate.css">
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
			<li><a href="<?php echo base_url(); ?>Home_controller/ContactUs">Contact Us</a></li>
			<li><a href="<?php echo base_url(); ?>Home_controller/About">About</a></li>
		</ul>
	</nav>

											
	<!--  ******************************************    CENTER SECTION     ****************************************** -->
	<section class="center">
		
		
		<!--  ******************************************    SEARCH PARAMETERS     ****************************************** -->
											
		<div class="filter">
			<form >	
				<p>
					Price &nbsp;&nbsp;&nbsp; <select name="price" >
						<option value="0 - 100">0 - 100,000</option>
						<option value="100 - 250">100,000 - 250,000</option>
						<option value="250 - 500">250,000 - 500,000</option>
						<option value="500 - 1000000">500,000-1,000,000</option>
						<option value="Any">Any</option>
					</select>
				</p>
				<p>
					Type &nbsp;&nbsp;&nbsp; <select name="Property Type">
						<option value="Residential">Single-family house</option>
						<option value="Estate">Multi-family house</option>
						<option value="Mansion">Apartment</option>
					</select>
				</p>
				<p>
					Location &nbsp;&nbsp;&nbsp; <select name="Location">
						<option value="Walnut Creek">Walnut Creek</option>
						<option value="Lafayette">Lafayette</option>
						<option value="Concord">Concord</option>
						<option value="Danville">Danville</option>
						<option value="San Ramon">San Ramon</option>
					</select>
				</p>
				<p>
					Bedrooms &nbsp;&nbsp;&nbsp; <select name="Bedrooms">
						<option value="1">1 +</option>
						<option value="2">2 +</option>
						<option value="3">3 +</option>
						<option value="4">4 +</option>
						<option value="5">5 +</option>
					</select>
				</p>
				<p>
					Bathrooms &nbsp;&nbsp;&nbsp; <select name="Bathrooms">
						<option value="1">1 +</option>
						<option value="2">2 +</option>
						<option value="3">3 +</option>
						<option value="4">4 +</option>
						<option value="5">5 +</option>
					</select>
				</p>
				<p>
					Size (sq ft) &nbsp;&nbsp;&nbsp; <select name="size">
						<option value="600+">600+</option>
						<option value="1000+">1000+</option>
						<option value="1400+">1400+</option>
						<option value="2000+">2000+</option>
						<option value="3000+">3000+</option> 
						<option value="4000+">4000+</option>
					</select>
				</p>
				<p>
					Year &nbsp;&nbsp;&nbsp; <select name="year">
						<option value="before 1900">before 1900</option>
						<option value="1900+">1900+</option>
						<option value="1930+">1930+</option>
						<option value="1950+">1950+</option>
						<option value="1970+">1970+</option>
						<option value="1990+">1990+</option>
						<option value="2010+">2010+</option>
					</select>
				</p>

				<input type="submit" value="Search Estates">
			</form>
		</div> <!-- form div -->
		<br>
		
		
				
		<!-- *****************************    SEARCH RESULTS - FOUND PROPERTIES    *******************************-->
		<div class="results">
		
		<table>
			<tr>
			  <th rowspan="4" class="pic_align"><img src="images/1024LenevePl/1LenevePl.jpg" alt="1LenevePl.jpg"></th>
			  <td class="subrow">1024 Leneve Drive, Walnut Creek, CA</td>
			</tr>
			<tr>
			  <td>$725,000</td>
			</tr>
			<tr>
			  <td>3 bed, 2 full bath, single-family home.</td>
			</tr>
			<tr>
			  <td>FOR SALE</td>
			</tr>
			
			<tr>
			  <th rowspan="4" class="pic_align"><img src="images/1360ContraCostaDr/1ContraCostaDr.jpg" alt="1ContraCostaDr.jpg"></th>
			  <td class="subrow">936-942 Lexington Ave, Lafayette, CA</td>
			</tr>
			<tr>
			  <td>$430,000</td>
			</tr>
			<tr>
			  <td>3 bed, 2 full bath, apartment in a multi-apartment building. Quiet.</td>
			</tr>
			<tr>
			  <td>FOR SALE</td>
			</tr>
			
			<tr>
			  <th rowspan="4" class="pic_align"><img src="images/1428NavellierSt/1navellier.jpg" alt="1navellier.jpg"></th>
			  <td class="subrow">1360 Contra Costa Dr, Lafayette, CA</td>
			</tr>
			<tr>
			  <td>$800,000</td>
			</tr>
			<tr>
			  <td>4 bed, 2 full bath, single-family home.</td>
			</tr>
			<tr>
			  <td>FOR SALE</td>
			</tr>
			
			</table> 
		</div>

	</section>
	<br><br>
	
	<!-- *****************************    FOOTER    *******************************-->
	
	<footer id=footer class="center" style="clear: both; padding-top: 40px " >
		<h6>Copyright 2014 &copy; GoldenHouseLLC | 

		<?php
		$attributes = array (
		'width' => '700',
		'height' => '450',
		'scrollbars' => 'yes',
		'status' => 'yes',
		'resizable' => 'yes',
		'screenx' => '600',
		'screeny' => '250' 
		);

		echo anchor_popup ( 'Home_controller/terms', 'Terms and Conditions', $attributes );
		?> 
		| <a style="color:#8B6914" href="<?php echo base_url(); ?>Login_controller">Agency Login</a></h6>
	</footer>
</body>
</html>