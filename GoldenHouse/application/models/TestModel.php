<?php

class TestModel extends CI_Model
{
	public function getData()
	{
		// perform query (equivalent to SELECT * FOM hello
		$query = $this->db->get('hello');
		
		return $query->result();
	}
	
	
}


?>