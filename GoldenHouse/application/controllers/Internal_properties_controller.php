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
		$floor_plan_path = $this->input->post('floor_plan_path');
		
		$newrow = array(
				
				"image_path" => $image_path,
				"sold" => $sold,
				"type" => $type,
				"price" => $price,
				"bedrooms" => $bedrooms,
				"bathrooms" => $bathrooms,
				"size" => $size,
				"year" => $year,
				"location" => $location,
				"address" => $address,
				"descrip_sh" => $descrip_sh,
				"descr_lo" => $descr_lo,
				"floor_plan_path" => $floor_plan_path);
		
		$this->load->model("Model_properties");
		$this->Model_properties->insertPropertyToDb($newrow);
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
		// Get property info from view text fields (Internal_editProperties) and pass it onto the model (Model_properties)
		$prop_id = $this->input->get('prop_id');
		$image_path = $this->input->get('image_path');
		$sold = $this->input->get('sold');
		$type = $this->input->get('type');
		$price = $this->input->get('price');
		$bedrooms = $this->input->get('bedrooms');
		$bathrooms = $this->input->get('bathrooms');
		$size = $this->input->get('size');
		$year = $this->input->get('year');
		$location = $this->input->get('location');
		$address = $this->input->get('address');
		$descrip_sh = $this->input->get('descrip_sh');
		$descr_lo = $this->input->get('descr_lo');
		$floor_plan_path = $this->input->get('floor_plan_path');
		
		$newrow = array(
				"prop_id" => $prop_id,
				"image_path" => $image_path, 
				"sold" => $sold, 
				"type" => $type, 
				"price" => $price, 
				"bedrooms" => $bedrooms, 
				"bathrooms" => $bathrooms, 
				"size" => $size, 
				"year" => $year, 
				"location" => $location, 
				"address" => $address, 
				"descrip_sh" => $descrip_sh, 
				"descr_lo" => $descr_lo, 
				"floor_plan_path" => $floor_plan_path);
	
		$this->load->model("Model_properties");
		$this->Model_properties->updatePropertyInDb($newrow, $prop_id);
		$this->load->view('success_property_updated'); 
	
	}
	
	public function deleteProperty()
	{
		$this->load->model('Model_properties');
		
		$prop_id = $this->input->post('property'); // get property_id value from the dropdown selection
		
		$oldrow = array( "prop_id" => $prop_id	);
		$this->Model_properties->deletePr($oldrow);
		$this->load->view('success_property_deleted');
	}
	
	
}
?>