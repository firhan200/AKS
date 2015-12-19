<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

	public function index(){
		$data['tab5'] = true; 
		$this->load->view('kasir/transaksi_halaman', $data);
	}
}