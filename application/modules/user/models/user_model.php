<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class user_model extends CI_Model {
	public function __construct() {
        parent::__construct();
    }
	
	
	public function insert_ret($tablename, $tabledata)
    {
        $this->db->insert($tablename, $tabledata);
        return $this->db->insert_id();
    }
	
	
	
	 public function select_all($table_name)
    {
    	$this->db->select('*');
		$this->db->from($table_name);
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
    } 
	
	public function update_user($tablename, $tabledata, $id)
    {
		
		$this->db->where('id', $id);
        $this->db->update($tablename, $tabledata);
		//$this->db->where('id', $id);
        return $this->db->insert_id();
    }
	public function delete_user($tablename,$id)
    {
		
		$this->db->where('id', $id);
        $this->db->delete($tablename);
		//$this->db->where('id', $id);
        return $this->db->insert_id();
    }
	
 
	 
}


    