<div class="modal fade" id="modal_packing_choose" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    
 <form id='packing-choose-form' method="output" action="get">
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
        <input id="nama-produk-choose" required readonly name="kode-produk-choose" type="text" class="form-control">
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
          <img id="loading-mark" src="/assets/images/loading.gif">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
           
          <button type="button" class="btn btn-primary" onclick="showForminput()">Yes</button>
         
        </div>
      </div>
    </div>
    <script>
        // Fungsi JavaScript untuk pindah halaman
        function showForminput() {
            const delivery_due_date = document.getElementById("delivery-due-date-choose").value;
            const order_number = document.getElementById("order-number-choose").value;
            const order_qty = document.getElementById("order-qty-choose").value;
            const delivery_slip = document.getElementById("delivery-slip-no-choose").value;
            const nama_produk = document.getElementById("nama-produk-choose").value;
            const nomor_part = document.getElementById("nomor-part-choose").value;

            window.location.href = `form_input?delivery-due-date=${delivery_due_date}&order-number=${order_number}&order-qty=${order_qty}&delivery-slip=${delivery_slip}&nama-produk=${nama_produk}&nomor-part=${nomor_part}`;
        }
    </script>

  </form>

  </div>