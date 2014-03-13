<?php //include_once 'Portal_header.php'; ?>
<?php //include_once 'portal_navbar.php';?>

<!-- <p align="center">Here will be show room to search for estates.</p>  -->

<!-- NEED IF CONDITION - ONLY DISPLAY IMAGE IF IT HAS BEEN UPLOADED?ACTIVATED FROM INTERNAL PROPERTIES PAGE -->
<?php //echo "Image successfully uploaded." ?>
<!-- <img src="<//?php echo $img ?>">  -->


<?php //echo anchor('upload', 'Upload Another File!'); ?>


<?php //include_once 'Portal_footer.php';?>


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

	<header class=center>
		<h1>Golden House LLC</h1>
	</header>


	<nav class=center>
		<ul>
			<li><a href="<?php echo base_url(); ?>Home_controller">Home</a></li>
			<li><a href="<?php echo base_url(); ?>FindEstate_controller">Find Estate</a></li>
			<li><a href="<?php echo base_url(); ?>Home_controller/ContactUs">Contact Us</a></li>
			<li><a href="<?php echo base_url(); ?>Home_controller/About">About</a></li>
		</ul>
	</nav>

	
	<section class="center">
		<div class="filter">
			<form>	<!-- CHANGE INTO A 1 row TABLE (7 items), or 2x3+1? -->
				<p>
					Price <select name="price" >
						<option value="0 - 100">0 - 100,000</option>
						<option value="100 - 250">100,000 - 250,000</option>
						<option value="250 - 500">250,000 - 500,000</option>
						<option value="500 - 1000000">500,000-1,000,000</option>
						<option value="Any">Any</option>
					</select>
				</p>
				<p>
					Property Type <select name="Property Type">
						<option value="Residential">Single-family house</option>
						<option value="Estate">Multi-family house</option>
						<option value="Mansion">Apartment</option>
					</select>
				</p>
				<p>
					Location <select name="Location">
						<option value="Walnut Creek">Walnut Creek</option>
						<option value="Lafayette">Lafayette</option>
						<option value="Concord">Concord</option>
						<option value="Danville">Danville</option>
						<option value="San Ramon">San Ramon</option>
					</select>
				</p>
				<p>
					Bedrooms <select name="Bedrooms">
						<option value="1">1 +</option>
						<option value="2">2 +</option>
						<option value="3">3 +</option>
						<option value="4">4 +</option>
						<option value="5">5 +</option>
					</select>
				</p>
				<p>
					Bathrooms <select name="Bathrooms">
						<option value="1">1 +</option>
						<option value="2">2 +</option>
						<option value="3">3 +</option>
						<option value="4">4 +</option>
						<option value="5">5 +</option>
					</select>
				</p>
				<p>
					Size (sq ft) <select name="size">
						<option value="600+">600+</option>
						<option value="1000+">1000+</option>
						<option value="1400+">1400+</option>
						<option value="2000+">2000+</option>
						<option value="3000+">3000+</option> 
						<option value="4000+">4000+</option>
					</select>
				</p>
				<p>
					Year <select name="year">
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
		
		<div class="results">
		
		<table style="width:300px">
			<tr>
			  <td>Jill</td>
			  <td>Smith</td>
			  <td>50</td>
			</tr>
			<tr>
			  <td>Eve</td>
			  <td>Jackson</td>
			  <td>94</td>
			</tr>
			<tr>
			  <td>Eve</td>
			  <td>Jackson</td>
			  <td>94</td>
			</tr>
			<tr>
			  <td>Eve</td>
			  <td>Jackson</td>
			  <td>94</td>
			</tr>
			<tr>
			  <td>Eve</td>
			  <td>Jackson</td>
			  <td>94</td>
			</tr>
			<tr>
			  <td>Eve</td>
			  <td>Jackson</td>
			  <td>94</td>
			</tr>
			<tr>
			  <td>Eve</td>
			  <td>Jackson</td>
			  <td>94</td>
			</tr>
		
			</table> 
		</div>

	</section>
	<br><br>

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