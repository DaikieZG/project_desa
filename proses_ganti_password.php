<?php
include 'koneksi.php';
session_start();

$nama = $_SESSION['nama'];
$password = md5($_POST['password']);

$query = "SELECT * FROM masyarakat WHERE nama='$nama'";
$result = mysqli_query($koneksi, $query);
$row = mysqli_fetch_assoc($result);
        $query = "UPDATE masyarakat SET password='$password' WHERE nama='$nama'";
        mysqli_query($koneksi, $query);

        if (mysqli_query($koneksi, $query)) {
            echo "<script>alert('Password Sudah diganti'); 
            window.location.assign('masyarakat.php');</script>";
        } else {
            echo "<script>alert('Password Gagal diganti'); 
            window.location.assign('masyarakat.php?url=tulis-pengaduan.php');</script>";
        }