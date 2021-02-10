<?php
class User extends MX_Controller
{
    function __construct()
    {
        parent::__construct();
		$this->load->model('user/user_model');
    }

	public  function index(){
		 $data['users'] = $this->user_model->select_all('tbl_test');
		 $this->load->view('user',$data);
    }
	
	public  function user_register(){
		 $this->load->view('home');
    }
	
	public function registration_form(){
         $data['name']=$this->input->post('name');
         $data['email']=$this->input->post('email');
         $data['password']=md5($this->input->post('password'));
         $data['address']= $this->input->post('address');
		 
         $insert=$this->user_model->insert_ret('tbl_test',$data);
		 
         $this->session->set_flashdata('type', 'success');
         $msg =  $this->session->set_flashdata('msg', 'Data Inserted Successfully !!');
        
         redirect('user','refresh');
    }
 
	
	public function edituser($id) {
		
            $this->db->where('id', $id);
            $row['users'] = $this->db->get('tbl_test')->row_array();
			$this->load->view('user/edit_user',$row);
		
    }
	
	
	public function update_user($id) {
    if (isset($id)) {
				
			$data['name']=$this->input->post('name');
			$data['email']=$this->input->post('email');
			$data['password']= md5($this->input->post('password'));
			$data['address']= $this->input->post('address');
			
			//$this->db->where('id', $id);
			$insert=$this->user_model->update_user('tbl_test',$data,$id);
			
			//$this->db->where('id', $id);
			//$result = $this->db->update('tbl_test', $data);

		}
		 redirect('user');
    }
	
	
	public function delete_user($id) {

        if ($id != '') {
            //$this->db->where('id', $id);
           // $result = $this->db->delete('tbl_test');
            $result = $this->user_model->delete_user('tbl_test',$id);
            if ($result) {
                $this->session->set_flashdata('message', 'Succefully Deleted.');
            } else {
                $this->session->set_flashdata('message', "An error occurred while inserting data.");
            }
            redirect('user');
        }
    }

}

?>