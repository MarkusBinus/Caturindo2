<?php

$user_type = $_GET['user_type'];

?>



<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    
        <link rel="stylesheet" href="fonts/icomoon/style.css">
    
        <link rel="stylesheet" href="css/owl.carousel.min.css">
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        
        <!-- Style -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/style-login.css"> 


        <title>Sistem Pabrik - Summary</title>
      </head>

<body>


  <section> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> 


    <!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Scan Data Barcode </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <span>KPM No : </span> <input type="text" placeholder="..." >
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">OK</button>
        </div>
      </div>
    </div>
  </div>

  <div class="signin container-modified"> 
    <div class="content"> 

    <div class="container">
      <div class="row empty">
        <div class="col-sm">
          <span id="tanggal">dd/MM/yyyy</span>
          <span id="jam">00:00 WIB</span>
        </div>
        <div class="col-sm upper-nav">
          
          <span id="Bagiankerja">Bagian Kerja - </span> 
          <span id="namaoperator">Nama Operator.</span>
          <img src="images/user.png" >
       
      </div>
      </div>

        <div class="row menu-kerja">
            <div class="col-sm">
                No. Part : <input type="text" value="0" >
            </div>
            <div class="col-sm">
              Nama. Part : <input type="text" value="0" >
            </div>
          <div class="col-sm">
              No. Lot : <input type="text" value="0" >
          </div>
        <div class="col-sm">
          Jumlah : <input type="text" value="0" >
        </div>
      
        </div>

        <div class="row bigger">

        <div class="container">  
        <div class="row item-form">
            <div class="col-sm">
              Hasil : <input type="text" value="" placeholder="... pcs" >
            </div>
        </div>
        <div class="row  item-form">
          <div class="col-sm">
              Sisa : <input type="text" value="" placeholder="... pcs" >
          </div>
        </div>
        <div class="row  item-form">
          <div class="col-sm">
              Delivered : <input type="date" value="2024-08-05"  >
          </div>
        </div>

      </div>

        </div>
           

        <div class="row justify-content-md-center">
          <div class="col-4">
            <a href="mrp.php">
            <button type="button" class="btn btn-primary" >
              Next Process
            </button>
          </a>
        </div>
        </div>

    </div>

  </div>
</div>

    <script src="js/jquery.slim.min.js" ></script>
    <script src="js/bootstrap.bundle.min.js" ></script>
    <script src="js/myscript.js" ></script>

</body>

</html>