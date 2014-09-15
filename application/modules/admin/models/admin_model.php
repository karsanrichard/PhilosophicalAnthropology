<?php if (! defined("BASEPATH")) exit("No direct access to script alowed");

/**
* 
*/
class Admin_model extends MY_Model
{
	
	function __construct()
	{
		parent::__construct();
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
									`users`
								VALUES
										(
											'NULL',
											'$username',
											'$password'
										)";
		$this->db->query($logins);
	}

	function store_sent_email($recepient, $subject, $message, $tim)
    {
       $emails = array(
			'id' 		   =>   NULL,
			'recipients'   =>   $recepient,
			'subject'      =>   $subject,
			'message'      =>   $message,
			'date'   	   =>   $tim,
			'sent_status'  =>   1
			);

		$insert = $this->db->insert('mailerlog', $emails); 
    }

    function getErrors()
    {
    	$errors = array();

    	$query = $this->db->query("SELECT count(error_id) AS errors FROM error_reports WHERE looked_at = 0 LIMIT 1");
    	$result = $query->result_array();

    	return $result[0]['errors'];
    }

    function getUnreadErrors()
    {
    	$unreadErrors = array();
    	$query = $this->db->query("SELECT * FROM error_reports WHERE looked_at = 0 ORDER BY date DESC");
    	$results = $query->result_array();

    	foreach ($results as $key => $value) {
    		$unreadErrors[$value['error_id']] = $value;
    	}
    	return $unreadErrors;
    }
}
?>