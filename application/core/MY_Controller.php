<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// error_reporting(1);

class MY_Controller extends MX_Controller
{
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

	function index()
	{
		
	}

	/*
	*
	*Use md5 and key to hash strings
	*
	*/
	
	protected function my_hash($data=null){

		$key = $this -> encrypt -> get_key();
		$encrypted_data = $key . $data;
		$data = md5($encrypted_data);
		return $data;
		
	}
}