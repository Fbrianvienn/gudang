<?php
session_start();
$judul = $_POST['judul'];
$isi_aduan = $_POST['isi_aduan'];
$tgl_pengaduan = date('YYYY-mm-dd');

include 'koneksi.php';
    $query = mysqli_query($koneksi, "INSERT INTO user(nik,tgl_pengaduan,judul,isi_laporan) VALUES($_SESSION[nik],'$tgl_pengaduan','$judul','$isi_laporan')");
    if($query) {
        ?>
        <script>
            alert("Data Sudah Ditambahkan. Terima kasih !");
            window.location.assign('index.php');
         </script>
    <?php
    } else { 
        ?>
       <script>
            alert("Data dengan NIK tersebut sudah terdaftar");
            window.location.assign('register.php');
         </script> 
    <?php
    }

