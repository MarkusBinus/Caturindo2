<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PackingController extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('DBProduksi'); // Memuat model DBProduksi
    }

    public function index() {
        // Ambil data dari model
        $data['std_packing'] = $this->DBProduksi->get_all_std_packing();

        // Kirim data ke view
        $this->load->view('std_packing_view', $data);
    }
}