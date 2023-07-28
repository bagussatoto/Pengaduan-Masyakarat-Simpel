<?php 
session_start();
unset($_SESSION['nama']);
session_destroy();
header('location:../login_p_a.php');
?>