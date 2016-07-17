<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	public function userName($data){
		$response['success'] = 'false';
		$response['message'] = 'something Went Wrong';
		
		$sql = 'SELECT *   FROM accounts where accounts.email = "'.$data['username'].'"';
		$result = $this->db->query($sql);
		$userData = $result->result_array());
		if(isset($userData) {
			if(sha1($data['password'] === $userData['password'])) {
				
			}
		} else {
			$response['message'] = 'EMail Id Does not Exit';
			return $response;
		}
		return $result->result_array();
	}

}
?>