<!DOCTYPE (HTML)>

<html>
<head>
    <link href='http://fonts.googleapis.com/css?family=Raleway:300|Open+Sans' rel='stylesheet' type='text/css'>
    <meta charset="utf-8">
    <title>Golden House Internal</title>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>css/css_internal_home.css">
</head>
<body>
	<!--  ******************************************    HEADER     ****************************************** -->
	<header class="center-ims">
	    <h2>Manage properties / images</h2>
	</header>
	
	<!--  ******************************************    UPLOAD IMAGE     ****************************************** -->
	<div align="center" id="upload_image">
		<?php echo $error;?>
	
		<?php echo form_open_multipart('Internal_properties_controller/uploadImages');?>
		<input type="file" name="userfile" size="20" />
		<input type="submit" value="upload" />
	</div>

</body>
</html>