<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Konfirmasi Print</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Link to external CSS file -->
	 <style>
		* {
    box-sizing: border-box;
    margin: 0;
    padding: 1px;
}

body {
    background-color: #FAFAFA;
    font-family: "Tahoma", sans-serif;
    font-size: 14px;
    line-height: 1.2;
}

@page {
    size: A4;
    margin: 0; /* Menghilangkan margin default */
}

.page {
    width: 21cm; /* Lebar A4 */
    height: 29.7cm; /* Tinggi A4 */
    margin: 0 0;
    background: white;
}

.label-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    width: 100%;
    height: 100%;
    padding: 0.8cm; /* Padding di sekitar halaman */
    page-break-after: always;
}

.label {
    width: 47%; /* Lebar label tetap 48% untuk 2 label per baris */
    height: 24.5%; /* Tinggi label ditingkatkan agar lebih besar ke bawah */
    margin-bottom: 0.5cm;
    margin-top: 0.1cm;
    /* Jarak antar label */
    padding: 7px; /* Padding normal */
    border: 2px solid black;
    font-family: 'Times New Roman', Times, serif;
    font-weight: bold;
    font-size: 13px; /* Ukuran font disesuaikan */
    box-sizing: border-box;
    page-break-inside: avoid;
}
.label-qrcode-img {
    width: 47%; /* Lebar label tetap 48% untuk 2 label per baris */
    height: 24.5%; /* Tinggi label ditingkatkan agar lebih besar ke bawah */
    margin-bottom: 0.9cm;
    margin-top: 0.5cm;
    /* Jarak antar label */
    padding: 7px; /* Padding normal */
    border: 2px solid black;
    font-family: 'Times New Roman', Times, serif;
    font-weight: bold;
    font-size: 13px; /* Ukuran font disesuaikan */
    box-sizing: border-box;
    page-break-inside: avoid;
}

.header {
    text-align: center;
    font-weight: bold;
    margin-top: -17px;
    border-bottom: 1px solid black;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
}

.header img {
    margin-left: -80px; /* Menggeser logo ke kiri */
    width: 30px; /* Ukuran logo lebih kecil */
    height: 40px;
    margin-bottom: -9px;
    border-right: 2px solid black;
}
.header-sisa img {
    margin-left: -91px; /* Menggeser logo ke kiri */
    width: 40px; /* Ukuran logo lebih kecil */
    height: 40px;
    margin-bottom: -7px;
    border-right: 2px solid black;
}

.header h3 {
    font-family: 'Times New Roman', Times, serif;
    font-weight: bold;
    font-size: 20px;
    margin-right: -80px;
    padding-left: 10px;
    padding-top: 15px;
}

.content {
    margin-left: -3px;
    margin-bottom: -6px;
    font-size: 14px;
    font-family: 'Times New Roman', Times, serif;
}

.content div {
    display: flex;
    justify-content: space-between;
    padding: 2px 0;
}

.content div span:first-child {
    width: 55%;
}

.content div span:last-child {
    width: 88%;
    text-align: left;
    border-bottom: 2px solid black;
}

.footer {
    margin-top: 0px;
    display: flex;
    justify-content: center; /* Memposisikan footer di tengah */
    align-items: center; /* Vertikal center */
}

.footer table {
    margin-top: 10px;
    width: 100%;
    height: 100px;
    border: none;
    border-bottom: 2px solid black;
    border-collapse: collapse;
    font-size: 12px;
    font-family: 'Times New Roman', Times, serif;
}
.info-table {
    width: 70%;
    border-collapse: collapse;
    font-size: 12px;
    font-family: 'Times New Roman', Times, serif;
}

.footer table td {
    padding: 8px;
    border: 2px solid black;
    text-align: center; /* Center text and images */
    vertical-align: middle; /* Center vertically */
}

.footer img {
    height: 104px;
    width: 100%; /* Ukuran QR Code lebih kecil */
}

.qrcode-container {
    width: 100%;
    text-align: center;
    vertical-align: middle;
}

.qrcode-img {
    position: relative;
    top: -6px; /* Sesuaikan nilai ini untuk menimpa garis */
    left: 55px;
    width: 125px; /* Sesuaikan ukuran */
    height: 112px; /* Sesuaikan ukuran */
    display: block;
    margin: 0 auto;
    border: 2px solid black; /* Tambahkan border jika diperlukan */
}

