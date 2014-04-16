<?php

class Model_properties extends CI_Model
{
	
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
	
	// insert new property into properties table in DB. I used this source: https://www.youtube.com/watch?v=lcpCFrjAiCw
	public function insertPropertyToDb($image_path, $sold, $type, $price, $bedrooms, $bathrooms, 
									$size, $year, $location, $address, $descrip_sh, $descr_lo)
	{
		$this->db->set('image_path', $image_path);
		$this->db->set('sold', $sold);
		$this->db->set('type', $type);
		$this->db->set('price', $price);
		$this->db->set('bedrooms', $bedrooms);
		$this->db->set('bathrooms', $bathrooms);
		$this->db->set('size', $size);
		$this->db->set('year', $year);
		$this->db->set('location', $location);
		$this->db->set('address', $address);
		$this->db->set('descrip_sh', $descrip_sh);
		$this->db->set('descr_lo', $descr_lo);
		
		$query = $this->db->insert('properties');
		return;
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