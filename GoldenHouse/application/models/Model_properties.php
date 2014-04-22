<?php

class Model_properties extends CI_Model
{
	// et properties from 'properties' table joined with 'images' table
	public function getProperty()
	{
		$this->db->select('*');
		$this->db->from('properties');
		$this->db->join('images', 'properties.prop_id = images.p_id', 'left');
		$this->db->order_by("properties.prop_id", "asc");
		
		$query = $this->db->get();
		return $query->result();
		
		// Perform validation???? - if query found the user (only ONE row - one user with this criteria) then return true otherwise false
		/*
		if($query->num_rows() == 1)
		{  return $query->result(); }
		else
		{ return ('Database error!'); }
		*/
	}
	
	// get property images
	public function getPropertyImages()
	{
		$query = $this->db->get('images');
		return $query->result();
	}
	
	// insert new property into properties table in DB. I used this source: https://www.youtube.com/watch?v=lcpCFrjAiCw
	public function insertPropertyToDb($data)
	{
		$this->db->update('properties', $data);
	}
	
	// get data ONLY from 'properties' table - no joins
	public function getPropertyOnly()
	{
		$this->db->select('*');
		$this->db->from('properties');
		$this->db->order_by("prop_id", "asc");
		
		$query = $this->db->get();
		return $query->result();;
	}
	
	public function updatePropertyInDb($data, $id)	
	{	
		$this->db->where("prop_id", $id );
		$this->db->update('properties', $data);  
	}
	
	public function deletePr($data)
	{
		$this->db->delete('properties', $data);
	}
	
}


?>