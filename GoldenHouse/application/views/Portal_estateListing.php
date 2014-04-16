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
		
	<div class="filter">
		<a style="color:black; font-size:small;" href="<?php echo base_url(); ?>FindEstate_controller">&nbsp;New search&nbsp;</a>
	</div>
	<br>	
		<!-- *****************************    SEARCH RESULTS - FOUND PROPERTIES    *******************************-->
		<div class="results">
		
		<?php 
		
		
		// when findEstates() function has been used (Search Estates button clicked), then execute the loop and show list of properties
		foreach ($results as $row)
		{
		?>
			<table>
				<tr> <!-- fetch image path from database and use it to open the corresponding image file -->
				  <th rowspan="4" class="pic_align"><img src="<?php echo base_url().($row->image_path) ?>" alt="<?php echo base_url().($row->image_path) ?>"></th>
				  <td class="subrow"><?php echo $row->address;?></td>
				</tr>
				<tr>
				  <td>$<?php echo $row->price; ?></td>
				</tr>
				<tr>
				  <td><?php echo $row->bedrooms; ?> bedrooms, <?php echo $row->bathrooms; ?> bathrooms, <?php echo $row->type; ?>.</td>
				</tr>
				<tr>
				  <td><?php if($row->sold == 0)  
				  {echo '<span style="color: green; font-size:medium;">FOR SALE</span>';} 
				  else { echo '<span style="color: red; font-size:medium; font-weight:bold">SOLD</span>'; }?></td>
				</tr>
			</table>
		<?php } ?>
			 
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