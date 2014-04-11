<?php

class Home_controller extends CI_Controller
{
	// constructor
	public function __construct()
	{
		parent::__construct ();
		$this->load->library ( 'unit_test' );
	}
	
	// index()
	public function index()
	{
		$this->load->view ( 'Portal_home' );
	}
	
	public function terms()
	{
		$this->load->view ( 'Portal_terms' );
	}
	
	
	// create fake scenario that imitate existing functionality and pass it into test function
	
	
	
	
	// CALL TEST FUNTIONs FOR HOME CONTROLLER
	public function testHome_controller()
	{
			
		
		$this->unit->run ( multiply ( 2, 4 ), 8, "testing_multiply_function" );
		$this->unit->run ( subtract ( 9, 5 ), 4, "testing_subtract_function" );
		
		echo $this->unit->report ();
	}
	
	
}


/**
 * Test funtions for Home_controller
 * 
 * @param unknown $a        	
 * @param unknown $b        	
 * @return number
 */

function multiply($c, $d)
{
	return $c * $d;
}

function subtract($e, $f)
{
	return $e - $f;
}



?>