<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DBCar extends CI_Model {

	private $table_name 		= "car.dbo.Temp_Order";
	private $table_CAR_PRODUK 	= "car.dbo.CAR_PRODUK";
	private $table_CAR_STDLOT 	= "car.dbo.CAR_STDLOT";
	private $table_T_WIP 		= "car.dbo.T_WIP";


	function __construct(){
		 
            parent::__construct();
            //load our second db and put in $db2
            $this->db2 = $this->load->database('otherdb', TRUE);
        }
 
     public function check()
     {
     	$connected = $this->db2->initialize();
  		if (!$connected) {
  			echo "failed";

		} else{
			echo "success";
		}
     }

	public function get(){

		$sql = "SELECT * FROM car.dbo.temp_order";
		$query = $this->db2->query($sql);

        if($query->num_rows > 0){
        	return $query->rows();
        }

        return false;

	}

	private function checkEmptyData($array) {
		  $isEmpty = true;
		  foreach ($array as $value) {
		    if (!empty($value)) {
		      $isEmpty = false;
		      break;
		    }
		  }
		  return $isEmpty;
}

	function generateKPMNumber($number) {
  		$prefix = 'P';
  		$padding = 10; // adjust this to change the padding length
  		$formattedNumber = str_pad($number, $padding, '0', STR_PAD_LEFT);
  		return $prefix . $formattedNumber;
	}

	public function getDataOutput($dicari){


		// we create the result here manually
		$endResult = array(
			'idkpp' 		=> '',
			'kode_produk' 	=> '',
			'qtyinfna' 		=> '',
			'kode_submat' 	=> '',
			'partno'		=> '',
			'partname'		=> '',
			'kpmno'			=> $this->generateKPMNumber($dicari)
		);

		


		// #01 first request
		$data = array(
			'idkpp' => $dicari
		);

		$this->db2->limit(1);
		$query = $this->db2->get_where($this->table_T_WIP, $data);

		if ($query->num_rows() > 0) {
			$endResult['idkpp'] = $dicari;
			$endResult['kode_produk'] = $query->row()->KODE_PRODUK;
			$endResult['qtyinfna'] = $query->row()->QTYINFNA;
		}

		// #02 second request
		$data = array(
			'kode_produk' => $endResult['kode_produk']
		);

		$this->db2->limit(1);
		$query = $this->db2->get_where($this->table_CAR_PRODUK, $data);

		if ($query->num_rows() > 0) {
			$endResult['partno'] = $query->row()->PARTNO;
			$endResult['partname'] = $query->row()->PARTNAME;
		}
		
		// #03 third request
		$data = array(
			'kode_produk' => $endResult['kode_produk']
		);

		$this->db2->limit(1);
		$query = $this->db2->get_where($this->table_CAR_STDLOT, $data);

		if ($query->num_rows() > 0) {
			$endResult['kode_submat'] = $query->row()->KODE_SUBMAT;
		}

		// works for select all with limit
		//$this->db2->limit(1);
        //$query = $this->db2->get($this->table_T_WIP);

		 if (!$this->checkEmptyData($endResult)) {
		 	 //mysql_free_result($query); 
            return $endResult; 
        } else {
            return false;
        }

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

	public function delete_all(){

        $this->db->delete($this->table_name);

        $rowsAffected = $this->db->affected_rows(); 
		
		if($rowsAffected>=1){
			return true;
		}
		
		return false;
		
	}
   
	
	public function getSpecific($id){

        $data = array(
            'id'             => $id
        );

        // periksa apakah user dengan id ini ada di table?
       
        $this->db->where($data);
        $query = $this->db->get($this->table_name);

       if ($query->num_rows() > 0) {
            return $query->row(); // return only a row
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
	
	public function getAllLimitBy($numeric) {
        
        $this->db->limit($numeric);

        $query = $this->db->get($this->table_name);
        
         if ($query->num_rows() > 0) {
            return $query->result(); // Returns an array of objects representing the result set
        } else {
            return false;
        }
        
    }


	public function getAllLimitSortBy($numeric, $descAsc) {
        
        $this->db->limit($numeric);
        $this->db->order_by('id', $descAsc);

        $query = $this->db->get($this->table_name);
        
         if ($query->num_rows() > 0) {
            return $query->result(); // Returns an array of objects representing the result set
        } else {
            return false;
        }
        
    }


   
	public function getAll() {
		
		$this->db2->limit(1);
        $query = $this->db2->get($this->table_T_WIP);

		 if ($query->num_rows() > 0) {
		 	 //mysql_free_result($query); 
            return $query->result(); // Returns an array of objects representing the result set
        } else {
            return false;
        }


		
    }

	public function get_data($table, $conditions = [], $select = '*', $limit = null, $offset = null, $order_by = null, $group_by = null){
        // Mulai query ke tabel
        $this->db->select($select);
        $this->db->from($table);
    
        // Apply kondisi jika ada
        if (!empty($conditions)) {
            $this->db->where($conditions);
        }
    
        // Apply limit dan offset jika ada
        if ($limit) {
            $this->db->limit($limit);
        }
        if ($offset) {
            $this->db->offset($offset);
        }
    
        // Apply order_by jika ada
        if ($order_by) {
            $this->db->order_by($order_by);
        }
    
        // Apply group_by jika ada
        if ($group_by) {
            $this->db->group_by($group_by);
        }
    
        // Eksekusi query
        $query = $this->db->get();
    
        // Jika ada hasil, kembalikan hasilnya
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

	

}