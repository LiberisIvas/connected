<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Login extends CI_Controller{

	public function index(){

		switch ($this->input->post('action')) {
			case 'Login':
				$this->check_login();
				break;
			case 'register':
				$this->check_register();
				break;
			default:
				$this->load->view("Template/navigation");
				$this->load->view("Template/header");
				$this->load->view("main");
				$this->load->view("Template/footer");
				break;
		}

		
	}



	public function check_login(){
		
		$this->load->library('Form_validation');
		$this->form_validation->set_rules('email', 'email', 'xss_clean|trim|required|valid_email');
		$this->form_validation->set_rules('password', 'password', 'xss_clean|required|min_length[6]');
		
		
		if ($this->form_validation->run() == FALSE)
			{
		     // $this->view_data['errors'] = validation_errors();
		     
		     $this->load->view("main" );    
		}
		else
			{
		    
			$check = $this->input->post('email', true);   
			$this->load->model('user_model');
			$check_exist = $this->user_model->get_user($check);

			if ($check_exist) {
				
				$passw = md5($this->input->post('password', true) .
                              $this->config->item('encryption_key')
                              );
                    
                    if($passw === $check_exist['password'])
                    {
                        $this->session->set_userdata('loggedin_user', $check_exist);
                        redirect("/Login/success");
                    }
                    else
                        die('password doesnt match');

			}
			else{
				 die('email doesnot exist');
			}

		}

			
			
	}

	public function check_register(){

		

		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'email', 'xss_clean|trim|required|valid_email|is_unique[users.email]');
		
		$this->form_validation->set_rules('password', 'password', 'xss_clean|required|min_length[6]|max_length[30]');
		$this->form_validation->set_rules('confirm_password', 'Confirm password', 'xss_clean|required|matches[password]');
		$this->form_validation->set_rules('first_name', 'First Name', 'xss_clean|trim|required|max_length[30]');
		$this->form_validation->set_rules('last_name', 'First Name', 'xss_clean|trim|required|max_length[30]');

		$this->form_validation->set_message('is_unique', 'This email already exists');


		if ($this->form_validation->run() == FALSE)
			{
		     
		     $this->load->view("main"); 
		    
		      

		}
		else
			{
		     $values = array(
        	'first_name'=> $this->input->post('first_name', true), 
            'last_name'=>$this->input->post('last_name', true),
            'email'=> $this->input->post('email', true) ,
            'password'=>md5($this->input->post('password', true) . $this->config->item('encryption_key')),
        	'created_at'=> date("Y-m-d, H:i:s"),
        	'updated_at'=>date("Y-m-d, H:i:s")
        	);
		     $this->load->model("user_model");
		     $this->user_model->add_user($values);
		     $this->session->set_userdata('sucessmsg', 'Thanks for your registration.please Login');
		     //$temp["temp"] = $this->session->userdata('successMsg');
		     $this->load->view("main");
			
				
		}

			
	}

	

	public function logout()
    {
        $this->session->unset_userdata('loggedin_user');
        $this->session->sess_destroy();
        $this->load->view('you_loggedout');
    }





    public function success(){
    	$this->load->view('logged_in');
    }
}	

?>