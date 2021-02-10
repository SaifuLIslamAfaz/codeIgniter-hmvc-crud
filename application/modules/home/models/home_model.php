<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class home_model extends CI_Model {
	public function __construct() {
        parent::__construct();
    }
	
	public function insert_ret($tablename, $tabledata)
    {
        $this->db->insert($tablename, $tabledata);
        return $this->db->insert_id();
    }
	 
}


    