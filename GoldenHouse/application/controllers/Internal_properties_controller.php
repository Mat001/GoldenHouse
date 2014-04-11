 <?php
class Internal_properties_controller extends CI_Controller
{
	// index()
	public function index()
	{
		$this->load->view ('Internal_properties', array('error' => '' ));
	}
	

	// ***********************************     UPLOAD IMAGES     ***********************************************
	public function uploadImages()
	{
		$config['upload_path'] = './images/';
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['max_size']	= '100';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('Internal_properties', $error);	// display upload related errors in internal properties controller (not in FindEstate in public portal)!
		}
		else
		{
			$file_data = $this->upload->data();
			$data['img'] = base_url().'/images/' .$file_data['file_name'];
			$this->load->view('Portal_findEstate', $data);	// upload image to public FindEstate page - SHOULD JUST UPDATE IT !!! ADD IMAGE.
		}
	}
}
?>