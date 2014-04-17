 <?php
class Internal_properties_controller extends CI_Controller
{
	// index()
	public function index()
	{
		$this->load->view ('Internal_properties', array('error' => '' ));
	}
	
	// Get new property info from view (Internal_properties) and pass it onto the model (Model_properties)
	public function insertProp()
	{
		$image_path = $this->input->post('image_path');
		$sold = $this->input->post('sold');
		$type = $this->input->post('type');
		$price = $this->input->post('price');
		$bedrooms = $this->input->post('bedrooms');
		$bathrooms = $this->input->post('bathrooms');
		$size = $this->input->post('size');
		$year = $this->input->post('year');
		$location = $this->input->post('location');
		$address = $this->input->post('address');
		$descrip_sh = $this->input->post('descrip_sh');
		$descr_lo = $this->input->post('descr_lo');
		$floor_plan = $this->input->post('floor_plan_path');
		
		$this->load->model("Model_properties");
		$result = $this->Model_properties->insertPropertyToDb($image_path, $sold, $type, $price, $bedrooms, $bathrooms, 
															$size, $year, $location, $address, $descrip_sh, $descr_lo);
		$this->load->view('success_property_added');
		
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