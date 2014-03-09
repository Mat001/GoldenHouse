<?php
class Internal_home_controller extends CI_Controller
{
	// index()
	public function index()
	{
		// here we check (with session data check) if user is actually logged in before we load the internal page view below
		// SESSIONS ARE PROTECTION AGAINST ATTEMPT TO ACCESS INTERNAL PAGE MANUALLY BY ADDING 'Internal_home_controller' to URL 
		// program checks if user is actually loged in first before allowing to open internal page !!! 
		if($this->session->userdata('is_logged_in') )
		{
			$this->load->view ('Internal_home');
		}
		else // if not we redirect user to restricted page
		{
			redirect('Internal_home_controller/restricted');
		}
	}
	
	public function logout()
	{
		// destroys all session data from the browser upon logging out. Needed for security reasons.
		$this->session->sess_destroy();
		redirect('Login_controller');
	}
	
	
	public function restricted()
	{
		$this->load->view('Internal_restricted');
	}
	
}
?>