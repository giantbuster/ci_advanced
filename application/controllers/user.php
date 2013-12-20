<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	public function create(){
		$this->load->view('view_user_create');
	}

	public function show(){
		$this->load->view('view_user_show');
	}

	public function edit(){
		$this->load->view('view_user_edit');
	}
}