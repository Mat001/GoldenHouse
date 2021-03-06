<?php

class Model_properties extends CI_Model
{
	// get properties from 'properties' table joined with 'images' table
	public function getProperty()
	{
		$this->db->select('*');
		$this->db->from('properties');
		$this->db->join('images', 'properties.prop_id = images.p_id', 'left');
		$this->db->order_by("properties.prop_id", "asc");
		
		$query = $this->db->get();
		return $query->result();
	}
	
	// get property images
	public function getPropertyImages()
	{
		$query = $this->db->get('images');
		return $query->result();
	}
	
	// insert new property into properties table in DB. I used this source: https://www.youtube.com/watch?v=lcpCFrjAiCw but then changed it.
	public function insertPropertyToDb($data)
	{
		$this->db->insert('properties', $data);
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