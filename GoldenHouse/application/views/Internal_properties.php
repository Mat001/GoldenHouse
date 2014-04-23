<?php require('application/controllers/FindEstate_controller.php'); ?>

<!DOCTYPE (HTML)>

<html>
<head>
<link
	href='http://fonts.googleapis.com/css?family=Raleway:300|Open+Sans'
	rel='stylesheet' type='text/css'>
<meta charset="utf-8">
<title>Internal Properties</title>
<link type="text/css" rel="stylesheet"
	href="<?php echo base_url(); ?>css/css_internal_home.css">
</head>

<body>
	<!--  ******************************************    HEADER & BACK TO HOME LINK     ****************************************** -->
	<header class="center-ims">
		<h2>
			Manage properties / images &nbsp;&nbsp;&nbsp; <a
				style="color: black; font-size: x-small;" href="<?php echo base_url(); ?>Internal_home_controller">[&nbsp;Back to Home&nbsp;]</a>
		</h2>
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
					echo "<br>Image file path: "; echo form_input( 'image_path' );
					echo "<br> Sold: "; echo form_input( 'sold' ); echo " 0-not sold / 1-sold ";
					$options = array(
							'Single-family house'  => 'Single-family house',
							'Multi-family house'    => 'Multi-family house',
							'Apartment'   => 'Apartment');
					echo "<br> Type: "; echo form_dropdown('type', $options);
					
					echo "<br> Price: "; echo form_input ( 'price' ); echo " $";
					echo "<br> Bedrooms: "; echo form_input ( 'bedrooms' ); 
					echo "<br> Bathrooms: "; echo form_input ( 'bathrooms' );
					echo "<br> Size: "; echo form_input ( 'size' ); echo " sq ft";
					echo "<br> Year: "; echo form_input ( 'year' ); 
					$options = array(
							'Walnut Creek'  => 'Walnut Creek',
							'Lafayette'    => 'Lafayette',
							'Concord'   => 'Concord',
							'Richmond'   => 'Richmond',
							'San Ramon'   => 'San Ramon');
					echo "<br> Location: "; echo form_dropdown('location', $options);
					
					echo "<br> Address: "; echo form_input ( 'address' ); 
					$data_sh = array('name' => 'descrip_sh', 'rows' => 6, 'cols' => 40);
					echo "<br> Short description: "; echo form_textarea (  $data_sh );
					$data_lo = array('name' => 'descr_lo', 'rows' => 6, 'cols' => 40);
					echo "<br> Long description: "; echo form_textarea ( $data_lo ); 		
					echo "<br> Floor plan path: "; echo form_input ( 'floor_plan_path' );  
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

				<form method="post" accept-charset="utf-8"
					action="<?php echo base_url(); ?>Internal_properties_controller/goToEditProperties">
					<p>
						<select name="property">
						<?php 
						
						foreach ($results as $row)
						{ ?>
							<option>
								<?php 
								echo 'id'.$row->prop_id.', '; echo $row-> sold.', '; echo $row->type.', '; echo '$'.$row->price.', '; 
								echo $row->size.'sqf, '; echo $row->year.', '; echo $row->address;
								?>
							</option>
						<?php } ?>	
					</select>
					</p>
					<input type="submit" value="Select to edit">
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

				<form method="post" accept-charset="utf-8" action="<?php echo base_url(); ?>Internal_properties_controller/deleteProperty">
					<p>
						<select name="property">
						<?php 
						foreach ($results as $row)
						{ ?>
							<option value="<?php echo $row->prop_id ?>">
								<?php 
								echo 'id'.$row->prop_id.', '; echo $row-> sold.', '; echo $row->type.', '; echo '$'.$row->price.', '; 
								echo $row->size.'sqf, '; echo $row->year.', '; echo $row->address;
								?>
							</option>
						<?php } ?>	
					</select>
					</p>
					<input type="submit" name="deletePropertyFormVar" value="Delete">

				</form>
			</fieldset>
		</div>
	</section>

</body>
</html>