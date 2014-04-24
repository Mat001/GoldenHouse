<?php
class FindEstate_controller extends CI_Controller
{	
	// index() - loads below-mentioned view by default as soon as this controller is called in URL
	// index() function acts as some sort of constructor
	public function index()
	{
		$this->load->view('Portal_findEstate');	
	}
	
	// this controller loads view Portal_stateListing which is front end file (html) of the properties that are results of the search.
	public function estateListing()
	{
		$this->load->view('Portal_estateListing');
	}
	
	/*
	 * Call function getproperty() via the model Model_properties. This loads data from the database from table 'properties'.
	 * This data is used in the view Portal_estateDetails to populate parts of page with details of a property. 
	 * @Author Matjaz
	 */
	public function estateDetails()
	{
		// load the model, get table values, store them in array $data['results']
		$this->load->model('Model_properties');
		$data['results'] = $this->Model_properties->getProperty();  // $results is one row in properties table, $data is the whole table (multidimens array)
		$this->load->view('Portal_estateDetails', $data);
	}
	
	/*
	 * Call function getproperty() via the model Model_properties. This loads data from the database from table 'properties'.
	* This data is used in the view Portal_estateListing to populate parts of page with details of a property.
	* @Author Matjaz
	*/
	public function findEstates()
	{	
		// load the model, get table values, store them in array
		$this->load->model('Model_properties');
		$data['results'] = $this->Model_properties->getProperty();  // $results is one row in properties table, $data is the whole table (ultidimens array)
		$this->load->view('Portal_estateListing', $data);
	}
}
?>