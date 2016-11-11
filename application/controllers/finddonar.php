<?php 
   class Finddonar extends CI_Controller {
  
     public function __construct() {
		parent::__construct();
	}

	public function index() {
		$this->load->model('Donar_model');
		$data['country'] = $this->Donar_model->getCountry();
		$data['donor_details'] = $this->Donar_model->getData();
		$this->load->view('find_donar', $data);
	}
	
}
