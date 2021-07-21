<?php 
if(!isset($_SESSION['nama']))
{
  header('location:../login_p_a.php');
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>T.U.R</title>

        <!-- Custom fonts for this template-->
        <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="../css/sb-admin-2.min.css" rel="stylesheet">

    </head>

<body id="page-top">


    <div class="card shadow">
        <div class="card-header text-dark">
            Detail dan Verifikasi Pengaduan
        </div>
        <div class="card-body">
            <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
                <?php 
                include "../koneksi.php";
                $query = mysqli_query($conn, "SELECT * FROM pengaduan WHERE id_pengaduan='$_GET[id]'");
                $cek= mysqli_num_rows($query);
                if($cek < 1){
                    echo "<font color='red'>Mohon Maaf, Pengaduan Anda Belum ditanggapi. Mohon Tunggu Sebentar</font><hr>";
                }else{
                    if($d=mysqli_fetch_array($query))
                    {

                    
                ?>
                <h5 class="card-title font-weight-bold text-dark"><?php echo $d['judul_laporan']; ?></h5>
                <p class="card-text"><?php echo $d['isi_laporan']; ?></p>
                <p><img src="../foto/<?php echo $d['foto']; ?>" width="600" height="600" class="border"></p>

                <?php } } ?>
                <div class="form-group">
                    <a href="?url=lihat_laporan" class="btn btn-warning btn-icon-split">
                        <span class="icon">
                        <i class="fas fa-arrow-left"></i>
                        </span>
                        <span class="text">Kembali</span>
                    </a>
                </div>
            </form>
            
        </div>
        
    </div>
    
 

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

</body>

</html>