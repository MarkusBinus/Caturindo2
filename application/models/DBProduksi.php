<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DBProduksi extends CI_Model {

    private $table_std_packing     = "dbo.table_std_packing";
    private $table_record_predelivery    = "dbo.table_record_predelivery";
    private $table_user     = "dbo.table_user";
    private $table_delivery = "dbo.table_delivery";
    private $table_no_lot   = "dbo.table_no_lot";
    private $table_image_upload   = "dbo.table_image_upload";
    private $table_history_upload   = "dbo.table_history_upload";

        function __construct(){
         
        parent::__construct();
        $this->db = $this->load->database('default', TRUE);

        }

        // data no lot pernah terisi
        public function get_data_no_lot_exist($kodeidkpp){

            // hanya muncul jika data packing
            // bukan 0
            $result = false;

            $data = array(
                'qty_pack !=' => 0,
                'idkpp' => $kodeidkpp 
            );

            $query = $this->db->get_where($this->table_no_lot, $data);
            
            if ($query->num_rows() > 0) {
                $result = true;
            }

            return $result;
    
        }


        public function get_all_history_image(){

        
        $hasil = false;

        $query = $this->db->get($this->table_image_upload);

        if($query){
            $hasil = $query->result();
        }

        return $hasil;


    }

 public function get_all_history_mrp(){

        
        $hasil = false;

        $query = $this->db->get($this->table_history_upload);

        if($query){
            $hasil = $query->result();
        }

        return $hasil;


    }

    public function update_pickup($condition, $data){

		//  condition is partno
		
		$this->db->where($condition);
        $this->db->update($this->table_delivery, $data);
		
		if($this->db->affected_rows() >= 1){
			return true;
		}
		
		return false;


    }

    public function insert_record_predelivery($data){

        $this->db->insert($this->table_record_predelivery, $data);

        $hasil = true;

        return $hasil;

    }

    public function insert_no_lot_data($data){

        $this->db->insert($this->table_no_lot, $data);

        $hasil = true;

        return $hasil;

    }

    public function insert_history_data($data){

        $this->db->insert($this->table_history_upload, $data);

        $hasil = true;

        return $hasil;

    }

    public function insert_image_data($data){

        $this->db->insert($this->table_image_upload, $data);

        $hasil = true;

        return $hasil;

    }

    public function insert($data){

        $this->db->insert($this->table_name, $data);

        $hasil = true;

        return $hasil;

    }
	
	public function update($data, $id){
		$condition = array('id' => $id);
		
		// data is array
		
		$this->db->where($condition);
        $this->db->update($this->table_name, $data);
		
		if($this->db->affected_rows() >= 1){
			return true;
		}
		
		return false;
		
	}
	
	public function delete($id){

		$this->db->where('id', $id);
        $this->db->delete($this->table_name);

        $rowsAffected = $this->db->affected_rows(); 
		
		if($rowsAffected>=1){
			return true;
		}
		
		return false;
		
	}

     public function get_data_delivery_by($dataFind){

        // datafind is array key matched
        $endResult = array(
            'id'    => '',
            'delivery_due_date' => '',
            'item_number' => '',
            'item_name' => '',
            'user_code' => '',
            'order_number' => '',
            'order_quantity' => '',
            'delivery_slip_no' => ''
        );

      $this->db->select('id, delivery_slip_no, order_quantity, order_number, user_code, item_name, item_number,  delivery_due_date');
      $this->db->from($this->table_delivery);
      $this->db->order_by('id', 'desc');
      $this->db->where($dataFind);
      $this->db->limit(10);

        $query = $this->db->get();

        $result = false;

        if($query){
            $result = $query->result();
        }

        return $result;


    }

    public function check_duplicate_predelivery($dataFind){

      $this->db->select('id, delivery_slip_no, order_number, part_no,  qrcode_kemasan');
      $this->db->from($this->table_record_predelivery);
      $this->db->order_by('id', 'desc');
      $this->db->where($dataFind);
      $this->db->limit(1);

        $query = $this->db->get();

        $result = false;

        if($query){
            $result = $query->row();
        }

        return $result;


    }

     public function get_data_predelivery_by($dataFind){


        // datafind is array key matched
        $endResult = array(
            'id'    => '',
            'pickup' => '',
            'item_number' => '',
            'item_name' => '',
            'user_code' => '',
            'order_number' => '',
            'order_quantity' => '',
            'unit' => '',
            'packing_capacity' => '',
            'delivery_slip_no' => ''
        );

      $this->db->select('id, pickup, item_number, item_name, user_code, order_number, order_quantity, unit, packing_capacity, delivery_slip_no');
      $this->db->from($this->table_delivery);
      $this->db->order_by('id', 'desc');
      $this->db->where($dataFind);
      $this->db->limit(100);

        $query = $this->db->get();

        $result = false;

        if($query){
            $result = $query->result();
        }

        return $result;


    }


    public function get_singledata_std_packing_by($dataFind){


        $this->db->select('id, kode_produk, user_code, qty_pack');
      $this->db->from($this->table_std_packing);
      $this->db->order_by('id', 'desc');
      $this->db->where($dataFind);
    
        $query = $this->db->get();

        $result = false;

        if($query){
            $result = $query->row();
        }

        return $result;

    }

    public function get_singledata_predelivery_by($dataFind){


        // datafind is array key matched
        $endResult = array(
            'id'    => '',
            'item_number' => '',
            'item_name' => '',
            'user_code' => '',
            'order_number' => '',
            'order_quantity' => ''
        );

      $this->db->select('id, item_number, item_name, user_code, order_number, order_quantity');
      $this->db->from($this->table_delivery);
      $this->db->order_by('id', 'desc');
      $this->db->where($dataFind);
    

        $query = $this->db->get();

        $result = false;

        if($query){
            $result = $query->row();
        }

        return $result;


    }


    public function get_avatar_by_id($id){

        // mengambil avatar terbaru
        $data = array(
            'id'             => $id
        );

        $result = '';
        $this->db->where($data);
        $query = $this->db->get($this->table_name);

        if($query){
            $rest = $query->row();

            $result = $rest->avatar;

        } 
        
        return $result;


    }

    public function is_duplicate($dataArray){

        // no_lot tidak boleh dipakai 2x
        $hasil = false;

        $this->db->where($dataArray);
        $query = $this->db->get($this->table_no_lot);

        if($query){
            $rest = $query->result();

            foreach($rest as $row){
				
                $hasil = true;
				break;
            }

        }


        return $hasil;


    }

    public function update_avatar($dataArray){

        $this->db->where('id', $dataArray['id']);
        $this->db->update($this->table_name, $dataArray);
        
        return $this->db->affected_rows();

    }

    public function update_avatar_session(){
        $this->akses->update_avatar();
        redirect('/settings');
    }

    public function verifikasi($nama_panggilan, $pass){

        $data = array(
            'username'    => $nama_panggilan,
            'pass'              => $pass
        );

        // periksa apakah user dan pass ini ada di table user?
        $valid = false;
        $this->db->where($data);
        $query = $this->db->get($this->table_user);

        if($query){
            $rest = $query->result();

            foreach($rest as $row){
				
                $valid = true;
				break;
            }

        } else { 
            $valid = false;
        }
        
        return $valid;

    }

    public function getBy($needed, $col, $val){

        $data = array(
            $col             => $val
        );

        // periksa apakah user dan pass ini ada di table user?
        $result = '';
        $this->db->where($data);
        $query = $this->db->get($this->table_name);

        if($query){
            $rest = $query->result();

            foreach($rest as $row){
                $result = $row->$needed;
                
                break;
            }

        } 
        
        return $result;

    }

	public function getByEmail($col, $email){

        $data = array(
            'email'             => $email
        );

        // periksa apakah user dan pass ini ada di table user?
        $result = '';
        $this->db->where($data);
        $query = $this->db->get($this->table_name);

        if($query){
            $rest = $query->result();

            foreach($rest as $row){
				$result = $row->$col;
				
				break;
            }

        } 
        
        return $result;

    }
	
	public function getSpecific($id){

        $data = array(
            'id'             => $id
        );

        // periksa apakah user dengan id ini ada di table?
       
        $this->db->where($data);
        $query = $this->db->get($this->table_name);

       if ($query->num_rows() > 0) {
            return $query->row(); 
        } 
        
        return false;

    }

    public function getSpecificBy($col, $value){

        $data = array(
            $col => $value
        );

        // periksa apakah user dengan id ini ada di table?
       
        $this->db->where($data);
        $query = $this->db->get($this->table_name);

       if ($query->num_rows() > 0) {
            return $query->row(); // return only a row
        } 
        
        return false;

    }

    public function getSpecificByFilter($arrayIn){

       
        $this->db->where($arrayIn);
        $query = $this->db->get($this->table_name);

       if ($query->num_rows() > 0) {
            return $query->row(); // return only a row
        } 
        
        return false;

    }


	
    public function getAllLimitBy($numeric) {
        
        $this->db->limit($numeric);

        $query = $this->db->get($this->table_name);
        
         if ($query->num_rows() > 0) {
            return $query->result(); // Returns an array of objects representing the result set
        } else {
            return false;
        }
        
    }

	public function getAll() {
        $query = $this->db->get($this->table_name);
		
		 if ($query->num_rows() > 0) {
            return $query->result(); // Returns an array of objects representing the result set
        } else {
            return false;
        }
		
    }

	public function getTotalData() {
        // Replace 'your_table_name' with the actual name of your database table
        $total_records = $this->db->count_all($this->table_name);
        return $total_records;
    }

}