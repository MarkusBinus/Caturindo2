

<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    
        <link rel="stylesheet" href="/assets/fonts/icomoon/style.css">
    
        <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
        
        <!-- Style -->
        <link rel="stylesheet" href="/assets/css/data-table/dataTables.dataTables.css">
        <link rel="stylesheet" href="/assets/css/style.css">
        <link rel="stylesheet" href="/assets/css/style-login.css">

       <link rel="icon" type="image/x-icon" href="/assets/images/favicon.ico">
    

        <title>Sistem Pabrik - Finished</title>
      </head>

<body>

  <section> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>

 
  <div class="signin container-modified">
    <div class="container">

    <div class="container">

      <div id="floating-zoom">
         <img src="" id="target-big" class="preview-big">
    </div>

      <div class="row empty">
        <div class="col-sm">
          <span id="tanggal">dd/MM/yyyy</span>
          <span id="jam">00:00 WIB</span>
      </div>
        <div class="col-sm upper-nav">
          
          <span id="Bagiankerja">Bagian Kerja - </span> 
          <span id="namaoperator">Nama Operator.</span>
          <img src="/assets/images/user.png" >
        </div>
      </div>

        <div class="row menu-kerja">
          <div class="col-sm">
                Delivery Due Date : <br>
                 <input type="text" id="" value="<?= $delivery_due_date;?>" >
            </div>

            <div class="col-sm">
                Item Number : <br>
                 <input type="text" id="" value="<?=$item_number;?>" >
            </div>
            <div class="col-sm">
              Item Name : <br>
               <input type="text" id="item_name" value="<?=$item_name;?>" >
            </div>
          <div class="col-sm">
              User Code : <br>
              <input type="text" id="user_code" value="<?=$user_code;?>" >
          </div>
        <div class="col-sm">
          Order Number : <br>
          <input type="text" id="order_number" value="<?=$order_number;?>" >
        </div>
      <div class="col-sm">
          Order Quantity : <br>
          <input type="text" id="order_quantity" value="<?=$order_quantity;?>" >
        </div>
      <div class="col-sm">
          Delivery Slip No : <br>
          <input type="text" id="delivery_slip_no" value="<?=$delivery_slip_no;?>" >
        </div>


        </div>
               
       <div class="row display-poster">
        <div class="col-sm">
                <img class="preview" src="/assets/uploads/before-after-part/ik-packing/QCP-90480120200080.jpg">
            </div>
           
            <div class="col-sm">
                <img class="preview" src="/assets/uploads/before-after-part/ik-packing/IKP-BJMH2592000080.jpg">
            </div>
        </div>    

       <div id="table-container" class="row">
          
      

      </div> 

        <div class="row justify-content-md-center">
          <div class="col-4">
           
            <button id="button-mulai-packing" type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_packing_start_kerja">
              Mulai Kerjakan?
            </button>
           
        </div>
        </div>

    </div>

  </div>
</div>

    <script src="/assets/js/jquery-3.7.1.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js" ></script>
    <script src="/assets/js/data-table/dataTables.js"></script>
    <script src="/assets/js/myscript.js" ></script>

<?php include('modal_packing_start_kerja.php'); ?>
<?php include('modal_packing_print.php'); ?>
<?php include('modal_packing_sisa.php'); ?>


</body>

</html>