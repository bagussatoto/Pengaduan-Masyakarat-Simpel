<?php 
session_start();
if(!isset($_SESSION['nama']))
{
  header('location:../login_p_a.php');
}
elseif($_SESSION['level']!="admin")
{
  ?>
  <script>
    alert('Maaf Anda Bukan Admin!');
    document.location='../index.php';
  </script>
  <?php
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
    </div>


        <div class="card-body">
            <h3 class="m-0 font-weight-bold text-primary" align="center">Pemerintah Kabupaten Planet Mars</h3>
            <h4 class="m-0 font-weight-bold text-primary" align="center">Desa Ascraeus Mons</h4>
            <h6 class="m-0 font-weight-bold text-primary" align="center">Jalan Arsia Mons</h6>
            <br><hr>
            <h5 class="m-0 font-weight-bold text-secondary" align="center">Laporan Petugas</h5>
            <table class="table table-hover mt-3">
                <thead>
                    <tr>
                        <th>ID Petugas</th>
                        <th>Nama Petugas</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>No Telp</th>
                        <th>Level</th>
                    </tr>
                </thead>
                <tbody>

                    <?php 
                    include "../koneksi.php";
                    $no = 1;
                    $query = mysqli_query($conn, "SELECT * FROM petugas");
                    while ($d = mysqli_fetch_array($query)) {
                        ?>
                        <tr>
                            <td><?php echo $d['id_petugas'] ?></td>
                            <td><?php echo $d['nama_petugas'] ?></td>
                            <td><?php echo $d['username'] ?></td>
                            <td><?php echo $d['password'] ?></td>
                            <td><?php echo $d['telp'] ?></td>
                            <td><?php echo $d['level'] ?></td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>
            <br><br>
        </div>
        <h6 class="m-5 font-weight-bold text-primary" align="right">Mars, <?php echo date('d m Y'); ?></h6>
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