<?php
class User extends MX_Controller
{
	
	
    function __construct()
    {
        parent::__construct();
		$this->load->model('user/user_model');
		if(!$this->session->userdata('id')){
            redirect('login');
        }
		
		$this->load->library('form_validation');
    }

	public  function index(){
			 $data['users'] = $this->user_model->select_all('tbl_test');
			 $this->load->view('user',$data);
    }
	
	public  function user_register(){
            $this->load->view('create');
       
    }
	
	public function registration_form(){
		//$this->load->library('form_validation');
		
		$this->form_validation->set_rules('name',' Name ','required|max_length[255]');
		$this->form_validation->set_rules('email',' E-mail ','required|valid_email|max_length[255]');
		$this->form_validation->set_rules('password','Password','required|max_length[255]');
		$this->form_validation->set_rules('address','Address','required|min_length[5]|max_length[255]');
		
		
		if($this->form_validation->run()==FALSE){
			//redirect('user');
			//$this->load->helper('form');
			$data['empty_field'] = TRUE;
			$this->load->view('create',$data);
		}else{
		 $data['name']=$this->input->post('name');
         $data['email']=$this->input->post('email');
         $data['password']=md5($this->input->post('password'));
         $data['address']= $this->input->post('address');
		 
         $insert = $this->user_model->insert_ret('tbl_test',$data);
		 
         $this->session->set_flashdata('type', 'success');
         $msg =  $this->session->set_flashdata('msg', 'Data Inserted Successfully !!');
        
         redirect('user','refresh');
		}
		
		
         
    }
 
	
	public function edituser($id) {
		
            $this->db->where('id', $id);
            $row['users'] = $this->db->get('tbl_test')->row_array();
			$this->load->view('user/edit_user',$row);
		
    }
	
	
	public function update_user($id) {
		$this->form_validation->set_rules('name',' Name ','required|max_length[255]');
		$this->form_validation->set_rules('email',' E-mail ','required|valid_email|max_length[255]');
		$this->form_validation->set_rules('password','Password','required|max_length[255]');
		$this->form_validation->set_rules('address','Address','required|min_length[5]|max_length[255]');
		
		
		if($this->form_validation->run()==FALSE){
			$data['empty_field'] = TRUE;
			//$this->load->view('home',$data);
			$this->db->where('id', $id);
            $data['users'] = $this->db->get('tbl_test')->row_array();
			$this->load->view('user/edit_user',$data);
		}else{
		
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