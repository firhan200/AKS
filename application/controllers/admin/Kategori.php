<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

	public function index(){
		$data['tab2'] = true; 
		$this->load->view('admin/kategori_halaman', $data);
	}
}