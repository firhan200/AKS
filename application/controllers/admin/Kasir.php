<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kasir extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

	public function index(){
		$data['tab4'] = true; 
		$this->load->view('admin/kasir_halaman', $data);
	}
}