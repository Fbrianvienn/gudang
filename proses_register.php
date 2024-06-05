<?php
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$password = $_POST['password'];

include 'koneksi.php';
$query_validasi = mysqli_query($koneksi, "SELECT * FROM user WHERE nik = '$nik'");

if(mysqli_num_rows($query_validasi) == 0) {
    $query = mysqli_query($koneksi, "INSERT INTO user(nik,nama,password,status) VALUES('$nik','$nama',md5('$password'),'pengguna')");
    if($query) {
        ?>
        <script>
            alert("Data Sudah Ditambahkan. Silahkan Login");
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
}
