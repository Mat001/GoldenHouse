<!DOCTYPE (HTML)>

<html>
<head>
    <link href='http://fonts.googleapis.com/css?family=Raleway:300|Open+Sans' rel='stylesheet' type='text/css'>
    <meta charset="utf-8">
    <title>Internal Properties</title>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>css/css_internal_home.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>css/css_portal_findestate.css">
</head>

<body>
	<!--  ******************************************    HEADER     ****************************************** -->
	<header class="center-ims">
	    <h2>Manage properties / images</h2>
	</header>
	
	<!--  ******************************************    UPLOAD IMAGE     ****************************************** -->
	<div align="center" id="upload_image">
		<?php echo $error;?>
	
		<?php echo form_open_multipart('Internal_properties_controller/uploadImages');?>
		<input type="file" name="userfile" size="20" />
		<input type="submit" value="upload" />
	</div>

	
		<!--  ******************************************    POPULATE SERACH FIELDS     ****************************************** -->
	
	<section class="center">
	<div class="filter">
			<form >	
				<p>
					Price &nbsp;&nbsp;&nbsp; <select name="price" >
						<option value="0 - 100">Empty for now</option>
						<option value="100 - 250">Empty for now</option>
						<option value="250 - 500">Empty for now</option>
						<option value="500 - 1000000">Empty for now</option>
						<option value="Any">Empty for now</option>
					</select>
				</p>
				<p>
					Type &nbsp;&nbsp;&nbsp; <select name="Property Type">
						<option value="Single-family house">Empty for now</option>
						<option value="Multi-family house">Empty for now</option>
						<option value="Apartment">Empty for now</option>
					</select>
				</p>
				<p>
					Location &nbsp;&nbsp;&nbsp; <select name="Location">
						<option value="Walnut Creek">Empty for now</option>
						<option value="Lafayette">Empty for now</option>
						<option value="Concord">Empty for now</option>
						<option value="Danville">Empty for now</option>
						<option value="San Ramon">Empty for now</option>
					</select>
				</p>
				<p>
					Bedrooms &nbsp;&nbsp;&nbsp; <select name="Bedrooms">
						<option value="1 +">Empty for now</option>
						<option value="2 +">Empty for now</option>
						<option value="3 +">Empty for now</option>
						<option value="4 +">Empty for now</option>
						<option value="5 +">Empty for now</option>
					</select>
				</p>
				<p>
					Bathrooms &nbsp;&nbsp;&nbsp; <select name="Bathrooms">
						<option value="1 +">Empty for now</option>
						<option value="2 +">Empty for now</option>
						<option value="3 +">Empty for now</option>
						<option value="4 +">Empty for now</option>
						<option value="5 +">Empty for now</option>
					</select>
				</p>
				<p>
					Size (sq ft) &nbsp;&nbsp;&nbsp; <select name="size">
						<option value="600+">Empty for now</option>
						<option value="1000+">Empty for now</option>
						<option value="1400+">Empty for now</option>
						<option value="2000+">Empty for now</option>
						<option value="3000+">Empty for now</option> 
						<option value="4000+">Empty for now</option>
					</select>
				</p>
				<p>
					Year &nbsp;&nbsp;&nbsp; <select name="year">
						<option value="before 1900">Empty for now</option>
						<option value="1900+">Empty for now</option>
						<option value="1930+">Empty for now</option>
						<option value="1950+">Empty for now</option>
						<option value="1970+">Empty for now</option>
						<option value="1990+">Empty for now</option>
						<option value="2010+">Empty for now</option>
					</select>
				</p>

				<input type="submit" value="Search Estates">
			</form>
		</div> <!-- form div -->
		<br>
		
		
				
		<!-- *****************************    SEARCH RESULTS - FOUND PROPERTIES    *******************************-->
		<div class="results">
		
		<table>
			<tr>
			  <th rowspan="4" class="pic_align"><img src="images/1024LenevePl/1LenevePl.jpg" alt="1LenevePl.jpg"></th>
			  <td class="subrow">1024 Leneve Drive, Walnut Creek, CA</td>
			</tr>
			<tr>
			  <td>$725,000</td>
			</tr>
			<tr>
			  <td>3 bed, 2 full bath, single-family home.</td>
			</tr>
			<tr>
			  <td>FOR SALE</td>
			</tr>
			
			<tr>
			  <th rowspan="4" class="pic_align"><img src="images/1360ContraCostaDr/1ContraCostaDr.jpg" alt="1ContraCostaDr.jpg"></th>
			  <td class="subrow">936-942 Lexington Ave, Lafayette, CA</td>
			</tr>
			<tr>
			  <td>$430,000</td>
			</tr>
			<tr>
			  <td>3 bed, 2 full bath, apartment in a multi-apartment building. Quiet.</td>
			</tr>
			<tr>
			  <td>FOR SALE</td>
			</tr>
			
			<tr>
			  <th rowspan="4" class="pic_align"><img src="images/1428NavellierSt/1navellier.jpg" alt="1navellier.jpg"></th>
			  <td class="subrow">1360 Contra Costa Dr, Lafayette, CA</td>
			</tr>
			<tr>
			  <td>$800,000</td>
			</tr>
			<tr>
			  <td>4 bed, 2 full bath, single-family home.</td>
			</tr>
			<tr>
			  <td>FOR SALE</td>
			</tr>
			
			</table> 
		</div>

	</section>
	<br><br>
	
	
</body>
</html>