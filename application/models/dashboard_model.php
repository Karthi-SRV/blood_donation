<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model {

	public function __construct() {
		parent::__construct();
	}

	public function getUsersCount() {
		$sql = 'SELECT COUNT(email) AS users  FROM accounts ';
		$result = $this->db->query($sql);
		return $result->result_array();
	}

	public function getDonarCount() {
		$sql = 'SELECT COUNT(*) AS total FROM donor_details ';
		$result = $this->db->query($sql, [1]);
		return $result->result_array();
	}

	public function getBloodRequestCount() {
		$sql = 'SELECT COUNT(*) AS total FROM blood_request';
		$result = $this->db->query($sql);
		return $result->result_array();
	}

	public function getActiveDonarCount() {
		$sql = 'SELECT COUNT(*) AS total FROM donor_details where status = 1';
		$result = $this->db->query($sql);
		return $result->result_array();
	}

	public function getActiveBloodRequestCount() {
		$sql = 'SELECT COUNT(*) AS total FROM blood_request where status = 1';
		$result = $this->db->query($sql);
		return $result->result_array();
	}
}