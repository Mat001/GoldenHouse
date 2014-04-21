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
	
	public function estateDetails()
	{
		$this->load->model('Model_properties');
		$data['results'] = $this->Model_properties->getProperty();  // $results is one row in properties table, $data is the whole table (ultidimens array)
		$this->load->view('Portal_estateDetails', $data);
	}
	
	public function findEstates()
	{	
		// load the model, get table values, store them in array
		$this->load->model('Model_properties');
		$data['results'] = $this->Model_properties->getProperty();  // $results is one row in properties table, $data is the whole table (ultidimens array)
		$this->load->view('Portal_estateListing', $data);
	}
}
?>