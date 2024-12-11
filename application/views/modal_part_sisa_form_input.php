
<!-- Modal 2: Tambah Part Sisa -->

<div id="kpm-part-sisa-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="kpmPartSisaModalLabel" aria-hidden="true" style="display:none;">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Konfirmasi Part Sisa</h5>
                <button type="button" class="close" onclick="closeKpmModal()">&times;</button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="idkpp">No KPM</label>
                    <input type="text" id="idkpp-part-sisa" required readonly name="idkpp" class="form-input" value="P0001340001">
                </div>
                <div class="form-group">
                    <label for="qty-part-sisa">Jumlah Part Sisa</label>
                    <input type="number" id="qty-part-sisa" name="qty-part-sisa" class="form-input">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" onclick="redirectToFormInputModal('kpm-part-sisa-modal')">No</button>
                <button type="button" class="btn btn-primary" onclick="submitPartSisa()">Yes</button>
            </div>
        </div>
    </div>
</div>

<style>/* Styling untuk modal 2 */
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