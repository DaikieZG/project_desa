<?php
include '../koneksi.php';

if (isset($_GET['id_petugas'])) {
    $id_petugas = $_GET['id_petugas'];

    // Pastikan id valid & bukan admin
    $cek = mysqli_query($koneksi, "SELECT * FROM petugas WHERE id_petugas='$id_petugas' AND level != 'admin'");

    if (mysqli_num_rows($cek) > 0) {
        mysqli_query($koneksi, "DELETE FROM petugas WHERE id_petugas='$id_petugas'");
        echo "<script>alert('Akun petugas berhasil dihapus'); window.location.href='admin.php?url=petugas';</script>";
    } else {
        echo "<script>alert('Akun tidak ditemukan atau level admin tidak boleh dihapus'); window.location.href='admin.php?url=petugas';</script>";
    }
} else {
    echo "<script>alert('ID tidak valid'); window.location.href='admin.php?url=petugas';</script>";
}