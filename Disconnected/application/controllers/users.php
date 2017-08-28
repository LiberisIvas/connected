<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


//USERS.PHP

class Users extends CI_Controller {


	public function index()
	{
		$this->load->helper('url');
		$this->load->view('Template/navigation_landing');
		$this->load->view('Template/header');
		$this->load->view('landing_page');
		$this->load->view('Template/footer');
	}


	public function action()
	{
		$action=$this->input->post('action', TRUE);	
		switch ($action) {
			case 'login':
					$this->form_validation->set_rules('email1', 'Email', 'trim|required|valid_email');
					$this->form_validation->set_rules('pass', 'Password', 'trim|required|min_length[4]');
					if ($this->form_validation->run() == FALSE)
						{
						$this->load->view('index');
						}
						else
						{

							$email=$this->input->post('email1', true);
							$this->load->model('user_model');
							$isEmail=$this->user_model->get_user_by_email($email);
							

							if($isEmail)
							 {
									$passw=md5($this->input->post('pass', true) . 
		                            $this->config->item('encryption_key'));
							// var_dump($passw===$isEmail['pass'] );die('in email'); 		
								if ($passw===$isEmail['pass'])
								{
									$this->session->set_userdata('loggedInUser', $isEmail);
								
									redirect('/members/');

							    	} else {
										die('The passwords do not match, please try again');
							    	}
								
								
							 }  		else 
							 {
							        	die ('Your email does not exist. Register..:)');
							 }
							 } 

				break;
				case 'register':
					$this->form_validation->set_rules('fname', 'First Name', 'trim|required');
					$this->form_validation->set_rules('lname', 'Last Name', 'trim|required');
					$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]	');
					$this->form_validation->set_rules('pass', 'Password', 'trim|required|min_length[4]');
					$this->form_validation->set_rules('repass', 'Repeat Password', 'trim|required|matches[pass]' );
					$this->form_validation->set_rules('category', 'Category', 'trim|required'); //????? 6 values
					
					$this->form_validation->set_rules('skill', 'Skills', 'trim|required');
					$this->form_validation->set_rules('link', 'Links', 'trim|required');
					$this->form_validation->set_rules('story', 'Story', 'trim|required');
					$this->form_validation->set_message('is_unique','the email is already exists');
					if ($this->form_validation->run() == FALSE)
						{
						$this->load->view('index');
						}
						else
							{
							    $values= array(
								'fname' => $this->input->post('fname', true),
		                        'lname' => $this->input->post('lname', true),
		                        'email' => $this->input->post('email', true),
		                        'pass'  => md5($this->input->post('pass', true) . 
		                        			  $this->config->item('encryption_key')),
		                        
		                        'category' => $this->input->post('1', true),
		                         'category' => $this->input->post('2', true),
		                          'category' => $this->input->post('3', true),
		                           'category' => $this->input->post('4', true),
		                            'category' => $this->input->post('5', true),
		                             'category' => $this->input->post('6', true),
		                        'skill' => $this->input->post('skill', true),
		                        'link' => $this->input->post('link', true),
		                        'story' => $this->input->post('story', true),
		                        'created_at' => date("Y-m-d H:i:s"),
		                        'updated_at' => date("Y-m-d H:i:s")
		        			    );
									  $this->load->model('user_model');
						        $user=$this->user_model->add_user($values);
									  $this->session->set_userdata('successMsg', 'Thank you for registering at LinkedIn community');
								redirect();
							}
				break;
				default:
				die("The entrance is denied");
				break;
		}	
	}



	public function members() {
		$this->load->model('user_model');
		$members   = $this->user_model->get_members();
		$user_data = $this->session->userdata('loggedInUser');	
		$view_data = array(
			'member_data' => $members,
			'user'    => $user_data
		);
		$this->load->view('members', $view_data);
	}

		
	public function profile () {
		$user=$this->session->userdata('loggedInUser');
		$koko = $this->input->post('id', true);
		$this->load->model('user_model');
		$user=$this->user_model->get_user_by_id($koko);
		$this->load->view('profile', $user);
		
	}
	public function logout () {
		$user=$this->session->unset_userdata('loggedInUser');
		redirect();
	}
	
 }