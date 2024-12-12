<div class="modal fade" id="modal_predelivery_scan_qrcode" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="modal_predeliveryLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal_predelivery_scan_qrcodeLabel">Scan QRCode Part </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">


          <div class="form-group row" >
             
             <div class="col-4">
              <div class="input-group">
                <input id="qrcode_partno" value="<?= isset($partno) ? $partno : 0; ?>" type="text" placeholder="...">
            </div>
            </div>

             <div class="col-4">
              <div class="input-group">
                <input id="qrcode_partname" value="<?= isset($data) ? $data->item_name : "" ;?>" type="text" placeholder="...">
            </div>
            </div>

             <div class="col-4">
              <div class="input-group">
                <input id="qrcode_totalpack" value="<?= isset($hasil_bagi) ? $hasil_bagi : 0;?>" type="text" placeholder="...">
                <div class="bungkus">
                <h6> Bungkus</h6>
            </div>
            </div>

        </div>

        <div class="form-group row" >
             
             <label>Scan kemasan Ke-<span id="no-urut-kemasan">1</span> </label>
             <div class="col-6">
              <div class="input-group">
                <input id="scan-qrcode-kemasan" type="text" placeholder="...">
            </div>
            </div>
        </div>


        <div class="pesan-error">
            <h2 class="red-warning">WARNING</h2>

            <h3 >Label kemasan berbeda dengan Item Card!</h3>
            <h4 class="green-warning">Part No Tidak sama!</h4>

        </div>

        <div class="pesan-error-sudah-pernah">
            <h2 class="red-warning">WARNING</h2>

            <h3 >Label Item Card duplikat!</h3>
            <h4 class="green-warning">Part No Sudah discan sebelumnya!</h4>

        </div>

        <div class="pesan-finished">
            <h2 class="red-warning">SELESAI</h2>

            <h3 >Label kemasan Item Card telah selesai!</h3>
            <h4 class="green-warning">loading...</h4>

        </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
         
        </div>
      </div>
    </div>
  </div>