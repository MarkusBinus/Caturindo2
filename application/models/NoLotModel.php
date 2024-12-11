<?php
class NoLotModel extends CI_Model {

    public function get_sisa_pack($idkpp) {
        $this->db->select('sisa_pack');
        $this->db->from('table_no_lot');
        $this->db->where('idkpp', $idkpp);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row()->sisa_pack;
        } else {
            return 0;
        }
    }
} 