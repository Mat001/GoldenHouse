<!DOCTYPE (HTML)>

<html>
<head>
    <link href='http://fonts.googleapis.com/css?family=Raleway:300|Open+Sans' rel='stylesheet' type='text/css'>
    <meta charset="utf-8">
    <title>Internal Properties</title>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>css/css_internal_home.css">
</head>

<body>
	<!--  ******************************************    HEADER & BACK TO HOME LINK     ****************************************** -->
	<header class="center-ims">
	    <h2>Manage properties / images</h2> 
	</header>

	<!--  ******************************************    SUCCESS PAGE - NEW PROPERTY ADDED     ****************************************** -->
	
	<br>
	<section class="center">
		<div align="left" id="upload_image">
			<fieldset class="margin">
			<legend>SUCCESS</legend><br>
				<p>New property successfully added!</p><br>
				<a style="color:black; font-size:x-small;" href="<?php echo base_url(); ?>Internal_properties_controller">[&nbsp;Back to manage properties&nbsp;]</a>
	    		<a style="color:black; font-size:x-small;" href="<?php echo base_url(); ?>Internal_home_controller">[&nbsp;Home&nbsp;]</a>
			</fieldset>
		</div>
	</section>
</body>
</html>
