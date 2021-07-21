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
            Tanggapan
        </div>
        <div class="card-body">
            <form action="simpan_tanggapan.php" method="post" class="form-horizontal" enctype="multipart/form-data">
                
                <div class="form-group cols-2">
                    <label class="text-dark">ID Pengaduan</label>
                    <input type="text" name="id_pengaduan" value="<?php echo ($_GET['id']); ?>" class="form-control" readonly>
                </div>

                <div class="form-group cols-2">
                    <label class="text-dark">Tanggal Tanggapan</label>
                    <input type="text" name="tgl_tanggapan" value="<?php echo date('Y-m-d'); ?>" class="form-control" readonly>
                </div>

                <div class="form-group cols-2">
                    <label class="text-dark">Tulis Tanggapan</label>
                    <textarea class="form-control" name="tanggapan" rows="8"></textarea>
                </div>

                <div class="form-group cols-2">
                    <label class="text-dark">ID Petugas</label>
                    <input type="text" name="id_petugas" value="<?php echo $_SESSION['id_petugas'] ?>" class="form-control" readonly>
                </div>

                
                <div class="form-group">
                    <a href="?url=lihat_laporan" class="btn btn-warning btn-icon-split">
                        <span class="icon">
                        <i class="fas fa-arrow-left"></i>
                        </span>
                        <span class="text">Kembali</span>
                    </a>

                    <input type="submit" value="Konfirmasi" class="btn btn-success btn-user">
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