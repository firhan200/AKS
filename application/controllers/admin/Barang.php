<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

	public function index(){
		$data['tab3'] = true; 
		$this->load->view('admin/barang_halaman', $data);
	}
}