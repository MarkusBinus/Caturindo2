
<?php

$user_type = "";
$user_modal = "";


?>


    <html>
        <head>
         <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    
        <link rel="stylesheet" href="/assets/fonts/icomoon/style.css">
    
        <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
    <link rel="icon" type="image/x-icon" href="/assets/images/favicon.ico">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
        
        <!-- Style -->
        <link rel="stylesheet" href="/assets/css/style.css">
        <link rel="stylesheet" href="/assets/css/style-login.css">
       
    
        <title>Sistem KPM - Formulir User</title>
      </head>

<body>


<section> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> 
    <!-- Modal -->
    <?php include('modal_predelivery.html'); ?>
    <?php include('modal_finishing_inspeksi.php'); ?>

   
    <div class="signin container-modified">

        <div class="container">
    

    <div class="container">
        
    <div class="preview-big">
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

        
<form method="post" action="save-user">
  <div class="form-group row">
    <label for="text2" class="col-4 col-form-label">Username</label> 
    <div class="col-8">
      <input id="text2" name="username" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Password</label> 
    <div class="col-8">
      <input id="text1" name="pass" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <input id="text" name="email" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="select" class="col-4 col-form-label">Divisi</label> 
    <div class="col-8">
      <select id="select" name="divisi" class="custom-select">
        <option value="finishing">finishing</option>
        <option value="packing">packing</option>
        <option value="delivery">delivery</option>
        <option value="inspeksi">inspeksi</option>
      </select>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

    </div>

</div>
</div>

    <script src="/assets/js/jquery.slim.min.js" ></script>
    <script src="/assets/js/bootstrap.bundle.min.js" ></script>
    <script src="/assets/js/myscript.js" ></script>
    

</body>

</html>