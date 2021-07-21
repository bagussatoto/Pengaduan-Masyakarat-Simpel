<?php 
if(!isset($_SESSION['nama']))
{
  header('location:login.php');
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
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="css/sb-admin-2.min.css" rel="stylesheet">

    </head>

<body id="page-top">


    <div class="card shadow">
        <div class="card-header text-dark">
            Tulis Laporan
        </div>
        <div class="card-body">
            <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
                <?php 
                include "koneksi.php";
                $query = mysqli_query($conn, "SELECT * FROM pengaduan, tanggapan WHERE tanggapan.id_pengaduan='$_GET[id]' AND tanggapan.id_pengaduan = pengaduan.id_pengaduan");
                $cek= mysqli_num_rows($query);
                if($cek < 1){
                    echo "<font color='red'>Mohon Maaf, Pengaduan Anda Belum ditanggapi. Harap Bersabar</font><hr>";
                }else{
                    if($d=mysqli_fetch_array($query))
                    {

                    
                ?>
                <div class="form-group cols-2">
                    <label class="text-dark">Tanggal Tanggapan</label>
                    <input type="text" name="tgl_tanggapan" value="<?php echo $d['tgl_tanggapan']; ?>" class="form-control" readonly>
                </div>

                <div class="form-group cols-2">
                    <label class="text-dark">Tanggapan</label>
                    <textarea class="form-control" name="tanggapan" rows="8" readonly><?php echo $d['tanggapan']; ?></textarea>
                </div>

                <?php } } ?>
                <div class="form-group">
                    <a href="?url=lihat_pengaduan" class="btn btn-light btn-icon-split">
                        <span class="icon text-gray-600">
                        <i class="fas fa-arrow-left"></i>
                        </span>
                        <span class="text">Kembali</span>
                    </a>
                </div>
            </form>
            
        </div>
        
    </div>
    
 

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