<?php
class FindEstate_controller extends CI_Controller
{	
	// index()
	public function index()
	{
		//$this->load->view ('Portal_findEstate');
		
		// cretae if statement - if database is empty show empty results, if not, then let search criteria choose
		
		$this->load->model('Model_properties');
		
		$data['results'] = $this->Model_properties->getProperty();
		
		$this->load->view('Portal_findEstate', $data);
		
	}
		
	
}
?>