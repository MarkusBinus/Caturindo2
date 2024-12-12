
    <html>
        <head>
         <!-- Required meta tags -->
        <meta charset="utf-8">

       <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>

        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    
        <link rel="stylesheet" href="/assets/fonts/icomoon/style.css">
    
        <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
        
        <!-- Style -->
        <link rel="stylesheet" href="/assets/css/style.css">
        <link rel="stylesheet" href="/assets/css/style-login.css">
        <link rel="icon" type="image/x-icon" href="/assets/images/favicon.ico">
    
        <title>Sistem Pabrik - Home</title>
      </head>

<body>


<section> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> 
    <!-- Modal -->
    <?php include('modal_predelivery.php'); ?>
    <?php include('modal_packing.php'); ?>
    <?php include('modal_packing_detail.php'); ?>
    <?php include('modal_error_no_kpm.php'); ?>
    <?php include('form_input.php'); ?>

   
    <div class="signin container-modified">
    <div class="content">

        <div id="camera"></div>


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
        <div class="col-sm upper-nav user-info">
          
            <span id="Bagiankerja">Bagian Kerja - </span> 
            <span id="namaoperator">Nama Operator.</span>
            <img src="/assets/images/user.png" >
            <a id="link-logout" href="/logout">Logout</a>
         
        </div>
      </div>

        <div class="row menu-kerja">
            <div class="col-sm1">
                <button id="packing-modal-trigger" type="button" class="btn btn-primary" data-toggle="modal" data-target="<?= $modal_trigger ;?>">
                    Mulai Bekerja
                  </button>
            </div>
        </div>
        <div class="row menu-kerja">
            <div class="col-sm2">
              <input class="col-sm3" type="button" value="Selesai">
            </div>
        </div>
        
        <div class="row display-poster">
        <div class="col-sm">
                <img class="preview" src="/assets/uploads/home/5R.jpg">
            </div>
            <div class="col-sm">
                <img class="preview" src="/assets/uploads/home/SCW.jpg">
            </div>
            <div class="col-sm">
                <img class="preview" src="/assets/uploads/home/INFO.jpg">
            </div>
        </div>   

    </div>

</div>
</div>
    
    <script src="/assets/js/jquery-3.7.1.js"></script>
 
    <script src="/assets/js/bootstrap.bundle.min.js" ></script>
    <script src="/assets/js/myscript.js" ></script>
     <script src="/assets/js/quagga.js" ></script>
    

</body>

</html>