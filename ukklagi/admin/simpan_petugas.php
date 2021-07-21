<?php 
include '../koneksi.php';

$nama=$_POST['nama_petugas'];
$username=$_POST['username'];
$password=$_POST['password'];
$telp=$_POST['telp'];
$level=$_POST['level'];

$query=mysqli_query($conn, "INSERT INTO petugas (nama_petugas, username, password, telp, level) VALUES('$nama','$username','$password','$telp','$level')");
if($query)
{
    ?>
    <script>
    alert("Data Petugas Berhasil Ditambah");
    document.location="admin.php?url=lihat_petugas";
    </script>
    <?php
}
?>