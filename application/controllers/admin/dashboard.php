<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct() {
		parent::__construct();
		
	}

	public function index() {
		$this->load->model('Dashboard_model');
		$data['users'] = $this->Dashboard_model->getUsersCount();
		$data['donar'] = $this->Dashboard_model->getDonarCount();
		$data['blood_request'] = $this->Dashboard_model->getBloodRequestCount();
		$data['active_donar'] = $this->Dashboard_model->getActiveDonarCount();
		$data['active_request'] = $this->Dashboard_model->getActiveBloodRequestCount();
		// echo "<pre>";
		// print_r($data);exit();
		$this->load->view('admin/dashboard', $data);
	}
}