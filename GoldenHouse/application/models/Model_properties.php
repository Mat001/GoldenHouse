<?php

class Model_properties extends CI_Model
{
	
	public function setProperty()
	{
			
		

	}
	
	public function getProperty()
	{
			
		$query = $this->db->get('properties');
		return $query->result();
	
		// Perform validation???? - if query found the user (only ONE row - one user with this criteria) then return true otherwise false
		/*
		if($query->num_rows() == 1)
		{  return $query->result(); }
		else
		{ return ('Database error!'); }
		*/
	}
	
	// insert new property into properties table in DB
	
	
	// USE TIS: https://www.youtube.com/watch?v=lcpCFrjAiCw   !!!!!!!!!!!!!!!!!!!!!
	public function insertProperty()
	{
		$sold = $this->input->post('sold');
		$type = $this->input->post('type');
		$price = $this->input->post('price');
		$bedrooms = $this->input->post('bedrooms');
		$bathrooms = $this->input->post('bathrooms');
		$size = $this->input->post('size');
		$year = $this->input->post('year');
		$location = $this->input->post('location');
		$address = $this->input->post('address');
		$descrip_sh = $this->input->post('descrip_sh');
		$descr_lo = $this->input->post('descr_lo');
		
		$data = array( $sold, $type, $price, $bedrooms, $bathrooms, $size, $year, $location, $address, $descrip_sh, $descr_lo);
		
		$this->db->insert("properties", $data);
		$result = $this->db->query($data);
	}
	
	
	
	public function getImages()
	{
		
		
	}
	
	//  @TODO DO LATER FOR UPLOADING IMAGES INTO SHOW ROOM
	public function doUpload()
	{
		// see: http://code.tutsplus.com/tutorials/codeigniter-from-scratch-file-uploading-and-image-manipulation--net-9452
	
	}	
}


?>