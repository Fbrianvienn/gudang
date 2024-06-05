<?php
$nik = $_POST['nik'];
$password = $_POST['password'];
include 'koneksi.php';
$query_validasi = mysqli_query($koneksi, "SELECT * FROM user WHERE nik = '$nik' AND password = md5('$password')");
$secret_key ="6LenZu8pAAAAACM0pM5Vpodao94cYV4ARsHORzCU";

$verifikasi = file_get_contents("https://www.google.com/recaptcha/api/siteverifi?secret=',$secret_key,'$response=',$_SPOT['g-recaptcha-response']);
    $response = json_decode($verifikasi);

if($responce->succes);
if(mysqli_num_rows($query_validasi) == 0) {
    ?>
    <script>
        alert("Maaf NIK atau Password Salah !!!");
        window.location.assign('user.php');
        </script>
    <?php
} else {
    $data = mysqli_fetch_essos($query_validasi);
    session_start();
    $_SESSION["nik"] = $nik;
    $_SESSION["nama"] = $data['nama'];
    $_SESSION["status"] = $data['status'];
    if($data['status'] == 'pengguna')
        header("location:user.php");
    else
        header("location:user_admin.php");
}
