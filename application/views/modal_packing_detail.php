<div class="modal fade" id="modal_packing_detail" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    
 <form id='packing-detail-form' method="get" action="/output">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" >INPUT LOT NO</h5>
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
    <label for="idkpp-generated" class="col-4 col-form-label">KPM No :</label> 
    <div class="col-8">
      <div class="input-group">
        <input id="idkpp-generated" readonly name="idkpp-generated" type="text" class="form-control">
      </div>
    </div>
  </div>

 

  <div class="form-group row">
    <label for="kode-produk" class="col-4 col-form-label">Kode Produk :</label> 
    <div class="col-8">
      <div class="input-group">
        <input id="kode-produk" required readonly name="kode-produk" type="text" class="form-control">
      </div>
    </div>
  </div>

  <div class="form-group row">
    <label for="nama-produk" class="col-4 col-form-label">Nama Produk :</label> 
    <div class="col-8">
      <div class="input-group">
        <input id="nama-produk" required readonly name="kode-produk" type="text" class="form-control">
      </div>
    </div>
  </div>

   <div class="form-group row">
    <label for="nomor-part" class="col-4 col-form-label">Nomor Part :</label> 
    <div class="col-8">
      <div class="input-group">
        <input id="nomor-part" required readonly name="kode-produk" type="text" class="form-control">
      </div>
    </div>
  </div>

   <div class="form-group row">
    <label for="kode-compound" class="col-4 col-form-label">Kode Compound :</label> 
    <div class="col-8">
      <div class="input-group">
        <input id="kode-compound" required readonly name="kode-produk" type="text" class="form-control">
      </div>
    </div>
  </div>

  <div class="form-group row">
    <label for="jumlah" class="col-4 col-form-label">Jumlah :</label> 
    <div class="col-8">
      <div class="input-group">
        <input autocomplete="off" id="jumlah" required  name="jumlah" type="text" class="form-control">
      </div>
    </div>
  </div>

  <div class="form-group row">
    <label for="no-lot" class="col-4 col-form-label">No.Lot :</label> 
    <div class="col-8">
      <div class="input-group">
        <input autocomplete="off" id="no-lot" required name="no-lot" type="text" class="form-control">
        <img id="no-lot-error" src="/assets/images/error.png" />

      </div>
    </div>
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
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
           
          <input type="submit" id="ok-modal-packing-detail" class="btn btn-primary" value="OK" onClick="setIDKPP()">
         
        </div>
      </div>
    </div>

  </form>

  </div>