@media print {
    body {
        margin: 0;
    }

    .label-container {
        page-break-after: always;
    }
}

.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgba(0, 0, 0, 0.4); /* Black w/ opacity */
}

.modal-content {
    background-color: #fefefe;
    margin: 15% auto; /* 15% from the top and centered */
    padding: 20px;
    border: 1px solid #888;
    width: 300px; /* Adjust width as needed */
    border-radius: 8px; /* Rounded corners */
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); /* Shadow effect */
}

.modal-title {
    font-weight: bold; /* Bold title */
    margin-bottom: 10px; /* Space below title */
}

.modal-footer {
    display: flex;
    justify-content: space-between; /* Space between buttons */
    margin-top: 20px; /* Space above buttons */
}

.btn-secondary, .btn-primary {
    padding: 10px 15px; /* Padding for buttons */
    border: none; /* Remove border */
    border-radius: 4px; /* Rounded corners */
    cursor: pointer; /* Pointer cursor on hover */
}

.btn-secondary {
    background-color: #6c757d; /* Gray background */
    color: white; /* White text */
}

.btn-primary {
    background-color: #007bff; /* Blue background */
    color: white; /* White text */
}

.btn-secondary:hover {
    background-color: #5a6268; /* Darker gray on hover */
}

.btn-primary:hover {
    background-color: #0056b3; /* Darker blue on hover */
}

.header-sisa {
    margin-left: -90px; /* Menggeser logo ke kiri */
    width: 30px; /* Ukuran logo lebih kecil */
    height: 40px;
    margin-bottom: -7px;
    border-right: 2px solid black
}

.label-header-sisa {
    width: 80%; /* Lebar label tetap 48% untuk 2 label per baris */
    height: 24.5%; /* Tinggi label ditingkatkan agar lebih besar ke bawah */
    margin-bottom: -0.1cm;
    margin-top: 0.5cm;
    /* Jarak antar label */
    padding: 7px; /* Padding normal */
    font-family:'Times New Roman', Times, serif;
    font-weight: bold;
    font-size: 10px; /* Ukuran font disesuaikan */
    box-sizing: border-box;
    page-break-inside: avoid;
}

.qr-code-table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 10px;
}

.qr-code-table td {
    border: 1px solid black;
    padding: 5px;
    text-align: center;
    vertical-align: middle;
}

.qr-code-cell img {
    width: 100%;
    height: 100%;
    display: block;
    margin: 0 auto;
}

	 </style>
    <title>Label</title>
</head>
<body>

<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// Include library phpqrcode
include "../phpqrcode/qrlib.php";

// Variabel data (gunakan data asli Anda)
$nama_part = isset($nama_produk) ? $nama_produk : 'Default Nama Part';
$no_part = isset($nomor_part) ? $nomor_part : 'Default No Part';
$no_lot = isset($no_lot) ? $no_lot : 'Default No Lot';
$delivery_due_date = isset($delivery_due_date) ? $delivery_due_date : date('d F Y');
$standar_packing = isset($standar_packing) ? $standar_packing : 'Default Packing';
$jenis_kemasan = isset($jenis_kemasan) ? $jenis_kemasan : 'Default Kemasan';
$delivery_ship_no = isset($delivery_slip) ? $delivery_slip : 'Default Slip No';

// Cek apakah data tidak kosong
if (empty($nama_part) || empty($no_part)) {
    echo "Data tidak ditemukan untuk label.";
    exit;
}

// Direktori QR Code
$qr_dir = FCPATH . "assets/qrcodes/";
if (!is_dir($qr_dir)) {
    mkdir($qr_dir, 0755, true); // Buat folder jika belum ada
}

// Jumlah label per halaman
$full_labels = 8; // Sesuaikan kebutuhan

// Debugging: cek apakah kita memiliki data yang benar
// echo "Nama Part: $nama_part, No. Part: $no_part, No. Lot: $no_lot, Tanggal Pengiriman: $delivery_due_date <br>";

$remaining_units = isset($remaining_units) ? $remaining_units : 0;

