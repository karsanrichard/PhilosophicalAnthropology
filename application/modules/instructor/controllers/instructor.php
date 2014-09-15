<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Instructor extends MY_Controller
{
	public $data = array();
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_instructor');
		$this->load->helper(array('form', 'url'));
	}
	function index()
	{
		// print_r($this->session->userdata('fname'));die;
		$data['values'] = '';
		$this->load->view('instructor_home', $data);
	}

	function upload_item()
	{
		// print_r($this->input->post());die;
		$path = '';
		$config['upload_path'] = './downloads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('files'))
		{
			$error = array('error' => $this->upload->display_errors());
			print_r($error);die;
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
			foreach ($data as $key => $value) {
				$path = $value['full_path'];
			}

			$this->m_instructor->uploaddata($path);
			// echo "Success!";
		}
	}
}