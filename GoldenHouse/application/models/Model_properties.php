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