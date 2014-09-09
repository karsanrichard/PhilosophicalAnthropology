<?php if (! defined("BASEPATH")) exit("No direct access script allowed");
/**
* 
*/
class Admin extends MY_Controller
{
	public $data = array();

	function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
	}

	public function index()
	{
		$this->load->view('instructors_view');
	}
	
	public function instructors()
	{
		$data['instructors'] = $this->admin_model->get_instructors;
		
	}

	public function add_instructor()
	{
		$first 		  = $this->input->post('first_name');
		$second 	  = $this->input->post('second_name');
		$other 		  = $this->input->post('other_name');
		$dob 		  = $this->input->post('DOB');
		$institution  = $this->input->post('institution');
		$location	  = $this->input->post('location');
		$email 		  = $this->input->post('email');
		$phone 		  = $this->input->post('phone');

		//echo "Ndio kufika sasa";
		// $this->load->view('instructors_view');
	}
}

?>