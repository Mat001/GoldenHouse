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
	    <a style="color:black; font-size:x-small;" href="Internal_properties.php" onClick="history.back();return false;">[&nbsp;Back&nbsp;]</a>
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
						
						<form method="get" action="<?php echo base_url(); ?>Internal_properties_controller/updateProp"><br>
							<span style="font-weight: lighter; font-size: medium;"> <?php echo 'Property id (read only):'; ?></span>
								<input type="text" value="<?php echo $row->prop_id ?>" readonly/><br>
							<span style="font-weight: lighter; font-size: medium;"> <?php echo 'Image file path:'; ?></span>
								<input type="text" value="<?php echo $row->image_path ?>"/><br>
							<span style="font-weight: lighter; font-size: medium;"> <?php echo 'Sold:'; ?></span>
								<input type="text" value="<?php echo $row->sold ?>"/><br>
							<span style="font-weight: lighter; font-size: medium;"> <?php echo 'Type:'; ?></span>
								<input type="text" value="<?php echo $row->type ?>"/><br>
							<span style="font-weight: lighter; font-size: medium;"> <?php echo 'Price:'; ?></span>
								<input type="text" value="<?php echo $row->price ?>"/><br>
							<span style="font-weight: lighter; font-size: medium;"> <?php echo 'Bedrooms:'; ?></span>
								<input type="text" value="<?php echo $row->bedrooms ?>"/><br>
							<span style="font-weight: lighter; font-size: medium;"> <?php echo 'Bathrooms:'; ?></span>
								<input type="text" value="<?php echo $row->bathrooms ?>"/><br>
							<span style="font-weight: lighter; font-size: medium;"> <?php echo 'Size:'; ?></span>
								<input type="text" value="<?php echo $row->size ?>"/><br>
							<span style="font-weight: lighter; font-size: medium;"> <?php echo 'Year:'; ?></span>
								<input type="text" value="<?php echo $row->year ?>"/><br>
							<span style="font-weight: lighter; font-size: medium;"> <?php echo 'Location:'; ?></span>
								<input type="text" value="<?php echo $row->location ?>"/><br>
							<span style="font-weight: lighter; font-size: medium;"> <?php echo 'Address:'; ?></span>
								<input type="text" value="<?php echo $row->address ?>"/><br>
							<span style="font-weight: lighter; font-size: medium;"> <?php echo 'Short description:'; ?></span>
								<textarea cols="40" rows="6" value="<?php echo $row->descrip_sh ?>"/></textarea><br>
							<span style="font-weight: lighter; font-size: medium;"> <?php echo 'Long description:'; ?></span>
								<textarea cols="40" rows="6" value="<?php echo $row->descr_lo ?>"/></textarea><br>
							<span style="font-weight: lighter; font-size: medium;"> <?php echo 'Floor plan file path:'; ?></span>
								<input type="text" value="<?php echo $row->floor_plan_path ?>"/><br>
							
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