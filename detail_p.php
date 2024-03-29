<?php 
if(!isset($_SESSION['nama']))
{
  header('location:login.php');   // Menentukan lokasi data login
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

        <title>Pengaduan</title>

        <!-- Custom fonts for this template-->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="css/sb-admin-2.min.css" rel="stylesheet">

    </head>

<body id="page-top">

    <?php 
    include "koneksi.php";   
    $no = 1;
    $query = mysqli_query($conn, "SELECT * FROM pengaduan WHERE id_pengaduan='$_GET[id]'");
    while ($d = mysqli_fetch_array($query)) {
    ?>
    <div class="card shadow">
        <div class="card-header text-dark">
            Detail Laporan
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title font-weight-bold text-dark"><?php echo $d['judul_laporan']; ?></h5>
                <p class="card-text"><?php echo $d['isi_laporan']; ?></p>
                <p><img src="foto/<?php echo $d['foto']; ?>" width="600" height="600" class="border"></p>
                <a href="?url=lihat_pengaduan" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>
    <?php } ?>


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

</body>

</html>