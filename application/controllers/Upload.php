<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('DBProduksi'); // Memuat model DBProduksi
    }

    public function upload_image() {
        // Memeriksa apakah ada data yang diupload
        if ($this->input->post()) {
            $uploader_name = $this->input->post('uploader_name');

            $ket = $this->input->post('keterangan');
            $nama_dest = $this->input->post('dest');

            $file = $_FILES['data-delivery'];

            // Validasi file
            if ($file['error'] === UPLOAD_ERR_OK) {
                $file_name = $file['name'];
                $file_size = $file['size'];
                $file_tmp = $file['tmp_name'];

                $namaFolder = "uploads/before-after-part/" . $nama_dest . "/";

                // Pindahkan file ke direktori yang diinginkan
                move_uploaded_file($file_tmp, $namaFolder . $file_name);

                // Siapkan data untuk disimpan
                $data = array(
                    'file_name' => $file_name,
                    'file_size' => $file_size,
                    'folder'    => $nama_dest,
                    'upload_time' => date('Y-m-d H:i:s'),
                    'uploader_name' => $uploader_name,
                    'keterangan'    => $ket
                );

                // Panggil metode insert_image_data dari model
                if ($this->DBProduksi->insert_image_data($data)) {
                    $this->session->set_flashdata('message', 'Upload berhasil!');
                } else {
                    $this->session->set_flashdata('message', 'Gagal menyimpan data gambar.');
                }
            } else {
                $this->session->set_flashdata('message', 'Kesalahan saat mengupload file.');
            }
            redirect('import_image'); // Redirect ke halaman import_image setelah upload
        }
    }
}
