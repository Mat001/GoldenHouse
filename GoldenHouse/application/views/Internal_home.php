<!DOCTYPE (HTML)>

<html>
<head>

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/internal_navtabs.css">
<!-- <script type="text/javascript" src="js/jquery-2.1.0.min.js"></script>  -->
<!-- <script type="text/javascript" src="js/bootstrap.js"></script>  -->
<!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.css">  -->

</head>
<body>
	<!-- HEADER, TITLE -->
	<div class="container">
		<h1 align="center">GoldenHouse LLC&nbsp; - Internal management system</h1>
	</div>

	<!-- NAVBAR -->
	<center>
<div>
	<ul>
	<!-- USING 'php echo base_url()' to shorten the href URLs. -->
<!-- 'php echo base_url()' is equivalent to 'http://localhost:8080/git/GoldenHouseGit/GoldenHouse/' -->
		<li><a href="<?php echo base_url(); ?>Internal_home_controller">Home</a></li> 
		<li><a href="<?php echo base_url(); ?>Internal_properties_controller">Properties</a></li>
		<li><a href="<?php echo base_url(); ?>Internal_customers_controller">Customers</a></li>
		<li><a href="<?php echo base_url(); ?>Internal_accounting_controller">Accounting</a></li>
		<li><a href="<?php echo base_url(); ?>Internal_admin_controller">Admin</a></li>
		<li><a href="<?php echo base_url(); ?>Internal_home_controller/logout">Log out</a></li>
	</ul>
</div>
</center>

<!-- MAIN CONTENT -->
<div>
	<h3>Welcome to agency's internal system.</h3>
</div>

<!-- FOOTER -->
<div>
	<p>This is footer</p>
	
</div>	
	
</body>
</html>