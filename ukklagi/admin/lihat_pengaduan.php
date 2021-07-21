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
            Data Masyarakat
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Judul</th>
                        <th>Isi</th>
                        <th>Status</th>
                        <th>Tanggal Pengaduan</th>
                    </tr>
                </thead>
                <tbody>

                    <?php 
                    include "../koneksi.php";
                    $no = 1;
                    $query = mysqli_query($conn, "SELECT * FROM pengaduan");
                    while ($d = mysqli_fetch_array($query)) {
                        ?>
                        <tr>
                            <td><?php echo $d['nik']; ?></td>
                            <td><?php echo $d['nama']; ?></td>
                            <td><?php echo $d['judul_laporan']; ?></td>
                            <td><?php echo $d['isi_laporan']; ?></td>
                            <td><?php echo $d['status']; ?></td>
                            <td><?php echo $d['tgl_pengaduan']; ?></td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>
            <a href="admin.php" class="btn btn-success btn-icon-split">
                <span class="icon">
                    <i class="fas fa-arrow-left"></i>
                </span>
                <span class="text">Kembali</span>
            </a>
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