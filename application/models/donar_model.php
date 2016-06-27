<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Donar_model extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	public function getCountry(){
		$sql = 'SELECT DISTINCT country  FROM country order by id';
		$result = $this->db->query($sql);
		return $result->result_array();
	}

	public function getState($country = ''){
		$sql = 'SELECT DISTINCT state  FROM country where country.country = "'.$country.'" order by state asc';
		$result = $this->db->query($sql);
		return $result->result_array();
	}

	public function getDistrict($state = ''){
		$sql = 'SELECT DISTINCT district  FROM country where country.state = "'.$state.'" order by district asc';
		$result = $this->db->query($sql);
		return $result->result_array();
	}

	public function getCity($district = ''){
		$sql = 'SELECT DISTINCT city  FROM country where country.district = "'.$district.'" order by city asc';
		$result = $this->db->query($sql);
		return $result->result_array();
	}

	public function saveData($data = ''){
		$response['success'] = 'false';
		$response['message'] = 'something Went Wrong';
		
		if(isset($data)) {
			if(isset($data['first_name']) && !empty($data['first_name'])){
				$response['data']['first_name'] = $data['first_name'];
			} else {
				$response['message'] = 'Enter First Name';
				return $response;
			}

			if(isset($data['last_name']) && !empty($data['last_name'])){
				$response['data']['last_name'] = $data['last_name'];
			} else {
				$response['message'] = 'Enter Last Name';
				return $response;
			}

			if(isset($data['gender']) && !empty($data['gender'])){
				$response['data']['gender'] = $data['gender'];
			} else {
				$response['message'] = 'Enter Gender';
				return $response;
			}

			if(isset($data['DOB']) && !empty($data['DOB'])){
				$response['data']['DOB'] = $data['DOB'];
			} else {
				$response['message'] = 'Enter Date of Birth';
				return $response;
			}

			if(isset($data['blood_group']) && !empty($data['blood_group'])){
				$response['data']['blood_group'] = $data['blood_group'];
			} else {
				$response['message'] = 'Select Blood Group';
				return $response;
			}

			if(isset($data['Address']) && !empty($data['Address'])){
				$response['data']['Address'] = $data['Address'];
			} else {
				$response['message'] = 'Enter Address';
				return $response;
			}

			if(isset($data['country']) && !empty($data['country'])){
				$response['data']['country'] = $data['country'];
			} else {
				$response['message'] = 'Select Country';
				return $response;
			}

			if(isset($data['state']) && !empty($data['state'])){
				$response['data']['state'] = $data['state'];
			} else {
				$response['message'] = 'Select State';
				return $response;
			}

			if(isset($data['district']) && !empty($data['district'])){
				$response['data']['district'] = $data['district'];
			} else {
				$response['message'] = 'Select District';
				return $response;
			}

			if(isset($data['city']) && !empty($data['city'])){
				$response['data']['city'] = $data['city'];
			} else {
				$response['message'] = 'Select City';
				return $response;
			}

			if(isset($data['mobile_no']) && !empty($data['mobile_no'])){
				if(strlen($data['mobile_no']) == 10) {
					$response['data']['mobile_no'] = $data['mobile_no'];
					if(!empty($data['Alt_No'])) {
						if(strlen($data['Alt_No']) == 10) {
							$response['data']['Alt_No'] = $data['Alt_No'];
						} else {
							$response['message'] = 'Enter 10 digit Alternate Mobile Number';
							return $response;		
						}
					} else{
						$response['data']['Alt_No'] = $data['Alt_No'];	
					}	
				} else {
					$response['message'] = 'Enter 10 digit Mobile Number';
					return $response;
				}
			} else {
				$response['message'] = 'Enter Mobile Number';
				return $response;
			}

			if(isset($data['email']) && !empty($data['email'])){
				$response['data']['email'] = $data['email'];
			} else {
				$response['message'] = 'Enter Email Id';
				return $response;
			}

			if(isset($data['username']) && !empty($data['username'])){
				$response['data']['username'] = $data['username'];
			} else {
				$response['message'] = 'Enter User Name';
				return $response;
			}

			if(isset($data['pass1']) && !empty($data['email'])){
				$response['data']['pass1'] = $data['pass1'];
			} else {
				$response['message'] = 'Enter Password';
				return $response;
			}

			if(isset($data['pass2']) && !empty($data['pass2'])){
				if($data['pass1'] == $data['pass2']) {
					if(strlen($data['pass1']) >= 6) {
						$response['data']['pass2'] = $data['pass2'];
					} else {
						$response['message'] = 'Password Should be more than 5 Character';
						return $response;
					}
				} else {
					$response['message'] = 'Password Should not Match';
					return $response;
				}
			} else {
				$response['message'] = 'Enter Email Id';
				return $response;
			}

			$response['success'] = true;
			return $response;
		} else {
			$response['message'] = "Please enter all the data";
			return $response;	
		}
	}
}

