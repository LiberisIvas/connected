<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Logged extends CI_Controller{

	public function index (){

		if ($this->input->post('action')) {
			
			$chosen= $this->input->post('action');
			$this->load->model("user_model");
			$info['all_info']=$this->user_model->show_category($chosen);
			$this->load->view("user_by_category",$info);
		}
		else {
			$this->load->view('logged_in');
				
		}

	}



}	