<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function create($table, $data){
		$query = $this->db->insert($table, $data);
		return $query;
	}

	function read($table, $cond, $ordField, $ordType){
		if($cond!=null){
			$this->db->where($cond);
		}
		if($ordField!=null){
			$this->db->order_by($ordField, $ordType);
		}
		$query = $this->db->get($table);
		return $query;
	}

	function readPaging($table, $cond, $ordField, $ordType, $limit, $start){
		if($cond!=null){
			$this->db->where($cond);
		}
		if($ordField!=null){
			$this->db->order_by($ordField, $ordType);
		}
		$query = $this->db->get($table, $limit, $start);
		return $query;
	}

	function totalData($table){
		$query = $this->db->get($table);
		return $query->num_rows();
	}

	function update($cond, $table, $data){
		$this->db->where($cond);
		$query = $this->db->update($table, $data);
		return $query;
	}

	function delete($cond, $table){
		$this->db->where($cond);
		$query = $this->db->delete($table);
		return $query;
	}
}