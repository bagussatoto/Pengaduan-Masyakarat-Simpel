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
    <h3 class="text-gray-700">Selamat Datang Di Aplikasi Pengaduan </h3>
    <h4 class="text-gray-700">Dikelola oleh Pemerintah Amikom </h4> 
    <br>

    <h4 class="text-gray-700"><b>Sistem Informasi Website Pengaduan adalah proses dimana individu atau kelompok 
        menyampaikan keluhan, masalah, atau keberatan terhadap suatu situasi atau pihak yang bertanggung jawab.<b>
        <br>
    </h3>

    <br>
    <!-- <h4 class="text-gray-700"> Kelompok 2 : </h4>
    <h5 class="text-gray-700"> 1. 21.11.4000 Lia Ayu Lestari </h5>
    <h5 class="text-gray-700"> 2. 21.11.4002 Binsar Dwi Jasuma </h5>
    <h5 class="text-gray-700"> 3. 21.11.4003 Iska Rahmawati </h5>
    <h5 class="text-gray-700"> 4. 21.11.4076 Bagus Budi Satoto </h5>
    <h5 class="text-gray-700"> 5. 21.11.4077 Rastra Ardiansyah Pora </h5> -->

    <!-- <h4 class="text-gray-700"> Kelompok 8 : </h4>
    <h5 class="text-gray-700"> 1. 21.11.3919 Miakro Sutikno </h5>
    <h5 class="text-gray-700"> 2. 21.11.4054 Tegar Rifai </h5>
    <h5 class="text-gray-700"> 3. 21.11.4074 Rizki Gunawan </h5>
    <h5 class="text-gray-700"> 4. 21.11.4076 Bagus Budi Satoto </h5>
    <h5 class="text-gray-700"> 5. 21.11.4077 Rastra Ardiansyah Pora </h5> -->


    <?php
}



?>