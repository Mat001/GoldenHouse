<?php
class FindEstate_controller extends CI_Controller
{	
	// index()
	public function index()
	{
		$this->load->view ('Portal_findEstate');
		
	}
		
	
	public function terms()
	{
		$this->load->view ('terms');
	}
}
?>