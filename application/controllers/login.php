<?php 	if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$this->load->view('login');
	}
	
	public function validate() {
		$response['success'] = 'false';
		$response['message'] = 'something Went Wrong';
		$data = $this->input->post();
		$this->load->model('Login_model');
		if(isset($data)) {
			if(!isset($data['username']) || !isset($data['password'])) {
				$response['message'] = 'Please enter Email Id and Password';
				print_r (json_encode($response));
			}
		}

		$response = $this->Login_model->userName($data);
	}
}
