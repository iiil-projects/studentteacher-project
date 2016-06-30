<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {

	
	public function index()
	{
			$this->load->helper(array('form', 'url'));
						
			$this->load->library('form_validation');
			
			$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
			$this->form_validation->set_rules('course', 'Course', 'required');
			$this->form_validation->set_rules('qualification', 'Qualification', 'required');
			$this->form_validation->set_rules('description', 'Description', 'required');
			$this->form_validation->set_rules('image', 'Image', 'required');
			$this->form_validation->set_rules('gender', 'Gender', 'required');
			$this->form_validation->set_rules('role', 'Role', 'required');
			//$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
			if ($this->form_validation->run() == FALSE)
			{
					$this->load->view('master-view');
			}
			else
			{
					echo "<pre>";
					print_r($_REQUEST);
					echo "</pre>";
			}
	}
	
}
