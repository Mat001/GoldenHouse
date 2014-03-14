<!DOCTYPE html>
<html>
<head>
    <link href='http://fonts.googleapis.com/css?family=Raleway:300|Open+Sans' rel='stylesheet' type='text/css'>
    <meta charset="utf-8">
    <title>Golden House Real Estate</title>
     <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>css/css_portal_home.css">
</head>

<body>
	<!--  ******************************************    HEADER     ****************************************** -->
    <header class="center">
        <h1>Golden House LLC</h1>
    </header>       
    
	<!--  ******************************************    NAVIGATION TABS     ****************************************** -->
    <nav class="center">
	<ul>
		<li><a href="<?php echo base_url(); ?>Home_controller">Home</a></li>
		<li><a href="<?php echo base_url(); ?>FindEstate_controller">Find Estate</a></li>
		<li><a href="<?php echo base_url(); ?>Home_controller/ContactUs">Contact Us</a></li>
		<li><a href="<?php echo base_url(); ?>Home_controller/About">About</a></li>
	</ul>
    </nav>
	
	<!--  ******************************************    IMAGE     ****************************************** -->
    <section>
        <img src="images/homepage6_img.jpg" class="center" width="50%" alt="Homepage image of a house, homepage6_img.jpg">
    </section>
    
    
    <!--  ******************************************    FOOTER     ****************************************** -->
    <footer id=footer class="center">
        <h6>Copyright 2014 &copy; GoldenHouseLLC  |  
        
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
    <!-- style="color:black;" -->
</body>
</html>