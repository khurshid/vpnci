<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('get_user_details')){
   function getUserName($userid){
       //get main CodeIgniter object
       $ci =& get_instance();
        //load databse library
       $ci->load->database();
       //get data from database
       $query = $ci->db->get_where('clients',array('id'=>$userid));
       if($query->num_rows() > 0){
           $result = $query->row_array();
            return $result['username'];
       }else{
           return false;
       }
   }
}