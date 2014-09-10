<?php if (! defined("BASEPATH")) exit("No direct access to script alowed");

/**
* 
*/
class Admin_model extends MY_Model
{
	
	function __construct()
	{
		
	}

	public function get_instructors()
	{
		$sql = "SELECT
						'id',
						`first_name`,
						`second_name`,
						`institution`,
						`location`,
						`email`,
						`phone`,
						`status`
				FROM 
					`instructors`";
		$instructors = $this->db->query($sql);
		// print_r($instructors); die();
		return $instructors->result_array();
	}

	public function add_Instructors($default_password)
	{
		
		$first_name 	= $this->input->post('first_name');
		$second_name 	= $this->input->post('second_name');
		$other_name		= $this->input->post('other_name');
		$dob 			= $this->input->post('DOB');
		$institution	= $this->input->post('institution');
		$location		= $this->input->post('location');
		$email			= $this->input->post('email');
		$phone			= $this->input->post('phone');
		$username		= $first_name.".".$second_name;
		$password 		= $default_password;

		$details = "INSERT INTO 
								`instructors`
							VALUES
									(
										'NULL',
										'$first_name',
										'$second_name',
										'$other_name',
										'$dob',
										'$institution',
										'$location',
										'$email',
										'$phone',
										'1',
										'1'
									)";

		// echo $details; 
		$insert = $this->db->query($details);
		$this->login_credentials($username, $password);
	
		
	}

	public function login_credentials($username, $password)
	{
			$logins	 = "INSERT INTO
									`user`
								VALUES
										(
											'NULL',
											'$username',
											'$password'
										)";
		$this->db->query($logins);
	}
}
?>