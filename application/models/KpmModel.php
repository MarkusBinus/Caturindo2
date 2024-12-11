<?php

class KpmModel extends CI_Model {

    function __construct(){
         
    parent::__construct();
        $this->db = $this->load->database('default', TRUE);
    }

    public function getSisaPackByIdkpp($idkpp) {
        try {
            // echoAlert('tes');
            $this->db->select('sisa_pack');
            $this->db->from('dbo.table_no_lot'); // Pastikan nama tabel benar
            $this->db->where('idkpp', $idkpp);
            
            $query = $this->db->get();
    
            return $query->row();
        } catch (Exception $e) {
            echo "error". $e->get_message();
        }
        
    }
}
