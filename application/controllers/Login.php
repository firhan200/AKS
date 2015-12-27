<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

	public function index(){
		$this->sessionIn(); //check session
		$this->load->view('login_page');
	}

	public function loginProcess(){
		$this->load->model('Crud'); //load model
		$email = $this->input->post('email');
		$password = md5($this->input->post('password'));
		$query = $this->Crud->read('petugas', array('email'=>$email, 'password'=>$password), null, null);
		if($query->num_rows()==0){
			redirect(site_url('').'?balasan=1');
		}else{
			$this->load->driver('session'); //activate session
			foreach($query->result() as $result){
				$id_user = $result->idpetugas;
				$kategori = $result->kategori;
			}
			$this->session->set_userdata('iduser', $id_user);
			$this->session->set_userdata('levelaks', $kategori);
			if($kategori==1){
				redirect(site_url('admin/dashboard'), 'refresh');
			}else{
				redirect(site_url('kasir/transaksi'), 'refresh');
			}
		}
	}

	public function logoutProcess(){
		$this->load->driver('session'); //activate session
		$this->session->unset_userdata('iduser');
		$this->session->unset_userdata('levelaks');
		redirect(site_url(''), 'refresh');
	}
}