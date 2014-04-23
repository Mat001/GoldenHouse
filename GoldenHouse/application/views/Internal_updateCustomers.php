<?php require('application/controllers/FindEstate_controller.php'); ?>

<!DOCTYPE (HTML)>

<html>
<head>
    <link href='http://fonts.googleapis.com/css?family=Raleway:300|Open+Sans' rel='stylesheet' type='text/css'>
    <meta charset="utf-8">
    <title>Update cuatomers</title>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>css/css_internal_home.css">
</head>

<body>
	<!--  ******************************************    HEADER & BACK TO HOME LINK     ****************************************** -->
	<header class="center-ims">
	    <h2>Update customers  &nbsp;&nbsp;&nbsp;
	    <a style="color:black; font-size:x-small;" href="Internal_customers.php" onClick="history.back();return false;">[&nbsp;Back&nbsp;]</a>
	    <a style="color:black; font-size:x-small;" href="<?php echo base_url(); ?>Internal_home_controller">[&nbsp;Home&nbsp;]</a></h2>
	</header>
	
	<section class="center">
		<div align="left" id="container">
			<!--  ******************************************    UPDATE CUSTOMER     ****************************************** -->
			
			<fieldset class="margin">
			<legend>UPDATE CUSTOMER</legend>
			
				<?php
				$duplicate=0;
				// this form should UPDATE !
				$selected = $_POST['customer'];	// this is row that was selected in the dropdown
				
				if(substr($selected, 3,1) == ',') // get id from the whole row
					{ $selected = substr($selected, 2,1); }	// single digit
				else 
					{ $selected = substr($selected, 2,2); } // two digits, allows to store up to 99 customers
				
				
				foreach($results as $row)
				{
					
					if($selected == $row->id)	
					{
						if($row->id !== $duplicate) // take into the loop only distinct customers
						{?>
						<!-- method must be get for the form data to be picked up by updateProp() function in cinternal_properties_ontroller -->
						<form method="get" action="<?php echo base_url(); ?>Internal_customers_controller/updateCust"><br>
							<span style="font-weight: lighter; font-size: medium;"> <?php echo 'Customer id (read only):'; ?></span>
								<input type="text" name="id" value="<?php echo $row->id ?>" readonly/><br>
								
							<span style="font-weight: lighter; font-size: medium;"> <?php echo 'First name:'; ?></span>
								<input type="text" name="fname" value="<?php echo $row->fname ?>"/><br>
								
							<span style="font-weight: lighter; font-size: medium;"> <?php echo 'Last name:'; ?></span>
								<input type="text" name="lname" value="<?php echo $row->lname ?>"/><br>
								
							<span style="font-weight: lighter; font-size: medium;"> <?php echo 'Phone:'; ?></span>
								<input type="text" name="phone" value="<?php echo $row->phone ?>"/><br>
										
							<span style="font-weight: lighter; font-size: medium;"> <?php echo 'Email:'; ?></span>
								<input type="text" name="email" value="<?php echo $row->email ?>"/><br>
								
							<span style="font-weight: lighter; font-size: medium;"> <?php echo 'Address:'; ?></span>
								<input type="text" name="address" value="<?php echo $row->address ?>"/><br>
								
								<?php 
								$options = array(
											'Buyer'  => 'Buyer',
											'Seller'    => 'Seller');
											
								echo "<br> Type: "; echo form_dropdown('type', $options, $row->type); ?><br>
												
							<span style="font-weight: lighter; font-size: medium;"> <?php echo 'Property selling / buying (id):'; ?></span>
								<input type="text" name="prop_id" value="<?php echo $row->prop_id ?>"/><br>
							
						<?php $duplicate = $row->id;  }
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