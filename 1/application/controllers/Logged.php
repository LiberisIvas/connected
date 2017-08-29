<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Logged extends CI_Controller{

	public function index (){

		if ($this->input->post('action')) {
			
			
		}
		else {
			$this->load->view('users_by_category');
				
		}

	}



}	