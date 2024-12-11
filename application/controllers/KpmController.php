<?php

class KpmController extends CI_Controller {

    public function __construct(){
		parent::__construct();
		$this->load->model('KpmModel');
        $this->load->model('DBProduksi');
        $this->load->model('DBCar');
	}

    public function get_sisa_pack() {
        // echoAlert('tes');
        $idkpp_kedua = (int) ltrim($this->input->get('idkpp_kedua'), '0');
        $idkpp_pertama = (int) ltrim($this->input->get('idkpp_pertama'), '0');
        $kode_produk = $this->input->get('kode_produk');
        
        if (!$idkpp_kedua || !$idkpp_pertama) {
            echo json_encode(['error' => 'ID KPP tidak valid']);
            return;
        }

        $conditions = [
                        "IDKPP" => $idkpp_kedua
                    ];

        $cek_kode_produk = $this->DBCar->get_data('car.dbo.T_WIP', $conditions);
        // var_dump("EHEHEHE".$cek_kode_produk);
        $first_row_kode_produk = $cek_kode_produk[0];
        if ($first_row_kode_produk->KODE_PRODUK !== $kode_produk){
            echo json_encode(['error' => 'Kode produk tidak sama', 'status' => '404', 'kode_produk' => $first_row_kode_produk]);
            return;
        }else{
            $data = $this->KpmModel->getSisaPackByIdkpp($idkpp_kedua);

            if ($data) {
                echo json_encode(['sisa_pack' => $data->sisa_pack]);
            } else {
                echo json_encode(['error' => 'Data tidak ditemukan', 'data_sisa_pack' => $data]);
            }
        }
    }
}