// Generate label
for ($label = 1; $label <= $full_labels; $label++):
    $label_number = sprintf("%02d", $label); // Format nomor label menjadi dua digit

    // Isi QR Code
    $isi = "7667\n" 
        . $no_part . ' ' . $nama_part . ' ' . $standar_packing . '-' 
        . $jenis_kemasan . ' ' . $delivery_ship_no . '-' . $label_number 
        . ' ' . $no_lot . ' ' . $delivery_due_date;

    // Nama file QR Code
    $fileName = $qr_dir . "qrcode_$label_number.png";

    // Generate QR Code jika belum ada
    if (!file_exists($fileName)) {
        QRcode::png($isi, $fileName);
        // echo "QR Code untuk label $label_number berhasil dibuat.<br>";  // Debugging
    } else {
        // echo "QR Code untuk label $label_number sudah ada.<br>";  // Debugging
    }

    ?>

    <?php if (($label - 1) % 8 == 0): ?>
        <div class="label-container"> <!-- Awal halaman baru setiap 8 label -->
    <?php endif; ?>

    <div class="label">
            <div class="header">
                <img src="assets/images/logo2.jpg" alt="Logo" class="<?php echo ($label == $full_labels && $remaining_units > 0) ? 'header-sisa' : ''; ?>">
                <h3 class="<?php echo ($label == $full_labels && $remaining_units > 0) ? 'label-header-sisa' : 'label-header'; ?>">
                    <?php if ($label == $full_labels && $remaining_units > 0): ?>
                        LABEL PART SISA
                    <?php else: ?>
                        PT. CATURINDO AGUNGJAYA RUBBER
                    <?php endif; ?>
                </h3>
            </div>

            <div class="content">
                <div><span>NAMA PART</span><span>:</span> <span><?= isset($nama_produk) ? $nama_produk : ''; ?></span></div>
                <div><span>NO. PART</span><span>:</span> <span><?= isset($nomor_part) ? $nomor_part : ''; ?></span></div>
                <div><span>NO. LOT</span><span>:</span> <span><?php echo isset($no_lot) ? htmlspecialchars($no_lot) : 'Data tidak ditemukan'; ?></span></div>
                <div><span>TGL. PENGIRIMAN</span><span>:</span> 
                    <span>
                        <?php 
                        if (!empty($delivery_due_date)) { 
                            echo htmlspecialchars($delivery_due_date);
                        } else {
                            echo 'Data tidak ditemukan';
                        }
                        ?>
                    </span>
                </div>
                <div><span>QTY</span><span>:</span> <span><?= isset($order_qty) ? $order_qty : ''; ?></span></div>
            </div>

            <div class="footer">
                <table>
                    <tr style="border-left: none;">
                        <td style="border: none; display: flex; justify-content: space-between; padding: 2px; vertical-align: top; text-align: left; font-size: 13px; font-family: 'Times New Roman', Times, serif;">
                            <div><span>JUDGEMENT</span></div>
                        </td>
                        <td style="border: none; font-size: 13px; padding: 2px; padding-left: 53px; font-family: 'Times New Roman', Times, serif; text-align: left; vertical-align: top; justify-content: space-between;">
                            <div><span>:</span></div>
                        </td>
                        <td style="border: none;"></td>
                        <td rowspan="6" style="text-align: right; vertical-align: top;">
                            <img src="<?= base_url("assets/qrcodes/qrcode_$label_number.png"); ?>" alt="QR Code"
                            style="display: block; margin: 0 auto;">
                        </td>
                    </tr>
                    <tr>
                        <td rowspan="3" style="vertical-align: top; border-bottom: none; font-size: 12px; font-family: 'Times New Roman', Times, serif;">REMARK</td>
                        <td colspan="2" style="text-align: center; padding: 2px 0; font-size: 12px; font-family: 'Times New Roman', Times, serif;">
                            <div><span>VENDOR SECTION</span></div>
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: center; font-size: 12px; padding: 2px 0; font-family: 'Times New Roman', Times, serif;">
                            <div><span>APPROVED BY</span></div>
                        </td>
                        <td style="text-align: center; font-size: 12px; padding: 2px 0; font-family: 'Times New Roman', Times, serif;">
                            <div><span>ISSUED BY</span></div>
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: center;" rowspan="3">&nbsp;</td>
                        <td style="text-align: center;" rowspan="3">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="border: none; border-left: 2px solid black;"></td>
                    </tr>
                    <tr>
                        <td style="font-size: 20px; text-align: left; border-bottom: none; border-top: none;"><?php echo sprintf("%02d", $label_number); ?></td>
                    </tr>
                </table>
            </div>
        </div>

    <?php if ($label % 8 == 0 || $label == $full_labels): ?>
        </div> <!-- Tutup halaman setiap 8 label -->
    <?php endif; ?>

<?php endfor; ?>


</body>
</html>