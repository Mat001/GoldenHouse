<?php

class Internal_customers_controller extends CI_Controller
{

	// index()
	public function index()
	{
		// load this particular model too to populate the dropdown with properties for editing and deleting properties
		$this->load->model('Model_customers');
		$data['results'] = $this->Model_customers->getCustomer();
		$this->load->view('Internal_customers', $data);
	
	}
	
	// Get new property info from view (Internal_properties) and pass it onto the model (Model_properties)
	public function insertCust()
	{
		$fname = $this->input->post('fname');
		$lname = $this->input->post('lname');
		$phone = $this->input->post('phone');
		$email = $this->input->post('email');
		$address = $this->input->post('address');
		$type = $this->input->post('type');
		$prop_id = $this->input->post('prop_id');
	
		$newrow = array(
	
				"fname" => $fname,
				"lname" => $lname,
				"phone" => $phone,
				"email" => $email,
				"address" => $address,
				"type" => $type,
				"prop_id" => $prop_id);
	
		$this->load->model("Model_customers");
		$this->Model_customers->insertCustomerToDb($newrow);
		$this->load->view('success_customer_added');
	}
	
	
	public function goToEditCustomer()
	{
		$this->load->model('Model_customers');
		$data['results'] = $this->Model_customers->getCustomer();
		$this->load->view('Internal_updateCustomers', $data);
	}
	
	public function updateCust()
	{
		// Get customerinfo from view text fields (Internal_editCustomers) and pass it onto the model (Model_customers) for updating
		$id = $this->input->get('id');
		$fname = $this->input->get('fname');
		$lname = $this->input->get('lname');
		$phone = $this->input->get('phone');
		$email = $this->input->get('email');
		$address = $this->input->get('address');
		$type = $this->input->get('type');
		$prop_id = $this->input->get('prop_id');
	
		$newrow = array(
	
				"id" => $id,
				"fname" => $fname,
				"lname" => $lname,
				"phone" => $phone,
				"email" => $email,
				"address" => $address,
				"type" => $type,
				"prop_id" => $prop_id);
	
		$this->load->model("Model_customers");
		$this->Model_customers->updateCustomerInDb($newrow, $id);
		$this->load->view('success_customer_updated');
	
	}
	
	public function deleteCustomer()
	{
		$this->load->model("Model_customers");
	
		$id = $this->input->post('customer'); // get property_id value from the dropdown selection
	
		$oldrow = array( "id" => $id );
		$this->Model_customers->deleteCu($oldrow);
		$this->load->view('success_customer_deleted');
	}

}
?>