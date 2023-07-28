<?php 
include "../koneksi.php";

$nik = $_GET['nik'];

$query=mysqli_query($conn,"DELETE FROM masyarakat where nik='$nik'");
if($query){
    ?>
    <script>
        document.location="admin.php?url=lihat_masyarakat";
    </script>
    <?php
}

?>