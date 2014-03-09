<?php include_once 'Portal_header.php'; ?>
<?php include_once 'portal_navbar.php';?>

<p align="center">Here will be show room to search for estates.</p>

<!-- NEED IF CONDITION - ONLY DISPLAY IMAGE IF IT HAS BEEN UPLOADED?ACTIVATED FROM INTERNAL PROPERTIES PAGE -->
<?php echo "Image successfully uploaded." ?>
<img src="<?php echo $img ?>"> 
  
 
<?php echo anchor('upload', 'Upload Another File!'); ?>


<?php include_once 'Portal_footer.php';?>