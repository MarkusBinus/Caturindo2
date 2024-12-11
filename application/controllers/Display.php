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

		// http://192.169.9.8:2024/print-label?delivery-due-date=2024-09-30&order-number=2PVF2151000080&
		// order-qty=240&delivery-slip=Y0B766710728883&nama-produk=SEAL%2CGUARD&nomor-part=2PVF2151000080
		$supplier_code = $this->input->get('supplier-code');
		$delivery_due_date = $this->input->get('delivery-due-date');
        $order_number = $this->input->get('order-number');
        $order_qty = $this->input->get('order-qty');
		$no_lot = $this->input->get('no-lot');
        $delivery_slip = $this->input->get('delivery-slip');
        $nama_produk = $this->input->get('nama-produk');
        $nomor_part = $this->input->get('nomor-part');
		$standar_packing = $this->input->get('$standar_packing');
		

        // Debugging: Cek apakah data diambil dengan benar
        log_message('debug', 'Delivery Due Date: ' . $delivery_due_date);
        log_message('debug', 'Order Number: ' . $order_number);
        log_message('debug', 'Order Qty: ' . $order_qty);
        log_message('debug', 'Delivery Slip: ' . $delivery_slip);
        log_message('debug', 'Nama Produk: ' . $nama_produk);
        log_message('debug', 'Nomor Part: ' . $nomor_part);
		log_message('debug', 'No Lot:' .$no_lot);\
		log_message('debug', 'No Lot:' .$supplier_code);

        // Siapkan data untuk ditampilkan
		$data = [
			'supplier_code' => $supplier_code,
            'delivery_due_date' => $delivery_due_date,
            'order_number' => $order_number,
            'order_qty' => $order_qty,
            'delivery_slip' => $delivery_slip,
            'nama_produk' => $nama_produk,
            'nomor_part' => $nomor_part,
			'no_lot' => $no_lot,
			'$standar_packing' => $standar_packing,


            'full_labels' => 16 // Misalnya, jumlah label yang ingin ditampilkan
        ];

        $this->load->view('print_label', $data);

	}	

	public function getSession($key){

		return $this->session->userdata($key);

	}

	public function import_data(){

		$data_history = $this->DBProduksi->get_all_history_mrp();

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
		
		$data['id_tbl_delivery'] = $this->input->get('id_tbl_delivery');
		$data['delivery_due_date'] = $this->input->get('delivery-due-date');
		$data['order_number'] = $this->input->get('order-number');
		$data['order_qty'] = $this->input->get('order-qty');
		$data['delivery_slip'] = $this->input->get('delivery-slip');
		$data['nama_produk'] = $this->input->get('nama-produk');
		$data['nomor_part'] = $this->input->get('nomor-part');
		$data['no_lot'] = $this->input->get('no-lot');
		$data['supplier_code'] = $this->input->get('supplier-code');
		$data['user_code'] = $this->input->get('user-code');
		$data['kode_produk'] = $this->input->get('kode-produk');

		//AMBIL UNIT
		$conditions = [
			"id" => $data['id_tbl_delivery']
		];
		$unit = $this->DBProduksi->get_data('dbo.table_delivery', $conditions);
		$first_row_unit = $unit[0];

		$data['jenis_kemasan'] = $first_row_unit->unit;

		//AMBIL STANDAR PACKING
		$conditions = [
						"KODE_PRODUK" => $data['kode_produk'], 
						"USER_CODE" => $data['user_code']
					];
		$std_packing = $this->DBProduksi->get_data('dbo.table_std_packing', $conditions);
		$first_row = $std_packing[0];
				
		$data['standar_packing'] = $first_row->QTY_PACK;
		$data['show_modal'] = true;
		$this->load->view('form_input', $data);
	}
	
	
	public function home(){

		$us_type = $this->getSession('user_type');

		if($us_type == 'admin'){

			$this->load->view('home_admin');
			
		}else {

			$data = array(
				'user_modal' => $us_type
			);

			$this->load->view('home', $data);

		}
	}

	
}
