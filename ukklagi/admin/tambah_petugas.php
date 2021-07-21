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
        Tambah Petugas
    </div>
    <div class="card-body">
        <form action="simpan_petugas.php" method="post" class="form-horizontal" enctype="multipart/form-data">
            <div class="form-group cols-2">
                <label class="text-dark">Nama Petugas</label>
                <input type="text" name="nama_petugas" placeholder="Masukkan Nama Petugas ..." class="form-control" >
            </div>

            <div class="form-group cols-2">
                <label class="text-dark">Username</label>
                <input type="text" name="username" placeholder="Masukkan Username ..." class="form-control" >
            </div>

            <div class="form-group cols-2">
                <label class="text-dark">Password</label>
                <input type="text" name="password" placeholder="Masukkan Password ..." class="form-control" >
            </div>

            <div class="form-group cols-2">
                <label class="text-dark">No Telp</label>
                <input type="text" name="telp" placeholder="Masukakan Nomor Telepon ..." class="form-control">
            </div>

            <div class="form-group cols-sm-6">
                <label class="text-dark">Level</label>
                <select name="level" class="form-control">
                    <option>Pilih</option>
                    <option value="admin">Admin</option>
                    <option value="petugas">Petugas</option>
                </select>
            </div>

            <div class="form-group">
                <a href="?url=lihat_petugas" class="btn btn-warning">Batal</a>
                <input type="submit" class="btn btn-primary" value="Simpan">
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