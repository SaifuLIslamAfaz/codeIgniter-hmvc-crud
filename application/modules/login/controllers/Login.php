<?php
	class Login extends MX_Controller{
		function __construct(){
			$this->load->model('login_model');
			$this->load->library('form_validation');
			
			
			$data = array();
		}
		
		
		public function index(){
			//echo "ok";
			$this->load->view('login');
		}
		
		
		
	/*public function login_checks(){
		$data['email'] = $this->input->post('email');
		$data['password'] = md5($this->input->post('password'));

        if(empty($data))
        {
            $data['msg'] = "Email OR Password Not Matched";
            $this->session->set_flashdata($data);
            redirect('/login');
        }else
        {
            $check = $this->login_model->check_user($data);
        }
        if($check)
		{
            $data['id'] = $check->id;
            $data['name'] = $check->name;
            $data['email'] = $check->email;
            $data['userlogin'] = TRUE;

			$data['msg'] = "Succeessfully LoggedIn";
            $this->session->set_userdata($data);
            redirect('user');

        } else {
            $data['msg'] = "Email OR Password Not Matched";
            $this->session->set_flashdata($data);
            redirect('/login');
        }
    }*/
	
	
	
	
	public function login_check(){
		$this->form_validation->set_rules('email',' E-mail ','required|valid_email|max_length[255]');
		$this->form_validation->set_rules('password','Password','required|max_length[255]');
		
		if($this->form_validation->run()==FALSE){
			//redirect('user');
			//$this->load->helper('form');
			$data['empty_field'] = TRUE;
			$this->load->view('login',$data);
		}else{
		$data['email'] = $this->input->post('email');
		$data['password'] = md5($this->input->post('password'));

        if(empty($data))
        {
            $data['msg'] = "Email OR Password Not Matched";
            $this->session->set_flashdata($data);
            redirect('/login');
        }else
        {
            $check = $this->login_model->check_user($data);
        }
        if($check)
		{
            $data['id'] = $check->id;
            $data['name'] = $check->name;
            $data['email'] = $check->email;
            $data['userlogin'] = TRUE;

			$data['msg'] = "Succeessfully LoggedIn";
            $this->session->set_userdata($data);
            redirect('user');

        } else {
            $data['msg'] = "Email OR Password Not Matched";
            $this->session->set_flashdata($data);
            redirect('/login');
        }
      }
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	function logout(){
		$newdata = array(
					'name'  =>'',
					'email' => '',
					'userlogin' => FALSE,
				   );

		 $this->session->unset_userdata($newdata);
		 $this->session->sess_destroy();

		 redirect('login');
	}
	
	
	
 
	}
?>