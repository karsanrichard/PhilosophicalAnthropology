<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_user extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function check_login($username, $password)
    {
        $sha1_password = sha1($password);
        $sql = "SELECT userid FROM user WHERE user_name = ? AND user_password = ? ";

        $results = $this->db->query($sql, array($username, $sha1_password));


        if ($results->num_rows() == 1)
        {    
            return $results->row(0)->userid;
        }

        else
        {
            return false;
        }
    }
}