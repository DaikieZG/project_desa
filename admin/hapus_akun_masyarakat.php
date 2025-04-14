<?php
include '../koneksi.php';

if (isset($_GET['nik'])) {
    $nik = $_GET['nik'];

    // Cek apakah akun ada
    $cek = mysqli_query($koneksi, "SELECT * FROM masyarakat WHERE nik='$nik'");

    if (mysqli_num_rows($cek) > 0) {
        $hapus = mysqli_query($koneksi, "DELETE FROM masyarakat WHERE nik='$nik'");
        echo "<script>alert('Akun berhasil dihapus'); window.location.href='petugas.php?url=masyarakat';</script>";
    } else {
        echo "<script>alert('Akun tidak ditemukan'); window.location.href='petugas.php?url=masyarakat';</script>";
    }
} else {
    echo "<script>alert('NIK tidak valid'); window.location.href='petugas.php?url=masyarakat';</script>";
}
?>