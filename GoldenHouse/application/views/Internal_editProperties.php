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
				$selected = $_POST['property'];
				
				if(substr($selected, 3,1) == ',') 
					{ $selected = substr($selected, 2,1); }
				else 
					{ $selected = substr($selected, 2,2); } // allows to store up to 99 properties
				
				
				foreach($results as $row)
				{
					if($selected == $row->prop_id)
					{
						
						if($row->prop_id !== $duplicate) // take into the loop only distinct properties (some are repeating because of the left join)
						{
						/*
						echo form_open ( 'Internal_properties_controller/insertProp' ); 
						echo validation_errors (); // print validation errors 
						echo "<p> Image path: "; echo form_input( $row->image_path ); echo "</p>"; 
						echo "<p> Sold: "; echo form_input( $row->sold ); echo " 0-not sold / 1-sold </p>";
						echo "<p> Type: "; echo form_input ( $row->type ); echo "</p>";
						echo "<p> Price: "; echo form_input ( $row->price ); echo " $</p>";
						echo "<p> Bedrooms: "; echo form_input ( $row->bedrooms ); echo "</p>";
						echo "<p> Bathrooms: "; echo form_input ( $row->bathrooms ); echo "</p>";
						echo "<p> Size: "; echo form_input ( $row->size ); echo " sq ft</p>";
						echo "<p> Year: "; echo form_input ( $row->year ); echo "</p>";
						echo "<p> Location: "; echo form_input ( $row->location ); echo "</p>";
						echo "<p> Address: "; echo form_input ( $row->address ); echo "</p>";
						echo "<p> Short description: "; echo form_textarea ( $row->descrip_sh ); echo "</p>";
						echo "<p> Long description: "; echo form_textarea ( $row->descr_lo ); echo "</p>";		
						echo "<p> Floor plan path: "; echo form_input ( $row->floor_plan_path ); echo "</p>"; */ 
						?>
						<form method="post" action="<?php echo base_url(); ?>Internal_properties_controller/updateProp">
							<input type="text" value="<?php echo $row->image_path ?>"/><br>
							<input type="text" value="<?php echo $row->sold ?>"/><br>
							<input type="text" value="<?php echo $row->type ?>"/><br>
							<input type="text" value="<?php echo $row->price ?>"/><br>
							<input type="text" value="<?php echo $row->bedrooms ?>"/><br>
							<input type="text" value="<?php echo $row->bathrooms ?>"/><br>
							<input type="text" value="<?php echo $row->size ?>"/><br>
							<input type="text" value="<?php echo $row->year ?>"/><br>
							<input type="text" value="<?php echo $row->location ?>"/><br>
							<input type="text" value="<?php echo $row->address ?>"/><br>
							<input type="text" value="<?php echo $row->descrip_sh ?>"/><br>
							<input type="text" value="<?php echo $row->descr_lo ?>"/><br>
							<input type="text" value="<?php echo $row->floor_plan_path ?>"/><br>
							
						<?php $duplicate = $row->prop_id;  }
					}
				}
				?>
			</fieldset>
							<input type="submit" name="submit" value="Update">
						</form>
				<?php 
					//echo "<p>"; echo form_submit ( 'submt', 'Submit' ); echo "</p>";
					//echo form_close ();
				?>
		</div>
	</section>
	<br>
</body>
</html>