<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index(){
		$data['title'] = 'Home';
		$data['logged_in'] = false;
		$this->load->view('view_header', $data);
		$this->load->view('view_navbar');
		$this->load->view('view_home');
		$this->load->view('view_footer');
	}

	public function signin(){
		$data['title'] = 'Signin';
		$data['logged_in'] = false;
		$this->load->view('view_header', $data);
		$this->load->view('view_navbar');
		$this->load->view('view_signin');
		$this->load->view('view_footer');
	}

	public function register(){
		$data['title'] = 'Register';
		$data['logged_in'] = false;
		$this->load->view('view_header', $data);
		$this->load->view('view_navbar');
		$this->load->view('view_register');
		$this->load->view('view_footer');
	}

	public function dashboard(){
		//TODO:
		//Need to check if user viewing dashboard is Admin or normal user,
		//and load view accordingly
		$data['title'] = 'Admin Dashboard';
		$data['dashboard'] = '';
		$data['logged_in'] = true;
		$this->load->view('view_header', $data);
		$this->load->view('view_navbar', $data);
		$this->load->view('view_dashboard');
		$this->load->view('view_footer');
	}
}