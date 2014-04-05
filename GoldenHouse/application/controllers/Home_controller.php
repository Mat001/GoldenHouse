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
	
	
	
	
	// CALL TEST FUNTIONs FOR HOME CONTROLLER
	public function testHome_controller()
	{
		$this->unit->run ( index(), view('Portal_home'), "test index()" );
		
		
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

function add($a, $b)
{
	return $a + $b;
}

function multiply($c, $d)
{
	return $c * $d;
}

function subtract($e, $f)
{
	return $e - $f;
}



?>