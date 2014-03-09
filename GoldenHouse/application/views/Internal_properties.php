<!DOCTYPE (HTML)>

<html>
<head>

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/internal_navtabs.css">
<!-- <script type="text/javascript" src="js/jquery-2.1.0.min.js"></script>  -->
<!-- <script type="text/javascript" src="js/bootstrap.js"></script>  -->
<!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.css">  -->

</head>
<body>

<h2 align="center">Manage properties / upload images</h2>

<div align="center" id="upload_image">

<?php echo $error;?>

	<?php echo form_open_multipart('Internal_properties_controller/uploadImages');?>
	<input type="file" name="userfile" size="20" />
	<input type="submit" value="upload" />
</form>
</div>

</body>
</html>