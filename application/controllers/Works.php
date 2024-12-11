<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Works extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('DBProduksi');
		$this->load->model('DBCar');

	}

	public function check_duplicate_no_lot(){

		$n = $this->input->post('no_lot');

		$data = array(
			'no_lot' => $n
		);

		$hasil = $this->DBProduksi->is_duplicate($data);

		if($hasil){
			echo "valid";
		}else{
			echo "invalid";
		}

	}

	public function test(){
		//echo var_dump($this->DBProduksi->getAll());
		echo var_dump($this->DBCar->getAll());
	}

	public function reading_csv(){

		$k = $this->input->post('keterangan');
		$u = $this->input->post('username');
		$t = date('Y-m-d');

		$s = $_FILES['data-delivery']['size'];
		$n = $_FILES['data-delivery']['name'];

		$data = array(
			'nama_file' => $n,
			'besar_file' => $s,
			'tanggal_upload' => $t,
			'username' => $u,
			'keterangan' => $k
		);

		$this->DBProduksi->insert_history_data($data);

		$this->load->view('reading_csv');

	}

	public function request_delivery_all(){

		$partno = $this->input->post('partno');

		$dataFind = array(
			'item_number'	=> $partno,
			'supplier_information' => ''
		);

		$hasil = $this->DBProduksi->get_data_delivery_by($dataFind);
		
		if($hasil != false){
			echo json_encode($hasil);
		}else{
			echo "invalid";
		}

	}

	public function request_packing_detail(){

		$idkpp = $this->input->post('idkpp');

		$hasil = $this->DBCar->getDataOutput($idkpp);
		
		if($hasil != false){
			echo json_encode($hasil);
		}else{
			echo "invalid";
		}

	}

	public function insert_user(){

		$username 	= $this->input->post('username');
		$pass 		= $this->input->post('pass');
		$email 		= $this->input->post('email');
		$divisi 	= $this->input->post('divisi');

		$data = array(
			'username' 	=> $username,
			'pass'		=> $pass,
			'email'		=> $email,
			'divisi'	=> $divisi
		);

		//$this->DBProduksi->insert($data);
		
		redirect('/home', 'refresh');

	}
	
	public function verify(){
		
		$us_type = $this->input->post('user_type');

		$us = $this->input->post('username');
		$pass = $this->input->post('pass');

		$hasil = $this->DBProduksi->verifikasi($us, $pass);

		if($hasil==false){

			redirect('/login?status=error', 'refresh');

		}else{

		$this->setSession('user_type', $us_type);
		
		redirect('/home', 'refresh');

		}
		
	}

	public function logout(){

		$this->session->sess_destroy();

		redirect('/login', 'refresh');

	}
	
	public function setSession($key, $val){
	
		$this->session->set_userdata($key, $val);	
		
	}	


	public function getSession($key){

		return $this->session->userdata($key);

	}

	// Markus
	public function check_no_lot_packing() {

		$idkpp = $this->input->post('idkpp');

		$data = array();

		$hasil = $this->DBProduksi->get_data_no_lot_exist($idkpp);

		if($hasil){ // data ada = true ---- data tidak ada = false
			echo "valid";
		}else{
			echo "invalid";
		}
	}


}
