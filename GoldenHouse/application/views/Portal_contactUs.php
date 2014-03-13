<?php //include_once 'Portal_header.php';?>	
<?php //include_once 'portal_navbar.php';?>
<!-- 
<center>
	<h3>Contact Us</h3>
	<h4>
		111 Lakewood Ave<br>
	</h4>
	<h4>
		Walnut Creek, CA 94000<br> <br>
	</h4>
	<h4>+1 925 222 3333 (tel)</h4>
	<h4>+1 925 444 5555 (fax)</h4>
	<h4>info@goldenhouse.com</h4>
</center>
 -->
<?php //include_once 'Portal_footer.php';?>


<!DOCTYPE html>

<html>
<head>
    <link href='http://fonts.googleapis.com/css?family=Raleway:300|Open+Sans' rel='stylesheet' type='text/css'>
    <meta charset="utf-8">
    <title>Contact Golden House</title>
     <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>css/css_portal_home.css">
      <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>css/css_portal_contactus.css">  
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

    <center>
    <figure>
        <img src="<?php echo base_url(); ?>images/GoldenHouseMap.png" width="40%" alt="Golden House location map">        
    </figure>
    </center>
    
    <section class=center>
    <h2>Contact Us</h2>
	<h4>111 Lakewood Ave <br>
        Walnut Creek, CA 94000</h4>
	
	<h4>+1 925 222 3333 (tel)</h4>
	<h4>+1 925 444 5555 (fax)</h4>
	<h4>info@goldenhouse.com</h4>
    </section>
    

     
     
	
   		<footer class=center> 
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
    
</body>
</html>
