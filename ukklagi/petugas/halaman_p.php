<?php 

if(isset($_GET['url']))
{
    $url = $_GET['url'];
    switch($url){

        case 'verifikasi_pengaduan';
        include 'verifikasi_pengaduan.php';
        break;

        case 'detail_verifikasi_pengaduan';
        include 'detail_p.php';
        break;

        case 'proses_verifikasi';
        include 'proses.php';
        break;




    }
}else{
        ?>
        Selamat Datang <?php echo $_SESSION['nama'];
        
        include "../koneksi.php";
        $query=mysqli_query($conn, "SELECT * FROM pengaduan WHERE status='0'");
        $cek=mysqli_num_rows($query);
        if($cek)
        {
        ?>
        <br>
        <br>
        <div class="col-xl-5 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
            <div class="col mr-2">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Laporan Pengaduan</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">ada <?php echo $cek; ?> Laporan dari Masyarakat</div>
            </div>
            <div class="col-auto">
                <i class="fas fa-comments fa-4x text-gray-300"></i>
                <span class="btn btn-danger btn-circle btn-sm"><?php echo $cek; ?></span>
            </div>
            </div>
        </div>
        </div>
        </div>

        <?php 
        }
    }

?>