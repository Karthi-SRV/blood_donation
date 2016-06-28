<?php 
   class Blog extends CI_Controller {
  
     public function __construct() {
		parent::__construct();
	}

	public function index() {
		$this->load->model('Blog_model');
		$data['blog']= $this->Blog_model->getBlog();
		$this->load->view('blog', $data);
	}
	
}
