<?php 
include '../koneksi.php';


$id=$_POST['id_petugas'];
$nama=$_POST['nama_petugas'];
$username=$_POST['username'];
$password=$_POST['password'];
$telp=$_POST['telp'];
$level=$_POST['level'];


$query=mysqli_query($conn, "UPDATE petugas SET nama_petugas='$nama', username='$username', password='$password', telp='$telp', level='$level' WHERE id_petugas='$id' ");
if($query)
{
    ?>
    <script>
    alert("Data Petugas Berhasil Diubah");
    document.location="admin.php?url=lihat_petugas";
    </script>
    <?php
}else{
    ?>
    <script>
        alert("data gagal");
    </script>
    <?php
}
?>