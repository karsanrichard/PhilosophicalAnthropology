<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Questions extends MX_Controller
{
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->model('m_questions');
    }
	function index()
	{
		$this->load->view('public_questions');
	}

	function public_questions()
	{
		$this->m_questions->getAllQuestions();
		$this->load->view('public_questions');
	}

	function set_questions()
	{
		$this->load->view('register_questions');
	}

	function add_questions()
	{
		$result = $this->m_questions->addQuestions();
	}
}