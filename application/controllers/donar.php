<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

   class Donar extends CI_Controller {
  
     public function __construct() {
		parent::__construct();
	}

	public function index() {
		$this->load->model('Donar_model');
		$data['country'] = $this->Donar_model->getCountry();
		$this->load->view('donar', $data);
	}

	public function getState($country = '') {
		$response['success'] = 'false';
		$response['message'] = 'something Went Wrong';
		
		if($country) {
			$response['success'] = 'true';
			$this->load->model('Donar_model');
			$response['data'] = $this->Donar_model->getState($country);
			print_r (json_encode($response));
		} else {
			$response['message'] = 'Plese Select Country';
			print_r (json_encode($response));

		}
	}

	public function getDistrict($state = '') {
		$response['success'] = 'false';
		$response['message'] = 'something Went Wrong';
		
		if($state) {
			$response['success'] = 'true';
			$this->load->model('Donar_model');
			$response['data'] = $this->Donar_model->getDistrict($state);
			print_r (json_encode($response));
		} else {
			$response['message'] = 'Plese Select State';
			print_r (json_encode($response));

		}
	}

	public function getCity($district = '') {
		$response['success'] = 'false';
		$response['message'] = 'something Went Wrong';
		
		if($district) {
			$response['success'] = 'true';
			$this->load->model('Donar_model');
			$response['data'] = $this->Donar_model->getCity($district);
			print_r (json_encode($response));
		} else {
			$response['message'] = 'Plese Select State';
			print_r (json_encode($response));

		}
	}
	public function save() {

		$response['success'] = 'false';
		$response['message'] = 'something Went Wrong';
		$data = $this->input->post();
		$this->load->model('Donar_model');
		$response = $this->Donar_model->saveData($data);
		if($response['success'] == 'true') {
			$donar_details = [];
			$donar_details[0]['first_name'] = $response['data']['first_name'];
			$donar_details[0]['last_name'] = $response['data']['last_name'];
			$donar_details[0]['gender'] = $response['data']['gender'];
			$donar_details[0]['date_of_birth'] = $response['data']['DOB'];
			$donar_details[0]['blood_group'] = $response['data']['blood_group'];
			$donar_details[0]['address'] = $response['data']['Address'];
			$donar_details[0]['country'] = $response['data']['country'];	
			$donar_details[0]['state'] = $response['data']['state'];	
			$donar_details[0]['district'] = $response['data']['district'];	
			$donar_details[0]['city'] = $response['data']['city'];	
			$donar_details[0]['mobile_no'] = (int)$response['data']['mobile_no'];	
			$donar_details[0]['alternate_no'] = (int)$response['data']['Alt_No'];	
			$donar_details[0]['email_id'] = $response['data']['email'];
			$this->db->insert_batch('donor_details', $donar_details);
			$user[0]['email'] = $response['data']['email'];
			$user[0]['password'] = sha1($response['data']['pass1']);
			$user[0]['user_name'] = $response['data']['username'];
			$user[0]['first_name'] = $response['data']['first_name'];
			$user[0]['last_name'] = $response['data']['last_name'];
			$this->db->insert_batch('accounts', $user);
			$response['success'] = 'true';
			print_r(json_encode($response));
		} else {
			print_r (json_encode($response));
		}
	}
	
}
