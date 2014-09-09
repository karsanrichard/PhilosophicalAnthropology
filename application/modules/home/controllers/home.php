<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MX_Controller
{

	function index()
	{
        $this->load->view('homepage');
	}

	public function user_registration(){
		/*
		$user_name = $_POST['user_name'];
		$pwd = $_POST['pwd_retype'];
		$user_data = array();
		$mydata = array('name' => $user_name, 'pwd' => $pwd, 'date_created' => date('y-m-d H:i:s'));
		array_push($user_data, $mydata);
		*/
		$this->load->view('member_registration.php');
	}


	public function member_registration($user_data){
		$fname = $_POST['fname'];
		$sname = $_POST['sname'];
		$dob = $_POST['dob'];
		$email =  $_POST['email'];
		$pwd_retype =  $_POST['pwd_retype'];
		$occupation = $_POST['occupation'];
		echo $fname.'  '.$sname.' '.$dob.' '.$email.' '.$pwd_retype;



		$this -> db -> insert_batch('user', $user_data);
	}
}