<html>
<head>
<link
	href='http://fonts.googleapis.com/css?family=Raleway:300|Open+Sans' rel='stylesheet' type='text/css'>
	<meta charset="utf-8">
	<title>Golden House Associate Login</title>
	<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>css/css_portal_home.css">
</head>

<body>
	<!--  ******************************************    HEADER     ****************************************** -->
	<header class=center>
		<h1>Golden House LLC</h1>
	</header>

	<section>
		<div align="center" id="container">
			<!--  ******************************************    LOGIN FORM     ****************************************** -->
			<?php
			// in form_open() specify in parameter the controller that handles validation and (/)
			// its function that will handle the validation!
			// otherwise the form resubmits to the same url
			
			echo form_open ( 'Login_controller/loginValidation' );
			echo validation_errors (); // print validation errors if no email or passw or if one of them or both are incorrect
			echo "<p> Email: "; echo form_input ( 'email' ); echo "</p>";
			echo "<p> Password: "; echo form_password ( 'password' ); echo "</p>";
			echo "<p>"; echo form_submit ( 'login_submit', 'Login' ); echo "</p>";
			echo form_close ();
			?>
		</div>
	</section>
	
	<!--  ******************************************    BACK TO HOME BUTTON     ****************************************** -->
	<div align="center">
		<a style="color:black; font-size: smaller;" href="<?php echo base_url(); ?>Home_controller">Back to Home</a>
	</div>
</body>
</html>