<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Logged extends CI_Controller{

	public function index (){

		if ($this->input->post('action')) {
			
			$chosen= $this->input->post('action');
			$this->load->model("user_model");
			$info['all_info']=$this->user_model->show_category($chosen);
			$this->load->view("users_by_category",$info);
		}
		else {
			$this->load->view('logged_in');
				
		}

	}

	public function show_profile() {
			$chosen= $this->input->post('view_profile');
			$this->load->model("user_model");
			$one['profile']=$this->user_model->get_user_profile($chosen);
			$this->load->view("profile",$one);

	}


	public function create_message (){
			$this->load->library('form_validation');
			$this->form_validation->set_rules('message_text', 'Massege', 'xss_clean|trim|required|min_length[3]');


			if ($this->form_validation->run() == FALSE)
			{
		     
		    
			// $this->load->view("Template/header");
			// $this->load->view("main");
			// $this->load->view("Template/footer");
		    
		      

			}
			else{
				 $values = array(
            'id_user'=>$this->input->post('id', true),
            'id_recipient'=>$this->input->post('recipient', true),
            'status'=>$this->input->post('status', true),
            'message_text'=>$this->input->post('message_text', true),
        	'created_at'=> date("Y-m-d, H:i:s"),
        	'updated_at'=>date("Y-m-d, H:i:s")
        	);
		     $this->load->model("user_model");
		     $this->user_model->add_message($values);
		     $this->session->set_userdata('sucessmsg_2', 'Your Message has been sent');
		     
		      $this->load->view("message_sent");
			



			}

	}

	public function go_to_messages (){
			$mail= $this->input->post('mail');
			$this->load->model("user_model");
			$all_mail['inbox']=$this->user_model->get_inbox($mail);
			$all_mail['outbox']=$this->user_model->get_outbox($mail);
			$this->load->view("messages",$all_mail);	

	}

	public function delete_message (){
			$delete_message= $this->input->post("delete");
			$this->load->model("user_model");
			$this->user_model->delete_message($delete_message);
			redirect();

	}
	



}	