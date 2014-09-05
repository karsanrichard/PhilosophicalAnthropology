<?php if (! defined("BASEPATH")) exit("No direct access to the script is allowed");

/**
* 
*/
class Content extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->human_freedom();
	}

	public function human_freedom()
	{
		$this->load->view("freedom_view");
	}

	public function human_sexuality()
	{
		$this->load->view("sexuality_view");
	}
}

?>