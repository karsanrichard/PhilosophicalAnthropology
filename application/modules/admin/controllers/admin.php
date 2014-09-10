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
		$this->instructors();

	}
	
	public function instructors()
	{
		
		$data['instructors'] = $this->admin_model->get_instructors();
		// $get = $this->admin_model->get_instructors();
		
		$this->load->view('instructors_view', $data);

	}

	public function add_instructor()
	{
		$default_password = $this->my_hash($this->config->item('instructors_default'));
		
		$this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
		$this->form_validation->set_rules('second_name', 'Second Name', 'trim|required');
		$this->form_validation->set_rules('other_name', 'Other Name', 'trim|required');
		$this->form_validation->set_rules('DOB', 'Date of Birth', 'trim|required');
		$this->form_validation->set_rules('institution', 'Institution', 'trim|required');
		$this->form_validation->set_rules('location', 'Location', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('phone', 'Phone', 'trim|required');
        
        if ($this->form_validation->run() == FALSE) 
		{
			echo "The form validation process was failed!!!";
            $this->instructors();
		} else 
		{
			echo "The form validation was very successfull";
            
			$this->admin_model->add_Instructors($default_password);
			
			$this->instructors();
				
		}





		//echo "Ndio kufika sasa";
		// $this->load->view('instructors_view');
	}
}

?>