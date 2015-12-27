<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Crud');
	}

	public function index(){
		$data['tab2'] = true; 
		$data['query'] = $this->Crud->read('kategori', null, 'idkategori', 'DESC');
		$this->load->view('admin/kategori_halaman', $data);
	}

	public function cekData($table, $field, $data){
		$match = $this->Crud->read($table, array($field=>$data), null, null);
		if($match->num_rows() > 0){
			$report = 2;
		}else{
			$report = 1;
		}
		echo $report;
	}

	public function getData($id){
		$query = $this->Crud->read('kategori', array('idkategori'=>$id), null, null);
		foreach($query->result() as $result){
			$nama_kategori = $result->nama;
		}
		echo $nama_kategori;
	}

	public function insert(){
		$kategori = $this->input->post('nama');
		$data = array('nama'=>$kategori);
		$insert = $this->Crud->create('kategori', $data);
		redirect(($_SERVER['HTTP_REFERER']), 'refresh');
	}

	public function update($id){
		$kategori = $this->input->post('nama');
		$data = array('nama'=>$kategori);
		$update = $this->Crud->update(array('idkategori'=>$id), 'kategori', $data);
		if($update){
			echo 1;
		}else{
			echo 2;
		}
	}

	public function delete($id){
		$delete = $this->Crud->delete(array('idkategori'=>$id), 'kategori');
		redirect(($_SERVER['HTTP_REFERER']), 'refresh');
	}
}