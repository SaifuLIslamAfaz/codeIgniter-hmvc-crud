<?php
class Home extends MX_Controller
{
    function __construct()
    {
        parent::__construct();
		$this->load->model('home/home_model');
    }

	/*public  function index()
    {

		 $this->load->view('home');
    }*/
	
	
	/*public function registration_form(){
         $data['name']=$this->input->post('name');
         $data['email']=$this->input->post('email');
         $data['password']=md5($this->input->post('password'));
         $data['address']= $this->input->post('address');
		 
         $insert=$this->home_model->insert_ret('tbl_test',$data);
		 
         $this->session->set_flashdata('type', 'success');
         $msg =  $this->session->set_flashdata('msg', 'Data Inserted Successfully !!');
        
         redirect('home','refresh');
    }
 */


}

?>