<head>
    <!-- Tambahkan ini di bagian head -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<style>

.form-container-form-input {
    max-width: 600px;
    margin: 2rem auto;
    padding: 2rem;
    background-color: #f9f9f9;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.form-group-form-input {
    margin-bottom: 1rem;
}

.form-group-form-input label {
    display: block;
    font-weight: 600;
    margin-bottom: 0.5rem;
}

.form-input-field-form-input {
    width: 100%;
    padding: 0.5rem;
    border: 1px solid #ced4da;
    border-radius: 4px;
    font-size: 1rem;
}

.btn-form-input {
    padding: 0.5rem 1rem;
    font-size: 1rem;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.btn-primary-form-input {
    background-color: #007bff;
    color: #fff;
}

.btn-secondary-form-input {
    background-color: #6c757d;
    color: white;
}
    /* CSS untuk styling .form-input modal */
    #form-input-modal.modal {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 1050;
    }
    #form-input-modal .modal-content {
        width: 100%;
        width: 500px;
        background-color: white;
        border-radius: 8px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        padding: 1.5rem;
    }
    @keyframes slideInFormModal {
        from { transform: translateY(-20px); opacity: 0; }
        to { transform: translateY(0); opacity: 1; }
    }
    #form-input-modal .modal-header {
        height: 78px;
        font-size: 30px;
        display: flex;
        justify-content: space-between;
        align-items: center;:
        padding-bottom: 1rem;
        border-bottom: 2px solid black;
    }
    #form-input-modal .modal-body {
        padding: 3rem 0;
        font-size: 1.2rem;
    }
    #form-input-modal .modal-footer {
        display: flex;
        justify-content: flex-end;
        gap: 0.5rem;
    }
    #form-input-modal .close {
        background: none;
        border: none;
        font-size: 1.5rem;
        cursor: pointer;
    }

/* Modal KPM Part Sisa */

#kpm-part-sisa-modal.modal {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 1051;
}

#kpm-part-sisa-modal .modal-content {
    border: 3px solid;
    width: 100%;
    width: 500px;
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
    padding: 1.5rem;
    animation: slideInKpmModal 0.3s ease;
}

@keyframes slideInKpmModal {
    from { transform: translateY(-20px); opacity: 0; }
    to { transform: translateY(0); opacity: 1; }
}

#kpm-part-sisa-modal .modal-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-bottom: 1rem;
    border-bottom: 1px solid #dee2e6;
}

#kpm-part-sisa-modal .modal-header h5 {
    margin: 0;
    font-size: 1.25rem;
    color: #343a40;
}

#kpm-part-sisa-modal .close {
    background: none;
    border: none;
    font-size: 1.5rem;
    color: #6c757d;
    cursor: pointer;
}

#kpm-part-sisa-modal .modal-body {
    padding: 1rem 0;
    font-size: 1rem;
    color: #495057;
}

#kpm-part-sisa-modal .form-group {
    margin-bottom: 1rem;
}

#kpm-part-sisa-modal .form-group label {
    font-weight: 500;
    color: #495057;
}

#kpm-part-sisa-modal .form-group input {
    width: 100%;
    padding: 0.5rem;
    border: 1px solid #ced4da;
    border-radius: 4px;
    font-size: 1rem;
}

#kpm-part-sisa-modal .form-group input::placeholder {
    color: #6c757d;
    opacity: 0.8;
}

#kpm-part-sisa-modal .modal-footer {
    display: flex;
    justify-content: flex-end;
    gap: 0.5rem;
    padding-top: 1rem;
    border-top: 1px solid #dee2e6;
}

#kpm-part-sisa-modal .btn {
    padding: 0.5rem 1rem;
    font-size: 1rem;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.2s;
}

#kpm-part-sisa-modal .btn-secondary {
    background-color: #6c757d;
    color: #ffffff;
    border: none;
}

#kpm-part-sisa-modal .btn-secondary:hover {
    background-color: #5a6268;
}

#kpm-part-sisa-modal .btn-primary {
    background-color: #007bff;
    color: #ffffff;
    border: none;
}

#kpm-part-sisa-modal .btn-primary:hover {
    background-color: #0056b3;
}
#kpm-part-sisa-modal .btn-no {
      background-color: #6c757d;
      color: white;
    }
