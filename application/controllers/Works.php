<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Works extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('DBProduksi');
		$this->load->model('DBCar');

	}

	public function converting_txt_to_csv(){

		$hasil = false;

		if ($this->input->post()) {
			$file = $_FILES['data-delivery'];
			$file_name = $file['name'];
			$file_tmp = $file['tmp_name'];

			$namaFolder = "uploads/data-mrp/";
			$tujuanFileUpload = $namaFolder . $file_name;
			move_uploaded_file($file_tmp, $tujuanFileUpload);
		
		$nama_file_txt = $tujuanFileUpload;
		$final_csv = 'uploads/data-mrp/final.csv';
		
		echo $final_csv;

		//$result_csv = $this->reading_txt($nama_file_txt);

		if(($handle = fopen($nama_file_txt, 'r')) !== false){
			if(($handle2 = fopen($final_csv, 'w'))  !== false){
				while(($line = fgets($handle)) !== false){
					//$line = trim($line);
					$data = preg_split('/[\t,]+/', $line);

					// bersihkan tanda petik
					$data = str_replace('"', '', $data);

					fputcsv($handle2, $data);
					$hasil = true;
				}

				fclose($handle2);
			}
			fclose($handle);
		}

		

		}

		return $hasil;

	}


	public function save_record_predelivery(){

		$dsn = $this->input->post('delivery_slip_no');
      	$onr = $this->input->post('order_number');
      	$prno = $this->input->post('part_no');
		$qrcke = $this->input->post('qrcode_kemasan');

		$entry = array(
			'delivery_slip_no' => $dsn,
			'order_number' => $onr,
			'part_no' => $prno,
			'qrcode_kemasan' => $qrcke
		);

		

		$hasil = $this->DBProduksi->insert_record_predelivery($entry);
				
		if($hasil){
			echo "valid";
		}else{
			echo "invalid";
		}


	}

	public function check_record_duplicate_predelivery(){

		$qr = $this->input->post('qrcode');

		$data = array(
			'qrcode_kemasan' => $qr			
		);

		$hasil = $this->DBProduksi->check_duplicate_predelivery($data);

		if(!$hasil){
			echo "valid";
		}else {
			echo "invalid";
		}

	}

	public function update_pickup_status_predelivery(){

		$prno = $this->input->post('part_no');
		$dvs = $this->input->post('delivery_slip_no');

		$pencarian = array(
			'item_number' => $prno,
			'delivery_slip_no' => $dvs,
			'pickup' => 0
		);

		$dataPickup = array(
			'pickup' => 1
		);
		$hasil = $this->DBProduksi->update_pickup($pencarian, $dataPickup);

		if($hasil){
			echo "valid";
		}else{
			echo "invalid";
		}

	}

	public function output_process_detail_predelivery(){

		$partno = $this->input->get('partno');
		$scan = $this->input->get('scan');



		$dataCari = array(
			'item_number' => $partno
		);

		$hasil = $this->DBProduksi->get_singledata_predelivery_by($dataCari);

		$us_code = '';
		if(isset($hasil->user_code)){
			$us_code = $hasil->user_code;
		}
		
		$dataCariUserCode = array(
			'user_code'=> $us_code
		);

		$hasil2 = $this->DBProduksi->get_singledata_std_packing_by($dataCariUserCode);

		$hasil_bagi = 0;
		if(isset($hasil)){
			$hasil_bagi = $hasil->order_quantity / $hasil2->qty_pack;
		}

		//echo var_dump($hasil);

		$data = array(
			'partno' => $partno,
			'data' => $hasil,
			'data2' => $hasil2,
			'hasil_bagi' => $hasil_bagi,
			'scan' => $scan
		);

		$this->load->view('output_predelivery_detail', $data);

	}

	public function process_plan_tanggal_predelivery(){


		$tgl = $this->input->get('tanggal');

		$filter = array(
			'delivery_due_date' => $tgl
		);

		
		$hasil = $this->DBProduksi->get_data_predelivery_by($filter);

		//echo var_dump($hasil);

		if($hasil != false){

			$data = array(
				'data_predelivery' => $hasil,
				'tanggal_predelivery' => $tgl
			);

			
		}else {

			$data = array(
				'tanggal_predelivery' => $tgl
			);

			
		}

		$this->load->view('output_predelivery', $data);

	}

	public function check_no_lot_packing(){

		$idkpp = $this->input->post('idkpp');

		$data = array();

		$hasil = $this->DBProduksi->get_data_no_lot_exist($idkpp);

		if($hasil){
			echo "valid";
		}else{
			echo "invalid";
		}

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

		$n = str_replace(".txt", ".csv", $n);

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

		
		$url = '/home/?user_type=' . $us_type;
		
		redirect($url, 'refresh');

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


}
