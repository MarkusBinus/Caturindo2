
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
    <?php include('form_input.php'); ?>

   
    <div class="signin container-modified">

        <div class="container">
    

    <div class="container">
        

    <div id="floating-zoom">
    </div>

    <img src="" id="target-big" class="preview-big">
    

   

      <div class="row empty">
        <div class="col-sm">
            <span id="tanggal">dd/MM/yyyy</span>
            <span id="jam">00:00 WIB</span>
        </div>
        <div class="col-sm upper-nav">
          
            <span id="Bagiankerja">Bagian Kerja - </span> 
            <span id="namaoperator">Nama Operator.</span>
            <img src="/assets/images/user.png" >
            <a id="link-logout" href="/logout">Logout</a>
         
        </div>
      </div>

        <div class="row menu-kerja">
            <div class="col-sm">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_<?= $user_modal; ?>">
                    Mulai Bekerja
                  </button>
            </div>
        </div>
        <div class="row menu-kerja">
            <div class="col-sm">
              <input type="button" value="Selesai">
            </div>
        </div>
        
        <div class="row display-poster">
        <div class="col-sm">
                <img class="preview" src="/assets/images/slogan5R.jpg">
            </div>
            <div class="col-sm">
                <img class="preview" src="/assets/images/sloganSafety.jpg">
            </div>
            <div class="col-sm">
                <img class="preview" src="/assets/images/informasiHarian.jpg">
            </div>
        </div>   

    </div>

</div>
</div>
    
    <script src="/assets/js/jquery-3.7.1.js"></script>
 
    <script src="/assets/js/bootstrap.bundle.min.js" ></script>
    <script src="/assets/js/myscript.js" ></script>
    

</body>

</html>