<?php
class Login_controller extends CI_Controller
{
	// index()
	public function index()
	{
		$this->load->view ( 'Portal_login' );
	}
	
	public function internalHome()
	{
		$this->load->view('Internal_home');
	}
	
	public function loginValidation()
	{
		// form_validation library included in autoload
		
		// set validation rules for form data to validate their correctness. 
		// Note callback parameter (callback_validate_credentials). It says that callback function 
		// (in my case I create it as validateCredentials()) will check for validity of form data against the database
		// - in DB: to enter encrypted pasword in DB google md5 hash generator, enter password word, copy and paste 
		// that hash into db field for password. md5 in canLogIn() function will decrypt it for use
		$this->form_validation->set_rules('email', 'Email', 'required|trim|xss_clean|callback_validateCredentials');
		$this->form_validation->set_rules('password', 'Password', 'required|md5|trim');
		
		if($this->form_validation->run())
		{
			// get data that user entered and store it into associative array ('hash map')
			// this is going to get the session data to be put into set_userdata function below
			// storing session data into array
			$data = array (	'email'	=> $this->input->post('email'), 'is_logged_in' => 1 );
			$this->session->set_userdata($data);
			redirect ('Internal_home_controller');	// validation success - enter internal pages (ims)
		}
		else 
		{
			// if validation fails load the login view again
			$this->load->view('Portal_login');
		}
		
		
	} 
	
	// this function will return true or false if user can login (are in the database!).
	// this function rests on canLogIn() function which does most of the work.
	// if true is returned that means there was no error. Form_validation library in loginValidation() \
	// function will then understand that and user will be redirected to internal portal etc. 
	public function validateCredentials()
	{
		// load the model
		$this->load->model('Model_useraccounts');
		
		// return true or false if users can log in or not
		if($this->Model_useraccounts->canLogIn())
		{ return true; }
		else 
		{ 
			$this->form_validation->set_message('validateCredentials', 'Incorrect username / password.');
			return false;
		}
	}
	
	
	// loads terms of service in this page
	public function terms()
	{
		$this->load->view ( 'Terms' );
	}
}
?>
