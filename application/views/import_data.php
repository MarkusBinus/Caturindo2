<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
        
        <title>Import Data</title>
    <link rel="icon" type="image/x-icon" href="/assets/images/favicon.ico">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
        
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="/assets/css/style-login.css"> 
    <link rel="stylesheet" href="/assets/css/style-import.css">

    
</head>
<body>



<section> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
    <!-- ... existing code ... -->
    <section>
    <div class="signin">
        <div class="content">
            <h2>Upload Data MRP</h2>
            <form enctype="multipart/form-data" action="upload_mrp" method="post" class="form">
                
                <div class="inputBox">
                    <input type="text" name="username" placeholder="nama anda" required />
                </div>

                <div class="inputBox">
                    <input type="text" name="keterangan" placeholder="ceritain sesuatu" required />
                </div>

                <div class="inputBox">
                    <input type="file" name="data-delivery" accept=".jpg, .jpeg, .png" required />
                </div>
               
                <div class="inputBox">
                    <input type="submit" value="Upload" />
                </div>
            </form>
        </div>
    </div>
</section>

<section2>
    <div class="table-container">
        <div class="signin">
            <div class="content">
                <h2>History Upload Data</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Nama File</th>
                            <th>Besar File /kb</th>
                            <th>Tanggal Dan Jam Upload</th>
                            <th>Nama Upload</th>
                            <th>Keterangan</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($upload_history)): ?>
                            <?php foreach ($upload_history as $upload): ?>
                            <tr>
                             
                        <td>
                            <a href="/uploads/data-mrp/<?= $upload->nama_file ;?> ">
                            <?= htmlspecialchars($upload->nama_file); ?>
                            </a>
                        </td>
                        <td><?= htmlspecialchars($upload->besar_file); ?></td>
                        <td><?= htmlspecialchars($upload->tanggal_upload); ?></td>
                        <td><?= htmlspecialchars($upload->username); ?></td>
                        <td><?= htmlspecialchars($upload->keterangan); ?></td>
                            </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="4">No upload history available.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section2>
 <script src="/assets/js/jquery-3.7.1.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js" ></script>

    <?php include('modal_upload_mrp.php'); ?>

</body>
</html>
