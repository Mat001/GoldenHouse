<?php

/**
 * IMPORTANT NOTE:
 * 
 * PASSWORDS IN DATABASE ARE USERS FIRST NAMES ! abby, bill, cecillia, danny, eric
 * THESE REAL NAMES ARE ENCRYPTED AND CAN'T BE SEEN IN DB (encrypted manually at http://www.md5hashgenerator.com/)
 * 
 * @author matjaz
 *
 */

class Model_useraccounts extends CI_Model
{
	public function canLogIn()
	{	
		// SELECT where WHERE email is emailaddress entered in the form; same for password 
		// check if email from database if equal to email that was entered in the login form
		$this->db->where('email', $this->input->post('email'));
		// same check for password.For password check mdp.
		$this->db->where('password', md5($this->input->post('password')));
		
		// perform query (equivalent to SELECT * FROM table)
		// define table to select from
		$query = $this->db->get('useraccounts');
		
		// if query found the user (only ONE row - one user with this criteria) then return true otherwise false 
		if($query->num_rows() == 1)
		{ return true; }
		else 
		{ return false; }
		
	}
}

?>