#kpm-part-sisa-modal .btn-yes {
      background-color: #007bff;
      color:  #007bff;
    }

/* Styling untuk modal konfirmasi (modal 3) */
#confirmationModal .modal {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 1050;
}

#confirmationModal .modal-dialog {
    display: flex;
    align-items: center; /* Vertikal tengah */
    justify-content: center; /* Horizontal tengah */
    height: 100%; /* Pastikan modal dialog mengisi tinggi */
    
}

#confirmationModal .modal-content {
    border: 3px solid;
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
    padding: 1.5rem;
}

#confirmationModal .modal-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-bottom: 1rem;
    border-bottom: 1px solid #dee2e6;
}

#confirmationModal .modal-body {
    padding: 1rem 0;
    font-size: 1rem;
    color: #495057;
}

#confirmationModal .modal-footer {
    display: flex;
    justify-content: flex-end;
    gap: 0.5rem;
    padding-top: 1rem;
    border-top: 1px solid #dee2e6;
}

/* Styling untuk tombol */
#confirmationModal .btn {
    padding: 0.5rem 1rem;
    font-size: 1rem;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.2s;
}

#confirmationModal .btn-secondary {
    background-color: #6c757d;
    color: #ffffff;
    border: none;
}

#confirmationModal .btn-secondary:hover {
    background-color: #5a6268;
}

#confirmationModal .btn-primary {
    background-color: #007bff;
    color: #ffffff;
    border: none;
}

#confirmationModal .btn-primary:hover {
    background-color: #0056b3;
}

/* Modal Konfirmasi */
#confirmationModal.modal {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 1050; /* Pastikan z-index lebih tinggi dari elemen lain */
}

#confirmationModal .modal-content {
    border: 3px solid;
    width: 100%;
    max-width: 500px; /* Sesuaikan lebar modal */
    background-color: #ffffff; /* Warna latar belakang */
    border-radius: 8px; /* Radius border */
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15); /* Bayangan */
    padding: 1.5rem;
}

#confirmationModal .modal-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-bottom: 1rem;
    border-bottom: 1px solid #dee2e6;
}

#confirmationModal .modal-body {
    padding: 1rem 0;
    font-size: 1rem;
    color: #495057;
}

#confirmationModal .modal-footer {
    display: flex;
    justify-content: flex-end;
    gap: 0.5rem;
    padding-top: 1rem;
    border-top: 1px solid #dee2e6; /* Garis atas */
}

/* Styling untuk tombol */
#confirmationModal .btn {
    padding: 0.5rem 1rem;
    font-size: 1rem;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.2s;
}

#confirmationModal .btn-secondary {
    background-color: #6c757d;
    color: #ffffff;
    border: none;
}

#confirmationModal .btn-secondary:hover {
    background-color: #5a6268;
}

#confirmationModal .btn-primary {
    background-color: #007bff;
    color: #ffffff;
    border: none;
}

#confirmationModal .btn-primary:hover {
    background-color: #0056b3;
}

</style>


<div class="form-container-form-input">
        <div class="form-group-form-input">
            <label for="nama-part">Nama Part</label>
            <input type="text" id="nama-part" name="nama-part" class="form-input-field-form-input" 
                   value="<?= isset($nama_produk) ? $nama_produk : '' ?>">
        </div>
        <div class="form-group-form-input">
            <label for="nomor-part">Nomor Part</label>
            <input type="text" id="nomor-part" name="nomor-part" class="form-input-field-form-input" 
                   value="<?= isset($nomor_part) ? $nomor_part : '' ?>">
        </div>
        <div class="form-group-form-input">
            <label for="no-lot">Nomor Lot</label>
            <input type="text" id="no-lot" name="no-lot" class="form-input-field-form-input"
                    value="<?= isset($no_lot) ? $no_lot : '' ?>">
        </div>
        <div class="form-group-form-input">
            <label for="tgl-pengiriman">Tanggal Pengiriman</label>
            <input type="text" id="tgl-pengiriman" name="tgl-pengiriman" class="form-input-field-form-input" 
                   value="<?= isset($delivery_due_date) ? $delivery_due_date : '' ?>">
        </div>
        <div class="form-group-form-input">
            <label for="standar-packing">Standar Packing</label>
            <input type="text" id="standar-packing" name="standar-packing" class="form-input-field-form-input" 
                   value="<?= isset($standar_packing) ? $standar_packing : '' ?>">
        </div>
        <div class="form-group-form-input">
            <label for="jumlah">QTY</label>
            <input type="text" id="jumlah" name="jumlah" class="form-input-field-form-input" 
                   value="<?= isset($order_qty) ? $order_qty : '' ?>">
        </div>
        <div class="form-group-form-input">
            <label for="jenis-kemasan">Jenis Kemasan</label>
            <input type="text" id="jenis_kemasan" name="jenis_kemasan" class="form-input-field-form-input" 
                   value="<?= isset($jenis_kemasan) ? $jenis_kemasan : '' ?>">
        </div>
        <div class="form-group-form-input">
            <label for="delivery-slip">Delivery Slip No</label>
            <input type="text" id="delivery-slip" name="delivery-slip" class="form-input-field-form-input" 
                   value="<?= isset($delivery_slip) ? $delivery_slip : '' ?>">
        </div>
        <div class="form-group-form-input">
            <label for="supplier_code">Supllier code</label>
            <input type="text" id="supplier_code" name="supplier_code" class="form-input-field-form-input" 
                   value="<?= isset($supplier_code) ? $supplier_code : '' ?>">
        </div>

        <button type="submit" class="btn-form-input btn-primary-form-input">Submit</button>
    </form>
