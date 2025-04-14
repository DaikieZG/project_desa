<?php
include 'koneksi.php';

// Aktifkan mode error untuk menangkap exception
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $telp = $_POST['telp'];

    $sql = "INSERT INTO masyarakat (nik, nama, username, password, telp) 
            VALUES ('$nik', '$nama', '$username', '$password', '$telp')";

    $query = mysqli_query($koneksi, $sql);

    echo "<script>alert('Anda Berhasil Mendaftar.'); window.location.assign('index.php');</script>";

} catch (mysqli_sql_exception $e) {
    if (strpos($e->getMessage(), 'Duplicate entry') !== false) {
        echo "<script>alert('NIK sudah terdaftar. Gunakan NIK lain.'); window.location.assign('register.php');</script>";
    } else {
        echo "<script>alert('Pendaftaran gagal: {$e->getMessage()}'); window.location.assign('register.php');</script>";
    }
}