<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registration extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function member_reg(){
        $mem_data = array();
        $user_info = array();
        $fname = $_POST['fname'];
        $sname = $_POST['sname'];
        $onames = $_POST['onames'];
        $dob = $_POST['dob'];
        $email =  $_POST['email'];
        $user_name =  $_POST['user_name'];
        $pwd =  $_POST['pwd'];

        $user_data=array('user_name' =>$user_name,'pwd' => $pwd);
        array_push($user_info,$user_data);

        $this -> db -> insert_batch('users', $user_info);
        
        $new_user_id = $this -> db -> insert_id();

        $member_data=array('fname' => $fname, 'sname' => $sname, 'onames' => $onames, 'dob' => $dob, 'email' => $email, 'user_id' => $new_user_id);
        array_push($mem_data,$member_data);

        $result = $this -> db -> insert_batch('members', $mem_data);

        if($result = TRUE){
        $user_name = $fname.' '.$sname;
        $user_email = $email;
            $newdata = array(
                   'username'  => $user_name,
                   'email'     => $user_email,
                   'logged_in' => TRUE
               );

        $this->session->set_userdata($newdata);
        
        }else{
            echo "FOR WHO?";exit;
        };
        /*
        
        */
    }
}