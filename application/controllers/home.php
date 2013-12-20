<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index(){
		$this->load->view('view_home');
	}

	public function signin(){
		$this->load->view('view_signin');
	}

	public function register(){
		$this->load->view('view_register');
	}

	public function dashboard(){
		$this->load->view('view_dashboard');
	}
}