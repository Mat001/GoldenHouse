<?php require('application/controllers/FindEstate_controller.php'); ?>

<!DOCTYPE (HTML)>

<html>
<head>
<link
	href='http://fonts.googleapis.com/css?family=Raleway:300|Open+Sans'
	rel='stylesheet' type='text/css'>
<meta charset="utf-8">
<title>Internal Customers</title>
<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>css/css_internal_home.css">
</head>

<body>
	<!--  ******************************************    HEADER & BACK TO HOME LINK     ****************************************** -->
	<header class="center-ims">
		<h2>
			Manage customers &nbsp;&nbsp;&nbsp; 
			<a style="color: black; font-size: x-small;" href="<?php echo base_url(); ?>Internal_home_controller">[&nbsp;Back to Home&nbsp;]</a>
		</h2>
	</header>


	<!--  ******************************************    ADD CUSTOMER AND SUBMIT    ****************************************** -->

	<section class="center">
		<div align="left" id="container">
			<!--  ******************************************    SUBMIT CUSTOMER FORM     ****************************************** -->

			<fieldset class="margin">
				<legend>ADD CUSTOMER</legend>
				<?php		
					echo form_open ( 'Internal_customers_controller/insertCust' );
					echo validation_errors (); // print validation errors 
					echo "<br> First name: "; echo form_input( 'fname' );
					echo "<br> Last name: "; echo form_input ( 'lname' );
					echo "<br> Phone: "; echo form_input ( 'phone' ); 
					echo "<br> Email: "; echo form_input ( 'email' );
					echo "<br> Address: "; echo form_input ( 'address' );
					$options = array(
							'Buyer'  => 'Buyer',
							'Seller'    => 'Seller');
					echo "<br> Type: "; echo form_dropdown('type', $options);  
					echo "<br> Property selling / buying (id): "; echo form_input ( 'prop_id' );
				?>
			</fieldset>
				<?php 
					echo "<p>"; echo form_submit ( 'submit', 'Submit' ); echo "</p>";
					echo form_close ();
				?>
		</div>
	</section>
	<br>

	<!--  ******************************************    EDIT CUSTOMER     ****************************************** -->

	<br>
	<section class="center">
		<div align="left" id="edit customer">
			<fieldset class="margin">
				<legend>EDIT CUSTOMER</legend>
				<p>Select customer to edit.</p>

				<form method="post" accept-charset="utf-8"	action="<?php echo base_url(); ?>Internal_customers_controller/goToEditCustomer">
					<p>
						<select name="customer">
						<?php 
						
						foreach ($results as $row)
						{ ?>
							<option>
								<?php 
								echo 'id'.$row->id.', '; echo $row-> fname.', '; echo $row->lname.', '; echo $row->phone.', '; 
								echo $row->email.', '; echo $row->address.', '; echo $row->type.','; echo $row->prop_id;
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

	<!--  ******************************************    DELETE CUSTOMER     ****************************************** -->

	<br>
	<section class="center">
		<div align="left" id="delete customer">
			<fieldset class="margin">
				<legend>DELETE CUSTOMER</legend>
				<p>Select customer to delete.</p>

				<form method="post" accept-charset="utf-8" action="<?php echo base_url(); ?>Internal_customers_controller/deleteCustomer">
					<p>
						<select name="customer">
						<?php 
						foreach ($results as $row)
						{ ?>
							<option value="<?php echo $row->id ?>">
								<?php 
								echo 'id'.$row->id.', '; echo $row-> fname.', '; echo $row->lname.', '; echo $row->phone.', '; 
								echo $row->email.', '; echo $row->address.', '; echo $row->type.','; echo $row->prop_id;
								?>
							</option>
						<?php } ?>	
					</select>
					</p>
					<input type="submit" name="deleteCustomerFormVar" value="Delete">

				</form>
			</fieldset>
		</div>
	</section>

</body>
</html>