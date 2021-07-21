<?php 
include '../koneksi.php';

$id_pengaduan=$_POST['id_pengaduan'];
$tgl=$_POST['tgl_tanggapan'];
$tanggapan=$_POST['tanggapan'];
$id_petugas=$_POST['id_petugas'];
$status='selesai';

$query = mysqli_query($conn, "INSERT INTO tanggapan (id_pengaduan, tgl_tanggapan, tanggapan, id_petugas) VALUES ('$id_pengaduan', '$tgl', '$tanggapan', '$id_petugas') ");                    
$upd_status = mysqli_query($conn, "UPDATE pengaduan SET status='$status' WHERE id_pengaduan=$id_pengaduan ");

if($query)
{
    ?>
    <script>
        alert('Data Berhasil Ditanggapi');
        document.location='admin.php?url=lihat_laporan';
    </script>
    <?php
}

?>