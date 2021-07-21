<?php 

if(isset($_GET['url']))
{
    $url = $_GET['url'];
    switch($url){

        case 'tulis_pengaduan';
        include 'tulis_p.php';
        break;

        case 'lihat_pengaduan';
        include 'lihat_p.php';
        break;

        case 'detail_pengaduan';
        include 'detail_p.php';
        break;

        case 'lihat_tanggapan';
        include 'tanggapan.php';
        break;




    }
}
else
{
    ?>
    <h3 class="text-gray-700">Selamat Datang Di Aplikasi Pengaduan Masyarakat</h3>
    <?php
}



?>