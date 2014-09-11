<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Instructor extends MY_Controller
{
	function index()
	{
		$this->load->view('instructor_home');
	}
}