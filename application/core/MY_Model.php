<?php

//# Extend CI_Model to include Doctrine Entity Manager
date_default_timezone_set('Africa/Nairobi');

class MY_Model extends CI_Model
{
    
    public $em, $largestKey;

    function __construct() {
        parent::__construct();
        
        /* Instantiate Doctrine's Entity manage so we don't have
         to everytime we want to use Doctrine */   
        $this->em = $this->doctrine->em;
    }

    function getLargestPrimaryKey($table)
    {
    	try {
            $this->query = "SELECT MAX(question_id) as MAX FROM ".$table;
            $this->largestKey = $this->db->query($this->query);
            $this->largestKey = $this->largestKey->result_array();
            
            // die(print_r($this->largestKey));
            if(!$this->largestKey[0]['MAX']){$this->largestKey[0]['MAX']=0;}
            return $this->largestKey[0]['MAX'];
            
        }
        catch(exception $ex) {
            
            //ignore
            die($ex->getMessage());
            
            
        }
    }

    function add_error()
    {
        $subject = $this->input->post('subject');
        $message = $this->input->post('message');
        $user = $this->session->userdata('full_name');

        $sql = "INSERT INTO error_reports (subject, message, user_id) VALUES ('$subject', '$message', '$user')";
        $insert = $this->db->query($sql);
        echo "Your Problem has been reported";
    }

    function getvaluesby($tablename, $searchparameter)
    {
        try {
            $query = $this->db->get_where($tablename, $searchparameter);
            $result = $query->result_array();
        }
        catch(Exception $ex) {
            echo $ex->getMessage();
        }
        return $result;
    }

    public function getCount($table)
    {
        $number = $this->db->count_all($table);
        return $number;
    }

    public function getUserDetails($user_id)
    {
        
    }
}