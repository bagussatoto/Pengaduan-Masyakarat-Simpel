<?php
include 'koneksi.php';

$username=$_POST['username'];
$password=$_POST['password'];   

$query=mysqli_query($conn, "SELECT * FROM petugas WHERE username='$username' AND password='$password' ");
$cek = mysqli_num_rows($query);

if ($cek>0)
{
    $data=mysqli_fetch_array($query);
    if($data['level']=="petugas")
    {
        session_start();
        $_SESSION['user']=$user;
        $_SESSION['id_petugas']=$data['id_petugas'];
        $_SESSION['nama']=$data['nama_petugas'];
        $_SESSION['level']=$data['level'];
        header('location:petugas/petugas.php');
    }
    elseif($data['level']=="admin")
    {
        session_start();
        $_SESSION['user']=$user;
        $_SESSION['id_petugas']=$data['id_petugas'];
        $_SESSION['nama']=$data['nama_petugas'];
        $_SESSION['level']=$data['level'];
        header('location:admin/admin.php');
    }

}
else
{
    ?>
    <script>
    alert("Maaf Username atau Password Tidak ditemukan");
    document.location="login_p_a.php";
    </script>
    <?php
}
?>