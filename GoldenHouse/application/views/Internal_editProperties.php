<?php require('application/controllers/FindEstate_controller.php'); ?>

<!DOCTYPE (HTML)>

<html>
<head>
    <link href='http://fonts.googleapis.com/css?family=Raleway:300|Open+Sans' rel='stylesheet' type='text/css'>
    <meta charset="utf-8">
    <title>Edit properties</title>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>css/css_internal_home.css">
</head>

<body>
	<!--  ******************************************    HEADER & BACK TO HOME LINK     ****************************************** -->
	<header class="center-ims">
	    <h2>Edit properties  &nbsp;&nbsp;&nbsp;
	    <a style="color:black; font-size:x-small;" href="<?php echo base_url(); ?>Internal_properties_controller">[&nbsp;Back&nbsp;]</a>
	    <a style="color:black; font-size:x-small;" href="<?php echo base_url(); ?>Internal_home_controller">[&nbsp;Home&nbsp;]</a></h2>
	</header>
	
	
		<!--  ******************************************    ADD PROPERTY AND SUBMIT    ****************************************** -->
	
	<section class="center">
		<div align="left" id="container">
			<!--  ******************************************    EDIT PROPERTY     ****************************************** -->
			
			<fieldset class="margin">
			<legend>EDIT PROPERTY</legend>
			
				<?php
				$duplicate=0;
				// this form should UPDATE !
				$selected = $_POST['property'];	// this is row that was selected in the dropdown
				
				if(substr($selected, 3,1) == ',') // get prop_id from the whole row
					{ $selected = substr($selected, 2,1); }	// single digit
				else 
					{ $selected = substr($selected, 2,2); } // two digits, allows to store up to 99 properties
				
				
				foreach($results as $row)
				{
					
					if($selected == $row->prop_id)	
					{
						if($row->prop_id !== $duplicate) // take into the loop only distinct properties (some are repeating because of the left join)
						{?>
						<!-- method must be get for the form data to be picked up by updateProp() function in cinternal_properties_ontroller -->
						<form method="get" action="<?php echo base_url(); ?>Internal_properties_controller/updateProp"><br>
							<span style="font-weight: lighter; font-size: medium;"> <?php echo 'Property id (read only):'; ?></span>
								<input type="text" name="prop_id" value="<?php echo $row->prop_id ?>" readonly/><br>
								
							<span style="font-weight: lighter; font-size: medium;"> <?php echo 'Image file path:'; ?></span>
								<input type="text" name="image_path" value="<?php echo $row->image_path ?>"/><br>
								
							<span style="font-weight: lighter; font-size: medium;"> <?php echo 'Sold:'; ?></span>
								<input type="text" name="sold" value="<?php echo $row->sold ?>"/>
								
								<?php 
								$options = array(
											'Single-family house'  => 'Single-family house',
											'Multi-family house'    => 'Multi-family house',
											'Apartment'   => 'Apartment');
								echo "<br> Type: "; echo form_dropdown('type', $options, $row->type); ?><br>
										
							<span style="font-weight: lighter; font-size: medium;"> <?php echo 'Price:'; ?></span>
								<input type="text" name="price" value="<?php echo $row->price ?>"/><br>
								
							<span style="font-weight: lighter; font-size: medium;"> <?php echo 'Bedrooms:'; ?></span>
								<input type="text" name="bedrooms" value="<?php echo $row->bedrooms ?>"/><br>
								
							<span style="font-weight: lighter; font-size: medium;"> <?php echo 'Bathrooms:'; ?></span>
								<input type="text" name="bathrooms" value="<?php echo $row->bathrooms ?>"/><br>
								
							<span style="font-weight: lighter; font-size: medium;"> <?php echo 'Size:'; ?></span>
								<input type="text" name="size" value="<?php echo $row->size ?>"/><br>
								
							<span style="font-weight: lighter; font-size: medium;"> <?php echo 'Year:'; ?></span>
								<input type="text" name="year" value="<?php echo $row->year ?>"/>
								
								<?php 
								$options = array(
											'Walnut Creek'  => 'Walnut Creek',
											'Lafayette'    => 'Lafayette',
											'Concord'   => 'Concord',
											'Richmond'   => 'Richmond',
											'San Ramon'   => 'San Ramon');
								echo "<br> Location: "; echo form_dropdown('location', $options, $row->location); ?><br>
												
							<span style="font-weight: lighter; font-size: medium;"> <?php echo 'Address:'; ?></span>
								<input type="text" name="address" value="<?php echo $row->address ?>"/>
								
								<?php 
								$data_sh = array('name' => 'descrip_sh', 'rows' => 6, 'cols' => 40, 'value' => $row->descrip_sh);
								echo "<br> Short description: "; echo form_textarea (  $data_sh );
								$data_lo = array('name' => 'descr_lo', 'rows' => 6, 'cols' => 40, 'value' => $row->descr_lo);
								echo "<br> Long description: "; echo form_textarea ( $data_lo ); 	
								?><br>
								
							<span style="font-weight: lighter; font-size: medium;"> <?php echo 'Floor plan file path:'; ?></span>
								<input type="text" name="floor_plan_path" value="<?php echo $row->floor_plan_path ?>"/><br>
							
						<?php $duplicate = $row->prop_id;  }
					}
				}
				?>
			</fieldset>
					<p><input type="submit" name="submit" value="Update"></p>
					</form>
				
		</div>
	</section>
	<br>
</body>
</html>