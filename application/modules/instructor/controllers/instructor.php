<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Instructor extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_instructor');
	}
	function index()
	{
		$this->load->view('instructor_home');
	}

	function upload_item()
	{
		print_r($_FILES);die;
		if ($_FILES["file"]["error"] > 0) {
  echo "Error: " . $_FILES["file"]["error"] . "<br>";
} else {
  echo "Upload: " . $_FILES["file"]["name"] . "<br>";
  echo "Type: " . $_FILES["file"]["type"] . "<br>";
  echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
  echo "Stored in: " . $_FILES["file"]["tmp_name"];
}
		
	}
}