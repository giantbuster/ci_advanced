<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	public function add(){
		$data['title'] = 'Add User';
		$data['logged_in'] = true;
		$this->load->view('view_header', $data);
		$this->load->view('view_navbar');
		$this->load->view('view_user_add');
		$this->load->view('view_footer');		
	}

	public function show(){
		$data['title'] = 'User Information';
		$data['profile'] = '';
		$data['logged_in'] = true;
		$this->load->view('view_header', $data);
		$this->load->view('view_navbar', $data);
		$this->load->view('view_user_show');
		$this->load->view('view_footer');
	}

	public function edit(){
		$data['title'] = 'Edit User';
		$data['logged_in'] = true;
		$this->load->view('view_header', $data);
		$this->load->view('view_navbar');
		$this->load->view('view_user_edit');
		$this->load->view('view_footer');
	}
}