<div class="modal fade" id="modal_upload_mrp" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    
 <form id='upload-mrp-form' method="output" action="get">
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
    <label for="username" class="col-4 col-form-label">Username :</label> 
    <div class="col-8">
      <div class="input-group">
        <input id="username" readonly name="username" type="text" class="form-control">
      </div>
    </div>
  </div>

  <div class="form-group row">
    <label for="keterangan" class="col-4 col-form-label">Keterangan :</label> 
    <div class="col-8">
      <div class="input-group">
        <input id="keterangan" readonly name="keterangan" type="text" class="form-control">
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
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
           
          <input type="submit" id="ok-modal-upload-mrp" class="btn btn-primary" value="OK">
         
        </div>
      </div>
    </div>

  </form>

  </div>