<div class="modal fade" id="modal_packing_choose" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    
 <form id='packing-choose-form' method="get" action="/output">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" >KONFIRMASI</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
         
<div class="form-group row" id="no-data-warning">
     <label>No Data!</label>
     <div class="col-8">
      <div class="input-group">
        <img src="/assets/images/error.png" >
    </div>
    </div>
</div>

<div class="form-group row">
    <label for="delivery-due-date-choose" class="col-4 col-form-label">Delivery Due Date :</label> 
    <div class="col-8">
      <div class="input-group">
        <input id="delivery-due-date-choose" readonly name="delivery-due-date-choose" type="text" class="form-control">
      </div>
    </div>
  </div>

  <div class="form-group row">
    <label for="order-number-choose" class="col-4 col-form-label">Order Number :</label> 
    <div class="col-8">
      <div class="input-group">
        <input id="order-number-choose" readonly name="order-number-choose" type="text" class="form-control">
      </div>
    </div>
  </div>
 
  <div class="form-group row">
    <label for="order-qty-choose" class="col-4 col-form-label">Order Quantity :</label> 
    <div class="col-8">
      <div class="input-group">
        <input id="order-qty-choose" readonly name="order-qty-choose" type="text" class="form-control">
      </div>
    </div>
  </div>

  <div class="form-group row">
    <label for="delivery-slip-no-choose" class="col-4 col-form-label">Delivery Slip No :</label> 
    <div class="col-8">
      <div class="input-group">
        <input id="delivery-slip-no-choose" readonly name="delivery-slip-no-choose" type="text" class="form-control">
      </div>
    </div>
  </div>



  <div class="form-group row">
    <label for="nama-produk-choose" class="col-4 col-form-label">Nama Produk :</label> 
    <div class="col-8">
      <div class="input-group">
        <input id="nama-produk-choose" required readonly name="nama-produk-choose" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="user-code-choose" class="col-4 col-form-label">User Code :</label> 
    <div class="col-8">
      <div class="input-group">
        <input id="user-code-choose" required readonly name="user-code-choose" type="text" class="form-control">
      </div>
    </div>
  </div>

   <div class="form-group row">
    <label for="nomor-part-choose" class="col-4 col-form-label">Nomor Part :</label> 
    <div class="col-8">
      <div class="input-group">
        <input id="nomor-part-choose" required readonly name="kode-produk-choose" type="text" class="form-control">
      </div>
    </div>
  </div>

  <div class="form-group row" hidden>
    <label for="kode-produk-choose" class="col-4 col-form-label">Kode Produk</label> 
    <div class="col-8">
      <div class="input-group">
        <input id="kode-produk-choose" required readonly name="kode-produk-choose" type="text" class="form-control">
      </div>
    </div>
  </div>

  <div class="form-group row" hidden>
    <label for="supplier-code-choose" class="col-4 col-form-label">Supplier COde</label> 
    <div class="col-8">
      <div class="input-group">
        <input id="supplier-code-choose" required readonly name="supplier-code-choose" type="text" class="form-control">
      </div>
    </div>
  </div>

  <div class="form-group row" hidden>
    <label for="id-tbl-delivery-choose" class="col-4 col-form-label">Id table Delivery</label> 
    <div class="col-8">
      <div class="input-group">
        <input id="id-tbl-delivery-choose" required readonly name="id-tbl-delivery-choose" type="text" class="form-control">
      </div>
    </div>
  </div>

  <div class="modal-title">
    <label for="" class="modal-title">Apakah Ada Part Sisa?</label> 
   
  </div>

   <!-- <div class="form-group row">
    <label for="kode-idkpp" class="col-4 col-form-label">Kode IDKPP :</label> 
    <div class="col-8">
      <div class="input-group">
        <input id="kode-idkpp" required readonly name="kode-idkpp" type="text" class="form-control">
      </div>
    </div>
  </div> -->


        </div>


        <div class="modal-footer">
          <!-- <img id="loading-mark" src="/assets/images/loading.gif"> -->
          <button type="button" class="btn btn-secondary" onclick="redirectToPrint()">No</button>
           
          <button type="button" class="btn btn-primary" onclick="showForminput()">Yes</button>
         
        </div>
      </div>
    </div>
    <script>
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
        // Fungsi JavaScript untuk pindah halaman
      function showForminput() {
            // Ambil dan bersihkan nilai dari input 
            const idkpp = encodeURIComponent(getParams('idkpp').trim()); 
            const supplier_code = encodeURIComponent(document.getElementById('supplier-code-choose').value.trim());
            const delivery_due_date = encodeURIComponent(document.getElementById("delivery-due-date-choose").value.trim());
            const order_number = encodeURIComponent(document.getElementById("order-number-choose").value.trim());
            const order_qty = encodeURIComponent(document.getElementById("order-qty-choose").value.trim());
            const delivery_slip = encodeURIComponent(document.getElementById("delivery-slip-no-choose").value.trim());
            const nama_produk = encodeURIComponent(document.getElementById("nama-produk-choose").value.trim().replace(/,/g, '-')); // Hanya mengganti koma dengan tanda minus
            const nomor_part = encodeURIComponent(document.getElementById("nomor-part-choose").value.trim());
            const kode_produk = encodeURIComponent(document.getElementById("kode-produk-choose").value.trim());
            const noLot = encodeURIComponent(getParams("no_lot"));
            const user_code = encodeURIComponent(document.getElementById("user-code-choose").value.trim());
            const id_tbl_delivery = localStorage.getItem('id_tbl_delivery');
            const jumlah = encodeURIComponent(getParams('jumlah')); // Tambahkan pengambilan nilai 'jumlah' dari URL 

            // Redirect dengan URL yang disusun ulang sesuai format baru
            sessionStorage.setItem('focusElement', 'no-kpm-input');
            window.location.href = `form_input?delivery-due-date=${delivery_due_date}`
                + `&supplier-code=${supplier_code}`
                + `&nomor-part=${nomor_part}`
                + `&nama-produk=${nama_produk}`
                + `&order-qty=${order_qty}`
                + `&delivery-slip=${delivery_slip}`
                + `&kode-produk=${kode_produk}`
                + `&order-number=${order_number}`
                + `&no-lot=${noLot}`
                + `&idkpp=${idkpp}`
                + `&user-code=${user_code}`
                + `&id_tbl_delivery=${id_tbl_delivery}`
                + `&jumlah=${jumlah}`;
        }

      function redirectToPrint() {
        try {
            const idkpp = encodeURIComponent(getParams('idkpp').trim()); 
            const supplier_code = encodeURIComponent(document.getElementById('supplier-code-choose').value.trim());
            const deliveryDueDate = encodeURIComponent(document.getElementById("delivery-due-date-choose").value.trim());
            const orderNumber = encodeURIComponent(document.getElementById("order-number-choose").value.trim());
            const orderQty = encodeURIComponent(document.getElementById("order-qty-choose").value.trim());
            const deliverySlip = encodeURIComponent(document.getElementById("delivery-slip-no-choose").value.trim());
            const namaProduk = encodeURIComponent(document.getElementById("nama-produk-choose").value.trim());
            const nomorPart = encodeURIComponent(document.getElementById("nomor-part-choose").value.trim());
            const noLot = encodeURIComponent(getParams('no-lot').trim());

            window.location.href = `print-label?idkpp=${idkpp}` 
                + `&supplier-code=${supplier_code}`
                + `&delivery-due-date=${deliveryDueDate}`
                + `&order-number=${orderNumber}`
                + `&order-qty=${orderQty}`
                + `&delivery-slip=${deliverySlip}`
                + `&nama-produk=${namaProduk}`
                + `&nomor-part=${nomorPart}`
                + `&no-lot=${noLot}`;
        } catch (err) {
            console.error("Error during redirect:", err);
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
        
    </script>

  </form>

  </div>