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
		return $instructors->result();
	}
}
?>