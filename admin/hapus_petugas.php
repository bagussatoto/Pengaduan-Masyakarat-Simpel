<?php 
include "../koneksi.php";

$id = $_GET['id'];

$query=mysqli_query($conn,"DELETE FROM petugas where id_petugas='$id'");
if($query){
    ?>
    <script>
        document.location="admin.php?url=lihat_petugas";
    </script>
    <?php
}

?>