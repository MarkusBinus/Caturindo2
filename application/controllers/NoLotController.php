<?php
class NoLotController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('NoLotModel');
    }

    public function get_sisa_pack() {
        $idkpp = $this->input->get('idkpp');
        $sisa_pack = $this->NoLotModel->get_sisa_pack($idkpp);
        echo json_encode(['sisa_pack' => $sisa_pack]);
    }
} 