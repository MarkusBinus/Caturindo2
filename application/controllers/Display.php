<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Display extends CI_Controller {

	public function __construct(){
		parent::__construct();
		
		$this->load->model('DBProduksi');
		$this->load->model('DBCar');
		
	}

	public function setSession($key, $val){
	
		$this->session->set_userdata($key, $val);	
		
	}
	

	public function print_label(){

		$data = array();



		$this->load->view('print_label');

	}	

	public function getSession($key){

		return $this->session->userdata($key);

	}

	private function reformatting_date($tgl){

		$timestamp = strtotime($tgl);
		$tglBaru = date('d-M-Y', $timestamp);
		
		return $tglBaru;

	}

	public function import_data(){

		$data_history = $this->DBProduksi->get_all_history_mrp();

		$i = 0;

		foreach($data_history as $data){

			if(!empty($data->tanggal_upload)){
				$tglNa = $data->tanggal_upload;
				$tglBaru = $this->reformatting_date($tglNa);
				$data->tanggal_upload = $tglBaru;
				$data_history[$i] = $data;
			}

			$i++;

		}

		$data = array(
			'upload_history' => $data_history
		);

		$this->load->view('import_data', $data);
	
	}
	public function import_image(){

		$data_history_image = $this->DBProduksi->get_all_history_image();

		$data = array();

		$data['upload_history'] = $data_history_image;

		$this->load->view('import_image', $data);
	
	}

	public function form_user(){

		$this->load->view('form_user');
	
	}
	
	public function finished(){

		$d = $this->input->get('delivery_due_date');
		$i = $this->input->get('item_number');
		$in = $this->input->get('item_name');
		$uc = $this->input->get('user_code');
		$on = $this->input->get('order_number');
		$oq = $this->input->get('order_quantity');
		$ds = $this->input->get('delivery_slip_no');

		$data = array(
			'delivery_due_date' => $d,
			'item_number' => $i,
			'item_name' => $in,
			'user_code' => $uc,
			'order_number' => $on,
			'order_quantity' => $oq,
			'delivery_slip_no' => $ds
		);

		$this->load->view('finished', $data);
	
	}
	
	public function output(){

		$us = $this->getSession('user_type');

		$data = array(
			'user_type' => $us
		);
		
		$idkpp_generated = $this->input->get('idkpp_generated');
		$submat = $this->input->get('submat');
		$idkpp = $this->input->get('idkpp');
		$no_lot = $this->input->get('no_lot');
		$partno = $this->input->get('partno');
		$partname = $this->input->get('partname');
		$jumlah = $this->input->get('jumlah');

		if(!isset($idkpp)){
			$idkpp = 0;
		}

		if(!isset($no_lot)){
			$no_lot = 0;
		}

		if(!isset($partno)){
			$partno = 0;
		}

		if(!isset($partname)){
			$partname = 0;
		}

		if(!isset($jumlah)){
			$jumlah = 0;
		}
		
		$hasil = $this->DBCar->getDataOutput($idkpp);
		
		$data['idkpp'] = $idkpp;
		$data['no_lot'] = $no_lot;
		$data['partno'] = $partno;
		$data['partname'] = $partname;
		$data['jumlah'] = $jumlah;
		$data['idkpp_generated'] = $idkpp_generated;
		

		$dataQuery = array(
			'idkpp' 		=> $idkpp,
			'no_lot'		=> $no_lot,
			'kode_submat' 	=> $submat,
			'qty_qc'		=> $jumlah
		);

		$hasil = $this->DBProduksi->insert_no_lot_data($dataQuery);
		
		//echo var_dump($hasil);
		$this->load->view('output', $data);
	
	}

	public function login(){

		$this->load->view('login');
	
	}

	public function form_input() {
		$data['delivery_due_date'] = $this->input->get('delivery-due-date');
		$data['order_number'] = $this->input->get('order-number');
		$data['order_qty'] = $this->input->get('order-qty');
		$data['delivery_slip'] = $this->input->get('delivery-slip');
		$data['nama_produk'] = $this->input->get('nama-produk');
		$data['nomor_part'] = $this->input->get('nomor-part');

		$data['show_modal'] = true;
		$this->load->view('form_input', $data);
	}
	
	
	public function home(){

		$us_type = $this->input->get('user_type');

		if($us_type == 'admin'){

			$this->load->view('home_admin');
			
		}else {

			
			$nama_modal = "#modal_" . $us_type;
			
			$data = array(
				'modal_trigger' => $nama_modal,
				'user_modal' => $us_type
			);

			$this->load->view('home', $data);

		}
	}

	
}
