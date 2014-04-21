<?php require('application/controllers/FindEstate_controller.php'); ?>

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
	    <h2>Manage properties / images  &nbsp;&nbsp;&nbsp;
	    <a style="color:black; font-size:x-small;" href="<?php echo base_url(); ?>Internal_home_controller">[&nbsp;Back to Home&nbsp;]</a></h2>
	</header>
	
	
		<!--  ******************************************    ADD PROPERTY AND SUBMIT    ****************************************** -->
	
	<section class="center">
		<div align="left" id="container">
			<!--  ******************************************    SUBMIT PROPERTY FORM     ****************************************** -->
			
			<fieldset class="margin">
			<legend>ADD PROPERTY</legend>
				<?php
					// in form_open() specify in parameter the controller that handles validation and (/)
					// its function that will handle the validation!
					// otherwise the form resubmits to the same url
				
					echo form_open ( 'Internal_properties_controller/insertProp' );
					echo validation_errors (); // print validation errors 
					echo "<p> Image path: "; echo form_input( 'image_path' ); 
					echo "<p> Sold: "; echo form_input( 'sold' ); echo " 0-not sold / 1-sold </p>";
					echo "<p> Type: "; echo form_input ( 'type' ); echo "</p>";
					echo "<p> Price: "; echo form_input ( 'price' ); echo " $</p>";
					echo "<p> Bedrooms: "; echo form_input ( 'bedrooms' ); echo "</p>";
					echo "<p> Bathrooms: "; echo form_input ( 'bathrooms' ); echo "</p>";
					echo "<p> Size: "; echo form_input ( 'size' ); echo " sq ft</p>";
					echo "<p> Year: "; echo form_input ( 'year' ); echo "</p>";
					echo "<p> Location: "; echo form_input ( 'location' ); echo "</p>";
					echo "<p> Address: "; echo form_input ( 'address' ); echo "</p>";
					echo "<p> Short description: "; echo form_textarea ( 'descrip_sh' ); echo "</p>";
					echo "<p> Long description: "; echo form_textarea ( 'descr_lo' ); echo "</p>";		
					echo "<p> Floor plan path: "; echo form_input ( 'floor_plan_path' ); echo "</p>"; 
				?>
			</fieldset>
				<?php 
					echo "<p>"; echo form_submit ( 'submit', 'Submit' ); echo "</p>";
					echo form_close ();
				?>
		</div>
	</section>
	<br>
	
	<!--  ******************************************    EDIT PROPERTY     ****************************************** -->
	
	<br>
	<section class="center">
		<div align="left" id="edit property">
			<fieldset class="margin">
			<legend>EDIT PROPERTY</legend>
				<p>Select property to edit.</p>

				<form method="post" accept-charset="utf-8" action="<?php echo base_url(); ?>Internal_properties_controller/goToEditProperties">
				<p>
					<select name="property" >
						<?php 
						
						foreach ($results as $row)
						{ ?>
							<option >
							<?php 
							echo 'id'.$row->prop_id.', '; echo $row-> sold.', '; echo $row->type.', '; echo '$'.$row->price.', '; 
							echo $row->size.'sqf, '; echo $row->year.', '; echo $row->address;
							?>
							</option>
						<?php } ?>	
					</select>
				</p>
				<input type="submit" value="Select">
				</form>
				
			</fieldset>
		</div>
	</section>
	
	<!--  ******************************************    DELETE PROPERTY     ****************************************** -->
	
	<br>
	<section class="center">
		<div align="left" id="delete property">
			<fieldset class="margin">
			<legend>DELETE PROPERTY</legend>
				<p>Select property to delete.</p>
				
		 		<form method="delete" accept-charset="utf-8" action="<?php echo base_url(); ?>Internal_properties_controller">	
				<p>
					<select name="property" >
						<?php 
						foreach ($results as $row)
						{ ?>
							<option value="selected">
							<?php 
							echo 'id'.$row->prop_id.', '; echo $row-> sold.', '; echo $row->type.', '; echo '$'.$row->price.', '; 
							echo $row->size.'sqf, '; echo $row->year.', '; echo $row->address;
							?>
							</option>
						<?php } ?>	
					</select>
				</p>
				<input type="submit" value="Delete">
				
				</form>
			</fieldset>
		</div>
	</section>
	
</body>
</html>