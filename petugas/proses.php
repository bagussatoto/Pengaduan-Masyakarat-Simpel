<?php 
include "../koneksi.php";

$query = mysqli_query($conn, "UPDATE pengaduan SET status='proses' WHERE id_pengaduan='$_GET[id]'");
if($query){
    header('location:?url=verifikasi_pengaduan');
}


?>