</div>


<!-- <div id="form-input-modal" class="modal" style="display: none;">
    <div class="modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Konfirmasi</h5>
                <button type="button" class="close" onclick="closeModalFormInput()">&times;</button>
            </div>
            <div class="modal-body">
                <p>Apakah ada Part Sisa?</p>
            </div>
            <div class="modal-footer">
                <button type="button" id="no-btn" class="btn btn-secondary" onclick="closeModalFormInput()">No</button>
                <button type="button" id="yes-btn" class="btn btn-primary" onclick="handleYesFormInput()">Yes</button>
            </div>
        </div>
    </div>
</div>

<!- Modal 1 -->
<div id="form-input-modal" class="modal" style="display:none;">
    <div class="modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Konfirmasi</h5>
                <button type="button" class="close" onclick="closeModalFormInput()">&times;</button>
            </div>
            <div class="modal-body">
                <div>
                    <label for="idkpp">KPM No Part Sisa</label>
                    <input type="text" id="no-kpm-input" class="form-input">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="no-btn" class="btn btn-secondary" onclick="redirectToPrintLabel()">No</button>
                <button type="button" id="yes-btn" class="btn btn-primary" onclick="handleYesFormInput()">Yes</button>
            </div>
        </div>
    </div>
</div>

<?php include('modal_part_sisa_form_input.php'); ?>

<!-- Modal 3 -->
<div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel" aria-hidden="true" style="display:none;">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Konfirmasi</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">&times;</button>
            </div> 
            <div class="modal-body">
                <p>Print Label?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onClick="closeModalFormInput()">No</button>
                <button type="button" class="btn btn-primary" onclick="redirectToPrint()">Yes</button>
            </div>
        </div> 
    </div>
</div>


<!-- Proses pengambilan idkpp utama -->
<!-- <div id="kpm-part-sisa-modal" class="modal" style="display: none;">
    <div class="modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Part Sisa</h5>
                <button type="button" class="close" onclick="closeKpmModal()">&times;</button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="idkpp">No KPM</label>
                    <input type="text" id="idkpp-part-sisa" required readonly name="idkpp" class="form-input" placeholder="00000000">
                </div>
                <div class="form-group">
                    <label for="qty-part-sisa">Jumlah Part Sisa</label>
                    <input type="number" id="qty-part-sisa" name="qty-part-sisa" class="form-input" placeholder="0000">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" onclick="closeKpmModal()">Batal</button>
                <button type="button" class="btn btn-primary" onclick="submitPartSisa()">Simpan</button>
            </div>
        </div>
    </div>
</div> -->

<?php if (isset($show_modal) && $show_modal): ?>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById('form-input-modal').style.display = 'flex';
        });
    </script>
<?php endif; ?>


