<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MX_Controller
{
	function __construct() {
		parent::__construct();
		$this -> load -> model('registration');
		$this -> load -> helper(array('form', 'url'));
		$this -> load -> database();
	}

	function index()
	{
		$sess_data = $this->session->all_userdata();
		$session_id = $this->session->userdata('session_id');
		echo $session_id."</br></br>";

		// echo "<pre>"; print_r($sess_data);echo "</pre>";
		// exit;
        $this->load->view('homepage');
	}

	public function reg_home(){
		$this->load->view('member_registration');
	}

	public function member_registration(){
		$this->registration->member_reg();
	}
}