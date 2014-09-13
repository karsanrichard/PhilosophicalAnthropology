
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
		$this->load->view('admin_home');

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
			// echo "The form validation was very successfull";
            
			$this->admin_model->add_Instructors($default_password);
			
			$this->instructors();
				
		}
		//echo "Ndio kufika sasa";
		// $this->load->view('instructors_view');
	}

	public function edit_instructor()
	{
		
	}

	public function email_details()
	{
		$recipient 	= $this->input->post('recipient');
		$subject 	= $this->input->post('subject');
		$message 	= $this->input->post('message');

		// print_r($this->input->post());die;

		$this->send_email($recipient, $subject, $message);
	}

	public function send_email($recipient, $subject, $message)
	{
		$time=date('Y-m-d');
		
		$config = array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_user' => "chrisrichrads@gmail.com",
			'smtp_pass' => "joshuaSUN"
			);
		
		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");

		$this->email->from('chrisrichrads@gmail.com', 'PHILOSOPHICAL ANTHROPOLOGY');
		$this->email->to($recipient);
		$this->email->subject($subject);
		$this->email->message($message);
		$this->email->set_mailtype("html");
		
		
		if($this->email->send())
			{	
				$this->admin_model->store_sent_email($recipient, $subject, $message, $time);
				$this->index();
				
			} else 
			{
				show_error($this->email->print_debugger());
			}
		
	}
}

?>



