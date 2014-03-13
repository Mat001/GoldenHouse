<!DOCTYPE (HTML)>

<html>
<head>
    <link href='http://fonts.googleapis.com/css?family=Raleway:300|Open+Sans' rel='stylesheet' type='text/css'>
    <meta charset="utf-8">
    <title>Golden House Internal</title>
     <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>css/css_internal_home.css">
</head>

<body>
	<!-- HEADER, TITLE -->
	<header class="center-ims">
        <h2>GoldenHouse LLC&nbsp; - IMS</h2>
    </header>

	<!-- NAVBAR -->
	
	<nav class="center-ims">
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
    </nav>


<!-- MAIN CONTENT -->
<div>
	<h3 align="center">Welcome to agency's internal system.</h3>
</div>

	
	
</body>
</html>