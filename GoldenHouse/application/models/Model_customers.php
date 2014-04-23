<?php

class Model_customers extends CI_Model
{
// get customers from 'customers' table joined with 'images' table
	public function getCustomer()
	{
		$this->db->select('*');
		$this->db->from('customers');
		$this->db->order_by("id", "asc");
		
		$query = $this->db->get();
		return $query->result();
	}
	
	// insert new customer into customers table in DB.
	public function insertCustomerToDb($data)
	{
		$this->db->insert('customers', $data);
	}
	
	public function updateCustomerInDb($data, $id)	
	{	
		$this->db->where("id", $id );
		$this->db->update('customers', $data);  
	}
	
	public function deleteCu($data)
	{
		$this->db->delete('customers', $data);
	}
	
}
	
?>