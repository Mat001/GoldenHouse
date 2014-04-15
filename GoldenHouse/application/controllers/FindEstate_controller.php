<?php
class FindEstate_controller extends CI_Controller
{	
	// index()
	public function index()
	{
		$this->load->view('Portal_findEstate');	
	}
	
	public function estateListing()
	{
		$this->load->view('Portal_estateListing');
	}
	
	public function findEstates()
	{
		// logic to search for estates - compare selected parameters to database
		
		
		// set parameters to first value
		
		// if at least one parameter matches and no other mismatches then populate show results on the right hand side
		// add if statement???? - if database is empty show empty results, if not, then let search criteria choose
		
		
		$array_params = array(0, 0, "", 150000, 0, 0, 1000, 0, "", "", "", "");	// price, size - fake testing array
		
			
		// load the model, get table values, store them in array
		$this->load->model('Model_properties');
		$data['results'] = $this->Model_properties->getProperty();  // $results is one row in properties table, $data is the whole table (ultidimens array)
		$this->load->view('Portal_estateListing', $data);
		
		/*
		 // loop through elements in the array and compare them to values in each row at a time in "properties" table
		// captured search parameters are equivalent to values in each row in the table
		foreach ($array_params as $p)
		{
		// check each element against values in each row
		if($p == $data['results']) // && other row elements are not mismatch)
		// HOW TO BREAK DOWN multidim array $data['results'] to get each row. And then loop through elements of each row to compare them against $aray_params.?.
		{
		// load matching rows from "properties" table - fix this, now shows all rows
		$this->load->view('Portal_findEstate', $data);
		}
		else
		{
		$s = "didn't work.";
		}
		}
		echo $s;
			
		// else else display message "No match. Try again." and reset search parameters. reset parameters.
		*/
	}
	
}
?>