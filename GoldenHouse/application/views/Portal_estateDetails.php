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
		<!-- <a style="color:black; font-size:small;" href="<?//php echo base_url(); ?>FindEstate_controller/estateListing">&nbsp;Back to listings&nbsp;</a> --> 
		<!-- Simulate back button with jvascript. I didn't know at this point how to do it properly - to put URL to go back to property listings 
		to retain listings data --><!-- Would probably need to use sessions -->
		<a style="color:black; font-size:small;" href="Portal_estateListing.php" onClick="history.back();return false;">&nbsp;Back to listings&nbsp;</a> 
	</div>
	<br>	
		<!-- *****************************    SEARCH RESULTS - FOUND PROPERTIES    *******************************-->
		<div class="results">
		
		
		<?php // get id of the property that was clicked on on the listings page 
		$property_id = $_POST['prop_id']; ?>
		
		<?php 
		$duplicate = 0;
		foreach ($results as $row)
		{ 
			// display details only of that property of which id matches the property_id from clicked property on previous page (listings)
			// display images of that property
			if($property_id == $row->prop_id)
			{
				if($row->prop_id !== $duplicate)
				{
				?>
					<h3>Property details</h3><br>
					<p>Address | <span style="font-weight: lighter; font-size: small;"><?php echo $row->address; ?></span></p>
					<p>Type   |   <span style="font-weight: lighter; font-size: small;"><?php echo $row->type; ?></span></p>
					<p>Size   |   <span style="font-weight: lighter; font-size: small;"><?php echo $row->size; ?> sq ft</span></p>
					<p>Year   |   <span style="font-weight: lighter; font-size: small;"><?php echo $row->year; ?></span></p>
					<br><p>Additional description</p><span style="font-weight: lighter; font-size: small;"><?php echo $row->descr_lo; ?></span>
					<p>Floor plan</p><img src="<?php echo base_url().($row->floor_plan_path) ?>" alt="<?php echo base_url().($row->floor_plan_path) ?>">
					<p>Images</p>
				<?php 
				} ?>
				<img src="<?php echo base_url().($row->img_path) ?>" alt="<?php echo ($row->img_path) ?>">
			
			<?php $duplicate= $row->prop_id;
			}
		} ?>	
	
		</div>
	</section>
	<br><br>
	
	
	<!-- *****************************    FOOTER    *******************************-->
	
	<footer id=footer class="center" style="clear: both; padding-top: 40px " >
		<h6>
	    	<!-- GoldenHouse LLC -->
	        Copyright 2014 &copy; GoldenHouseLLC    
        			
	        <!-- Terms and Conditions popup -->
			<!-- <a style="color:#8B6914" href="<?php //echo base_url(); ?>Home_controller/terms"  
			   onclick="return popUpTerms('<?php //echo base_url(); ?>Home_controller/terms')">Terms and Conditions</a>  | -->
					
			<!-- Agency Login -->
	        <!-- <a style="color:#8B6914" href="<?php //echo base_url(); ?>Login_controller">Agency Login</a>  --> 		
        </h6>
	</footer>
</body>
</html>