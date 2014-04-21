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
	
	public function getPropertyImages()
	{
		$query = $this->db->get('images');
		return $query->result();
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
	
	// ONLY from 'properties' table - no joins
	public function getPropertyOnly()
	{
		$this->db->select('*');
		$this->db->from('properties');
		$this->db->order_by("prop_id", "asc");
		
		$query = $this->db->get();
		return $query->result();;
	}
	
	public function updatePropertyInDb($image_path, $sold, $type, $price, $bedrooms, $bathrooms,
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
	
		$query = $this->db->update('properties');  // or $query = $this->db->update('properties', $data, "prop_id"=smth);
		return;
	}
	
}


?>