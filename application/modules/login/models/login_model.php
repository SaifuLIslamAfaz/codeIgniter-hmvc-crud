<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class login_model extends CI_Model {
	public function __construct() {
        parent::__construct();
    }
	
	 public function check_user($data){
        $this->db->select('*');
        $this->db->from('tbl_test');
        $this->db->where('email',$data['email']);
        $this->db->where('password',$data['password']);
        
        $result = $this->db->get();
        
        $has = $result->num_rows();
            if($has==1){
                $rs = $result->row();
                return $rs;
        }
    }
	 
}


    