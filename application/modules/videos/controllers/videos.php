<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Videos extends MX_Controller
{
	function index()
	{
		$this->load->view('video');
	}
}