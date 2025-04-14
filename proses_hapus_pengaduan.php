<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Pastikan hanya bisa hapus jika status = 0
    $cek = mysqli_query($koneksi, "SELECT * FROM pengaduan WHERE id_pengaduan='$id' AND status= '0' ");
    
    if (mysqli_num_rows($cek) > 0) {
        $hapus = mysqli_query($koneksi, "DELETE FROM pengaduan WHERE id_pengaduan='$id'");
        echo "<script>alert('Data berhasil dihapus'); window.location.href='masyarakat.php?url=lihat-pengaduan';</script>";
    } else {
        echo "<script>alert('Data tidak bisa dihapus (sudah ditanggapi)'); window.location.href='masyarakat.php?url=lihat-pengaduan';</script>";
    }
} else {
    echo "<script>alert('ID tidak valid'); window.location.href='masyarakat.php?url=lihat-pengaduan';</script>";
}