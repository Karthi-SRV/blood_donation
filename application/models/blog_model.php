<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_model extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	public function getBlog(){
		$sql = 'SELECT *   FROM blog order by posted_date desc';
		$result = $this->db->query($sql);
		return $result->result_array();
	}

}
?>