<script>
    window.onload = function () {
    const focusElementId = sessionStorage.getItem('focusElement');
    if (focusElementId) {
        const element = document.getElementById(focusElementId);
        if (element) {
            element.focus();
        }
        sessionStorage.removeItem('focusElement'); // Hapus setelah digunakan
        }
    };

    function redirectToFormInputModal(id) {
        document.getElementById(id).style.display = 'none';
        document.getElementById('form-input-modal').style.display = 'flex';
    }

    function redirectToPrintLabel() {
        // Alihkan ke halaman print-label
        window.location.href = 'print-label';
    }

    function closeModalFormInput() {
        // Tutup modal tanpa melakukan pengalihan
        document.getElementById('form-input-modal').style.display = 'none';
    }

    function handleYesFormInput() {
        // handleYesFormInput()
        var noKpmValue = document.getElementById('no-kpm-input').value;
        document.getElementById('idkpp-part-sisa').value = noKpmValue;
        

        fetchSisaPack(noKpmValue);
        
    }

    document.addEventListener('keydown', function (event) {
        if (event.key === 'Enter') {
            event.preventDefault(); // Hindari perilaku default
            document.getElementById('yes-btn').click(); // Panggil fungsi tombol Yes
        }
    });

    function submitPartSisa() {
        // Ambil nilai dari input "Jumlah Part Sisa"
        const jumlahPartSisa = document.getElementById('qty-part-sisa').value;
        
        // Logika untuk menggunakan jumlahPartSisa
        console.log("Jumlah Part Sisa:", jumlahPartSisa);
        
        // Menutup modal 2
        closeKpmModal();
        
        // Menampilkan modal 3
        document.getElementById('confirmationModal').style.display = 'block';
    }
    // function showKpmModal() {
    //     let idkpp = localStorage.getItem('idkpp-chawnima');
    //     document.getElementById('idkpp-part-sisa').value = idkpp;
    //     document.getElementById('kpm-part-sisa-modal').style.display = 'flex';
    // }

    // Close the KPM Part Sisa modal
    function closeKpmModal() {
        document.getElementById('kpm-part-sisa-modal').style.display = 'none';
    }
    // function submitPartSisa() {
    //     try{
    //         const noKpm = document.getElementById('idkpp').value ?? '';
    //         const jumlahPartSisa = document.getElementById('qty_part_sisa').value ?? '';
    //         console.log("No KPM:", noKpm);
    //         console.log("Jumlah Part Sisa:", jumlahPartSisa);
    //         closeKpmModal();
    //     }catch (err){
    //         console.log(err)
    //     }
        
    // }

    function redirectToPrint() {
    try {
        // Ambil nilai dari elemen input dan trim untuk menghapus spasi
        const idkpp = encodeURIComponent(getParams('idkpp'));
        const supplier_code = encodeURIComponent(document.getElementById('supplier_code').value.trim());
        const deliveryDueDate = encodeURIComponent(document.getElementById('tgl-pengiriman').value.trim()); // Tanggal Pengiriman
        const order_number = encodeURIComponent(getParams('order-number')); // Nomer order
        const orderQty = encodeURIComponent(document.getElementById('jumlah').value.trim()); // QTY
        const deliverySlip = encodeURIComponent(document.getElementById('delivery-slip').value.trim()); // Delivery Slip No
        const namaProduk = encodeURIComponent(document.getElementById('nama-part').value.trim()); // Nama Part
        const nomorPart = encodeURIComponent(document.getElementById('nomor-part').value.trim()); // Nomor Part
        const noLot = encodeURIComponent(getParams('no-lot')); // Pastikan no-lot juga di-encode

        const jumlah = encodeURIComponent(getParams('jumlah')); // Tetap seperti ini
        const jumlahNumber = parseInt(jumlah, 10) || 0; // Konversi ke angka untuk perhitungan

        const standarPacking = <?= isset($_SESSION['standar_packing']) ? json_encode($_SESSION['standar_packing']) : '"Data tidak tersedia"'; ?>;

        // Ambil nilai part sisa dari input di modal
        const partSisaInput = document.getElementById('qty-part-sisa');
        const partSisa = parseInt(partSisaInput.value.trim(), 10) || 0; // Konversi ke angka, default 0 jika tidak valid

        // Hitung total pack
        const total = jumlahNumber + partSisa; // Penjumlahan angka (misal: 54 + 25 = 79)

        // Hitung jumlah pack dan sisa jika standarPacking valid
        let jumlahPack = 0;
        let sisaPack = 0;
        if (standarPacking !== "Data tidak tersedia") {
            const standarPackingNumber = parseInt(standarPacking, 10) || 0; // Konversi nilai ke angka
            if (standarPackingNumber > 0) {
                jumlahPack = Math.floor(total / standarPackingNumber); // Hasil pembagian bulat
                sisaPack = total % standarPackingNumber; // Sisa pembagian
            }
        }

        // Dapatkan tanggal dan waktu saat ini
        const now = new Date();
        const day = String(now.getDate()).padStart(2, '0'); // Tanggal, format dua digit
        const month = String(now.getMonth() + 1).padStart(2, '0'); // Bulan, format dua digit (0-based)
        const year = now.getFullYear(); // Tahun
        const hours = String(now.getHours()).padStart(2, '0'); // Jam
        const minutes = String(now.getMinutes()).padStart(2, '0'); // Menit
        const seconds = String(now.getSeconds()).padStart(2, '0'); // Detik

        // Formatkan tanggal dan waktu
        const formattedDate = `${day}-${month}-${year}`; // Format: ddmmyyyy
        const formattedTime = `${hours}:${minutes}:${seconds}`; // Format: HH:mm:ss

        // Buat URL dengan tambahan jumlah pack dan sisa
        const url = `print-label?delivery-due-date=${deliveryDueDate}`
            + `&supplier-code=${supplier_code}`
            + `&nomor-part=${nomorPart}`
            + `&nama-produk=${namaProduk}`
            + `&order-qty=${orderQty}`
            + `&delivery-slip=${deliverySlip}`
            + `&order-number=${order_number}`
            + `&no-lot=${noLot}`
            + `&idkpp=${idkpp}`
            + `&date=${formattedDate}`
            + `&time=${formattedTime}`
            + `&total=${total}` // Total sebelum pembagian
            + `&jumlah-pack=${jumlahPack}` // Hasil jumlah pack
            + `&sisa=${sisaPack}`; // Sisa pembagian

        // Alihkan ke URL
        window.location.href = url;
    } catch (err) {
        console.log(err);
    }
}

    
    function getParams(param) {
        const url = window.location.href; // Ambil URL saat ini
        const regex = new RegExp(`[?&]${param}=([^&]*)`); // Gunakan template literal dalam RegExp
        const match = url.match(regex);

        if (match) {
            console.log(`Nilai ${param}:`, match[1]);
            return match[1]; // Kembalikan nilai parameter
        } else {
            console.log(`Parameter ${param} tidak ditemukan`);
            return null; // Kembalikan null jika parameter tidak ditemukan
        }
    }

    // document.addEventListener("DOMContentLoaded", function() {
    //     // Ambil nilai idkpp dari input
        
    //     if (idkppInput && idkppInput.value) {
    //         fetchSisaPack(idkppInput.value);
    //     }
    // });

    function fetchSisaPack(idkpp_kedua) {
        
        $.ajax({
            url: '<?= site_url("KpmController/get_sisa_pack") ?>', // Pastikan URL benar
            method: 'GET',
            data: { 
                idkpp_kedua: idkpp_kedua.match(/\d+/)[0],
                idkpp_pertama:  localStorage.getItem('idkpp-chawnima'),
                kode_produk: getParams('kode-produk')
            },
            success: function(response) {
                console.log('Response:', response);
                const data = JSON.parse(response);
                if (data && data.sisa_pack !== undefined) { 
                    // Isi input "Jumlah Part Sisa" dengan nilai sisa_pack

                    //CLOSE form input kpm
                    closeModalFormInput();

                    //TAMPILKAN kpm part sisa
                    document.getElementById('kpm-part-sisa-modal').style.display = 'block';
                    document.getElementById('qty-part-sisa').focus();

                    document.getElementById('qty-part-sisa').value = data.sisa_pack; // Masukkan data ke input
                } else {
                    alert('Kode Produk tidak sama, Masukan No Kpm dengan kode produk yang sama', response.error)
                    console.error('Data sisa_pack tidak ditemukan', response);

                    location.reload();
                }
            },
            error: function(error) {
                console.error('Error fetching sisa_pack:', error);
            }
        }); 
    }
</script>

<?php

// Simpan data ke session
$_SESSION['standar_packing'] = isset($standar_packing) ? $standar_packing : '';
$_SESSION['jenis_kemasan'] = isset($jenis_kemasan) ? $jenis_kemasan : '';

?>

