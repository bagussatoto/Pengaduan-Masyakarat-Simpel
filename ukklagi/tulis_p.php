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
    <?php 
        include "koneksi.php";
        if(!isset($_SESSION['nama'])){
             echo "<font color='red'>Harap Login Terlebih Dahulu</font><hr>";
        }else{         
        ?>

        <form action="simpan_pengaduan.php" method="post" class="form-horizontal" enctype="multipart/form-data">
            <div class="form-group cols-2">
                <label class="text-dark">Tanggal</label>
                <input type="text" name="tgl_pengaduan" value="<?php echo date('d/m/Y'); ?>" class="form-control" readonly>
            </div>

            <div class="form-group cols-2">
                <label class="text-dark">Nama</label>
                <input type="text" name="nama" value="<?php echo $_SESSION['nama']; ?>" class="form-control" readonly>
            </div>

            <div class="form-group cols-2">
                <label class="text-dark">NIK</label>
                <input type="text" name="nik" value="<?php echo $_SESSION['nik']; ?>" class="form-control" readonly>
            </div>

            <div class="form-group cols-2">
                <label class="text-dark">Judul Laporan</label>
                <input type="text" name="judul_laporan" class="form-control">
            </div>

            <div class="form-group cols-2">
                <label class="text-dark">Isi Laporan</label>
                <textarea class="form-control" rows="10" name="isi_laporan"></textarea>
            </div>

            <div class="form-group cols-2">
                <label class="text-dark">Foto</label>
                <input type="file" name="foto" class="form-control py-1" accept=".jpg, .jpeg, .png, .gif">
                <font color="red">Pilih file berupa ".jpg", ".jpeg", ".png" ,".gif" </font>
            </div>


            

            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Simpan">
                <input type="reset" class="btn btn-danger" value="Kosongkan">
            </div>
            <?php } ?>
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