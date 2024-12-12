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
#confirmationModal .modal-dialog {
    display: flex;
    align-items: center; /* Vertikal tengah */
    justify-content: center; /* Horizontal tengah */
    height: 100%; /* Pastikan modal dialog mengisi tinggi */
}

#confirmationModal .modal-content {
    width: 100%;
    max-width: 500px; /* Sesuaikan lebar modal */
    background-color: #f9f9f9; /* Warna latar belakang */
    border-radius: 8px; /* Radius border */
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); /* Bayangan */
}

#confirmationModal .modal-header {
    height: 78px; /* Sesuaikan tinggi header */
    font-size: 30px; /* Ukuran font */
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-bottom: 1rem;
    border-bottom: 2px solid black; /* Garis bawah */
    background-color: #007bff; /* Warna header */
    color: white; /* Warna teks header */
}

#confirmationModal .modal-body {
    padding: 3rem 0; /* Padding */
    font-size: 1.2rem; /* Ukuran font */
    text-align: center; /* Rata tengah */
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

#confirmationModal .btn-no {
    background-color: #6c757d; /* Warna tombol No */
    color: white;
}

#confirmationModal .btn-no:hover {
    background-color: #5a6268; /* Hover efek */
}

#confirmationModal .btn-yes {
    background-color: #007bff; /* Warna tombol Yes */
    color: white;
}

#confirmationModal .btn-yes:hover {
    background-color: #0056b3; /* Hover efek */
}

/* Styling untuk modal 2 */
#kpm-part-sisa-modal .modal-dialog {
    display: flex;
    align-items: center; /* Vertikal tengah */
    justify-content: center; /* Horizontal tengah */
    height: 100%; /* Pastikan modal dialog mengisi tinggi */
}

#kpm-part-sisa-modal .modal-content {
    width: 100%;
    max-width: 500px; /* Sesuaikan lebar modal */
    background-color: #ffffff; /* Warna latar belakang */
    border-radius: 8px; /* Radius border */
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15); /* Bayangan */
}

#kpm-part-sisa-modal .modal-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-bottom: 1rem;
    border-bottom: 1px solid #dee2e6;
}

#kpm-part-sisa-modal .modal-body {
    padding: 1rem 0;
    font-size: 1rem;
    color: #495057;
}

#kpm-part-sisa-modal .modal-footer {
    display: flex;
    justify-content: flex-end;
    gap: 0.5rem;
    padding-top: 1rem;
    border-top: 1px solid #dee2e6; /* Garis atas */
}

/* Styling untuk tombol */
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

</style>

<!-- <div class="form-container-form-input">
    <form action="<?= base_url('your_controller/submitForm') ?>" method="POST" id="form-input-form">
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
            <input type="text" id="no-lot" name="no-lot" class="form-input-field-form-input">
        </div>
        <div class="form-group-form-input">
            <label for="tgl-pengiriman">Tanggal Pengiriman</label>
            <input type="date" id="tgl-pengiriman" name="tgl-pengiriman" class="form-input-field-form-input" 
                   value="<?= isset($delivery_due_date) ? $delivery_due_date : '' ?>">
        </div>
        <div class="form-group-form-input">
            <label for="standar-packing">Standar Packing</label>
            <input type="text" id="standar-packing" name="standar-packing" class="form-input-field-form-input">
        </div>
        <div class="form-group-form-input">
            <label for="jumlah">QTY</label>
            <input type="number" id="jumlah" name="jumlah" class="form-input-field-form-input" 
                   value="<?= isset($order_qty) ? $order_qty : '' ?>">
        </div>
        <div class="form-group-form-input">
            <label for="jenis-kemasan">Jenis Kemasan</label>
            <input type="text" id="jenis-kemasan" name="jenis-kemasan" class="form-input-field-form-input">
        </div>
        <div class="form-group-form-input">
            <label for="delivery-slip">Delivery Slip No</label>
            <input type="text" id="delivery-slip" name="delivery-slip" class="form-input-field-form-input" 
                   value="<?= isset($delivery_slip) ? $delivery_slip : '' ?>">
        </div>
        <button type="submit" class="btn-form-input btn-primary-form-input">Submit</button>
    </form>
</div> -->

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
</div> -->

<!-- Modal 1 -->
<div id="form-input-modal" class="modal" style="display:none;">
    <div class="modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Konfirmasi</h5>
                <button type="button" class="close" onclick="closeModalFormInput()">&times;</button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="idkpp">No KPM</label>
                    <input type="text" id="no-kpm-input" class="form-input">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="no-btn" class="btn btn-secondary" onclick="closeModalFormInput()">No</button>
                <button type="button" id="yes-btn" class="btn btn-primary" onclick="handleYesFormInput()">Yes</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal 2 -->
<div id="kpm-part-sisa-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="kpmPartSisaModalLabel" aria-hidden="true" style="display:none;">
    <div class="modal-dialog modal-dialog-centered">
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
                <button type="button" class="btn btn-secondary" onclick="closeKpmModal()">No</button>
                <button type="button" class="btn btn-primary" onclick="submitPartSisa()">Yes</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal 3 -->
<div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel" aria-hidden="true" style="display:none;">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmationModalLabel">Konfirmasi</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">&times;</button>
            </div>
            <div class="modal-body">
                <p>Print Label?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-no" data-bs-dismiss="modal">No</button>
                <form method="POST" action="">
                    <button type="submit" name="confirm_yes" class="btn btn-yes">YES</button>
                </form>
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



    function closeModalFormInput() {
        document.getElementById('form-input-modal').style.display = 'none';
    }

    function handleYesFormInput() {
        var noKpmValue = document.getElementById('no-kpm-input').value;
        document.getElementById('idkpp-part-sisa').value = noKpmValue;
        closeModalFormInput();
        document.getElementById('kpm-part-sisa-modal').style.display = 'block';
    }
    function submitPartSisa() {
    var noKpmValue = document.getElementById('no-kpm-input').value;
    document.getElementById('idkpp-part-sisa').value = noKpmValue;
    
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

</script>
