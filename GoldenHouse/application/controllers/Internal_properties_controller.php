 <?php
class Internal_properties_controller extends CI_Controller
{
	// index()
	public function index()
	{
		// load this particular model too to populate the dropdown with properties for editing and deleting properties
		$this->load->model('Model_properties');
		$data['results'] = $this->Model_properties->getPropertyOnly(); 
		$this->load->view('Internal_properties', $data);
		
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
	

	public function goToEditProperties()
	{
		$this->load->model('Model_properties');
		$data['results'] = $this->Model_properties->getProperty();
		$this->load->view('Internal_editProperties', $data);
	}
	
	public function updateProp()
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
		$result = $this->Model_properties->updatePropertyInDb($image_path, $sold, $type, $price, $bedrooms, $bathrooms,
															$size, $year, $location, $address, $descrip_sh, $descr_lo);
		$this->load->view('success_property_updated'); // change to say "updated"
	
	}
	
	
}
?>