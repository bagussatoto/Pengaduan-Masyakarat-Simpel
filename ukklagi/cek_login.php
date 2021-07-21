<?php
include 'koneksi.php';

$username=$_POST['username'];
$password=$_POST['password'];   

$query=mysqli_query($conn, "SELECT * FROM masyarakat WHERE username='$username' AND password='$password' ");
$cek = mysqli_num_rows($query);

if ($cek>0)
{
    $data=mysqli_fetch_array($query);
    session_start();
    $_SESSION['nama']=$data['nama'];
    $_SESSION['nik']=$data['nik'];
    header('location:index.php');
}
else
{
    ?>
    <script>
    alert("Maaf Username atau Password Tidak ditemukan");
    document.location="login.php";
    </script>
    <?php
}
?>