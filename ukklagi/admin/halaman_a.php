<?php 

if(isset($_GET['url']))
{
    $url = $_GET['url'];
    switch($url){

        case 'lihat_laporan';
        include 'lihat_laporan.php';
        break;

        case 'detail_pengaduan';
        include 'detail_p.php';
        break;

        case 'tanggapan';
        include 'tanggapan.php';
        break;

        case 'lihat_petugas';
        include 'lihat_petugas.php';
        break;

        case 'tambah_petugas';
        include 'tambah_petugas.php';
        break;

        case 'hapus_petugas';
        include 'hapus_petugas.php';
        break;

        case 'edit_petugas';
        include 'edit_petugas.php';
        break;

        case 'lihat_masyarakat';
        include 'lihat_masyarakat.php';
        break;
        
        case 'data_pengaduan';
        include 'lihat_pengaduan.php';
        break;

        case 'cetak_petugas';
        include 'preview_petugas.php';
        break;

        case 'cetak_masyarakat';
        include 'preview_masyarakat.php';
        break;

        case 'cetak_pengaduan';
        include 'preview_pengaduan.php';
        break;





    }
}else{
    ?>
    Selamat Datang <?php echo $_SESSION['nama'];
    
    include "../koneksi.php";
    $query=mysqli_query($conn, "SELECT * FROM pengaduan WHERE status='proses'");
    $cek=mysqli_num_rows($query);
    if($cek < 1)
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
            <div class="h5 mb-0 font-weight-bold text-gray-800">Tidak Ada Laporan dari Masyarakat Yang Perlu Ditanggapi</div>
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
    }else{
        ?>
        <br>
        <br>
        <div class="col-xl-5 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
            <div class="col mr-2">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Laporan Pengaduan</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">ada <?php echo $cek; ?> Laporan dari Masyarakat Yang Harus ditanggapi</div>
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