<!DOCTYPE html>

<html>
<head>
	<link href='http://fonts.googleapis.com/css?family=Raleway:300|Open+Sans'	rel='stylesheet' type='text/css'>
	<meta charset="utf-8">
	<title>Find Estate</title>
	<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>css/css_portal_home.css">
	<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>css/css_portal_findestate.css">
	<script type="text/javascript" src="js/popUpTerms.js"></script>
</head>

<body>
	<!--  ******************************************    HEADER     ****************************************** -->
	<header class=center>
		<h1>Golden House LLC</h1>
	</header>

	<!--  ******************************************    NAVIGATION     ****************************************** -->
	<nav class=center>
		<ul>
			<li><a href="<?php echo base_url(); ?>Home_controller">Home</a></li>
			<li><a href="<?php echo base_url(); ?>FindEstate_controller">Find Estate</a></li>
			<li><a href="<?php echo base_url(); ?>ContactUs_controller">Contact Us</a></li>
			<li><a href="<?php echo base_url(); ?>About_controller">About</a></li>
		</ul>
	</nav>

											
	<!--  ******************************************    CENTER SECTION     ****************************************** -->
	<section class="center">
		
	<div class="filter">
		<a style="color:black; font-size:small;" href="<?php echo base_url(); ?>FindEstate_controller">&nbsp;New search&nbsp;</a>
	</div>
	<br>	
		<!-- *****************************    SEARCH RESULTS - FOUND PROPERTIES    *******************************-->
		<div class="results">
		
		<?php // get the search values from the form on previous page 
		$price_prev = $_POST['price']; 
		$type_prev = $_POST['type'];
		$location_prev = $_POST['location'];
		
		$ar = array();	// declare array (to store prop_ids in). Properties with these prop_ids will be passed down into the table
		$ar_prices = array();
		$ar_types = array();
		$ar_locations = array();
		
		foreach ($results as $row)
		{	
			// prices
			// if price is 0 the search for all properties with price 0 - 100000
			// if price is 100 the search for all properties with price 100000 - 250000
			// if price is 250 the search for all properties with price 250 - 500000
			// if price is 500 the search for all properties with price 500 - 1000000
			// if price is 1000 the search for all properties with price > 1000000
			if($row->price >= 0 && $row->price <= 100000 && $price_prev == "0") { $ar_prices[] = $row->prop_id; }
			if($row->price >= 100001 && $row->price <= 250000 && $price_prev == "100") { $ar_prices[] = $row->prop_id; } 
			if($row->price >= 250001 && $row->price <= 500000 && $price_prev == "250") { $ar_prices[] = $row->prop_id; }	
			if($row->price >= 500001 && $row->price <= 1000000 && $price_prev == "500") { $ar_prices[] = $row->prop_id; }
			if($row->price >= 1000001  && $price_prev == "1000") {  $ar_prices[] = $row->prop_id; }	
	
			// types
			// if type is Single-family house the search for all properties with type Single-family house
			// if type is Multi-family house the search for all properties with type Multi-family house
			// if type is Apartment the search for all properties with type Apartment
			if($row->type == "Single-family house" && $type_prev == "Single-family house") { $ar_types[] = $row->prop_id; }
			if($row->type == "Multi-family house" && $type_prev == "Multi-family house") { $ar_types[] = $row->prop_id; }
			if($row->type == "Apartment" && $type_prev == "Apartment") { $ar_types[] = $row->prop_id; }
		
			// locations
			// if location is Walnut Creek the search for all properties with locagtion is Walnut Creek
			// if location is Lafayette the search for all properties with location is Lafayette
			// if location is Concord the search for all properties with location is Concord
			// if location is Richmond the search for all properties with location is Richmond
			// if location is San Ramon the search for all properties with location is San Ramon
			if($row->location == "Walnut Creek" && $location_prev == "Walnut Creek") { $ar_locations[] = $row->prop_id;}
			if($row->location == "Lafayette" && $location_prev == "Lafayette") { $ar_locations[] = $row->prop_id; }
			if($row->location == "Concord" && $location_prev == "Concord") { $ar_locations[] = $row->prop_id; }
			if($row->location == "Richmond" && $location_prev == "Richmond") { $ar_locations[] = $row->prop_id; }
			if($row->location == "San Ramon" && $location_prev == "San Ramon") { $ar_locations[] = $row->prop_id; }
		}
		
		// only price provided
		if (!empty($ar_prices) && empty($ar_types) && empty($ar_locations)) { $ar = $ar_prices; }
		
		// type provided
		if (empty($ar_prices) && !empty($ar_types) && empty($ar_locations)) { $ar = $ar_types; }
		
		// only locations selected
		if (empty($ar_prices) && empty($ar_types) && !empty($ar_locations)) { $ar = $ar_locations; }
		
		// all are empty
		if (empty($ar_prices) && empty($ar_types) && empty($ar_locations)) { /* do nothing or diaplay message - no parameters selected */ }
		
		// all three parameters selected
		if (!empty($ar_prices) && !empty($ar_types) && !empty($ar_locations)) 
		{ 
			$ar_temp = array_intersect($ar_prices, $ar_types, $ar_locations);
			$ar_temp = array_values($ar_temp);
			if (!empty($ar_temp)) { $ar = $ar_temp; }
		}
		
		// price and type provided // ar_prices=2, ar_types=1,3
		if (!empty($ar_prices) && !empty($ar_types) && empty($ar_locations)) 
		{	 
			// if elements in array1 and in array2 intersect - elements that appear in both arrays
			// then put intersecting elements into the $ar
			$ar_temp = array_intersect($ar_prices, $ar_types);
			$ar_temp = array_values($ar_temp);
			if (!empty($ar_temp)) { $ar = $ar_temp; }
			// add else echo 'No found.';
		}
		
		// type and location provided
		if (empty($ar_prices) && !empty($ar_types) && !empty($ar_locations))
		{
			// if elements in array1 and in array2 intersect - elements that appear in both arrays
			// then put intersecting elements into the $ar
			sort($ar_types);
			sort($ar_locations);
			$ar_temp = array_intersect($ar_types, $ar_locations);
			$ar_temp = array_values($ar_temp);	// IMPORTANT STEP !!!! efore was also getting undefined values in the array. It cleans up, removes undefined values.
			if (!empty($ar_temp)) { $ar = $ar_temp; }
		}
		
		// price and location provided
		if (!empty($ar_prices) && empty($ar_types) && !empty($ar_locations)) 
		{
			$ar_temp = array_intersect($ar_prices, $ar_locations);
			$ar_temp = array_values($ar_temp);
			if (!empty($ar_temp)) { $ar = $ar_temp; } 
		}
			
		$arrlength=count($ar);	// get array length to use it for loop
		?>
		
		
		<?php 
		$duplicate = 0;
		//echo 'initial duplicate: '.$duplicate;
		// when findEstates() function has been used (Search Estates button clicked), then execute the loop and show list of properties
		foreach ($results as $row)
		{	
			
			for($x=0; $x<$arrlength; $x++)
			{
				if($row->prop_id == $ar[$x])	// only display properties with this prop_id - array of prop_ids come from search criteria above
				{
					if($row->prop_id !== $duplicate) // take into the loop only distinct properties (some are repeating because of the left join)
					{
						//echo ' dupl after if: '.$duplicate;
						//echo ' prop_id after if: '.($row->prop_id);
					?>
						<table>
							<tr> <!-- fetch image path from database and use it to open the corresponding image file -->
							  <th rowspan="5" class="pic_align"><img src="<?php echo base_url().($row->image_path) ?>" alt="<?php echo base_url().($row->image_path) ?>"></th>
							  <td class="subrow"><?php echo $row->address;?></td>
							</tr>
							<tr>
							  <td>$<?php echo $row->price; ?>
							  
							  </td>
							</tr>
							<tr>
							  <td><?php echo $row->bedrooms; ?> bedrooms, <?php echo $row->bathrooms; ?> bathrooms, <?php echo $row->type; ?>.</td>
							</tr>
							<tr>
							  <td><?php if($row->sold == 0)  
							  {echo '<span style="color: green; font-size:medium;">FOR SALE</span>';} 
							  else { echo '<span style="color: red; font-size:medium; font-weight:bold">SOLD</span>'; }?></td>
							</tr>
							<tr>
								<td align="right" ><form method="post" action="<?php echo base_url(); ?>FindEstate_controller/estateDetails">
									<input type="hidden" name="prop_id" value="<?php echo $row->prop_id; ?>">
							 		<input type="submit" name="submit" value="See details">
							 	</form></td>
						 	</tr>
						</table>
					
					<?php $duplicate = $row->prop_id;
					//echo ' dupl before end of if: '.$duplicate;
					//echo ' prop_id before end of if: '.($row->prop_id);
					} 
				}
			}
			
			
		} ?>
			 
			 
		</div>
	</section>
	<br><br>
	
	
	<!-- *****************************    FOOTER    *******************************-->
	
	<footer id=footer class="center" style="clear: both; padding-top: 40px " >
		<h6>
	    	<!-- GoldenHouse LLC -->
	        Copyright 2014 &copy; GoldenHouseLLC  |  
        			
	        <!-- Terms and Conditions popup -->
			<a style="color:#8B6914" href="<?php echo base_url(); ?>Home_controller/terms" 
			   onclick="return popUpTerms('<?php echo base_url(); ?>Home_controller/terms')">Terms and Conditions</a>  |
					
			<!-- Agency Login -->
	        <a style="color:#8B6914" href="<?php echo base_url(); ?>Login_controller">Agency Login</a> 		
        </h6>
	</footer>
</body>
</html>