<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Logged extends CI_Controller{

	public function index (){

		switch ($this->input->post('action')) {
			case '':
				$this->check_login();
				break;
			case '':
				$this->check_register();
				break;
			default:
				$this->load->view("");
				break;
		}

	}



}	