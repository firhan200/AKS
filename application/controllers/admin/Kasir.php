<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kasir extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Crud');
	}

	public function index(){
		$data['tab4'] = true; 
		$data['query'] = $this->Crud->read('petugas', null, 'idpetugas', 'ASC');
		$this->load->view('admin/kasir_halaman', $data);
	}

	public function addPetugas()
	{
		$nama_petugas = $this->input->post('nama');
		$email_petugas = $this->input->post('email');
		$kategori_petugas = $this->input->post('kategoripetugas');
		$password_petugas = md5($this->input->post('password'));
		$data = array('nama'=>$nama_petugas, 'email'=>$email_petugas, 'password'=>$password_petugas, 'kategori'=>$kategori_petugas);
		$insert = $this->Crud->create('petugas', $data);
		redirect(($_SERVER['HTTP_REFERER']), 'refresh');
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
		$query = $this->Crud->read('petugas', array('idpetugas'=>$id), null, null);
		foreach($query->result() as $result){
			$data = array('nama'=>$result->nama, 'email'=>$result->email, 'kategori'=>$result->kategori);
		}
		header('Content-Type: application/json');
		echo json_encode($data); 
		
	}

	public function updatePetugas($id)
	{
		$nama_petugas = $this->input->post('nama');
		$email_petugas = $this->input->post('email');
		$kategori_petugas = $this->input->post('kategoripetugas');
		$data = array('nama'=>$nama_petugas, 'email'=>$email_petugas, 'kategori'=>$kategori_petugas);
		$update = $this->Crud->update(array('idpetugas'=>$id), 'petugas', $data);
		if($update){
			echo 1;
		}else{
			echo 2;
		}
	}

	public function deletePetugas($id)
	{
		$delete = $this->Crud->delete(array('idpetugas'=>$id), 'petugas');
		redirect(($_SERVER['HTTP_REFERER']), 'refresh');
	}
}