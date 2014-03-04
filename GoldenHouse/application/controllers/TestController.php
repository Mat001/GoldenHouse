<?php

/**
 * - each controller class must extend CI_Controller
 * - each time controller is called in the browser it calles the index function - by default, no need to call it
 * - you can create as many functions in the controller, but index function will be called by default
 * - you must explicitly call other functions (not 'index') by adding them to the end of URL
 *  
 * @author matjaz
 *
 */

class TestController extends CI_Controller
{
	// http://localhost:8080/workspace_php/GoldenHouse/index.php/TestController/
	public function index()	
	{
		/*
		// load the model
		$this->load->model('TestModel');
		// call functions in the model
		$data['records'] = $this->TestModel->getData();
		
		// load view and pass $data as parameter 
		$this->load->view('TestView', $data);
		*/
		
		$data['val'] = array('element1', 'element2', 'element3', 'element4', 'element5', 'element6');
		
		$this->load->view('TestView', $data);
		
	}
	
	// http://localhost:8080/workspace_php/GoldenHouse/index.php/TestController/secondFunction
	public function secondFunction()
	{
		echo "This is my second function in the controller.";
	}
	
}


?>