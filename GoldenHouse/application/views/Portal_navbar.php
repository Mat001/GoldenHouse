<!-- Portal_navbar.php -->
<!-- CONTINUATION FROM Portal_header.php -->

<center>
<div>
	<ul>
	<!-- USING 'php echo base_url()' to shorten the href URLs. -->
	<!-- 'php echo base_url()' is equivalent to 'http://localhost:8080/git/GoldenHouseGit/GoldenHouse/' --> 
		<li><a href="<?php echo base_url(); ?>Home_controller">Home</a></li>
		<li><a href="<?php echo base_url(); ?>FindEstate_controller">Find Estate</a></li>
		<li><a href="<?php echo base_url(); ?>Home_controller/ContactUs">Contact Us</a></li>
		<li><a href="<?php echo base_url(); ?>Login_controller">Login</a></li>
		<li><a href="<?php echo base_url(); ?>Home_controller/About">About</a></li>
	</ul>
</div>
</center>
