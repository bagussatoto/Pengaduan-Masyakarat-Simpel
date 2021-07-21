<?php 
include 'koneksi.php';

$nik=$_POST['nik'];
$nama=$_POST['nama'];
$username=$_POST['username'];
$password=$_POST['password'];
$telp=$_POST['telp'];

$query=mysqli_query($conn, "INSERT INTO masyarakat values('$nik','$nama','$username','$password','$telp')");
if($query)
{
    ?>
    <script>
    alert("Registrasi Berhasil! Silahkan Login!");
    document.location="login.php";
    </script>
    <?php
}
?>
