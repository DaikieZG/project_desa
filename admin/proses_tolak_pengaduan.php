<?php
include '../koneksi.php';
session_start();

if (isset($_POST['id_pengaduan'])) {
    $id = $_POST['id_pengaduan'];
    $isi_tanggapan = $_POST['isi_tanggapan'];
    $nama_petugas   = $_SESSION['nama_petugas'];

    // Simpan alasan penolakan ke kolom tanggapan (jika kamu tidak punya kolom alasan terpisah)
    $query = mysqli_query($koneksi, "UPDATE pengaduan SET status='ditolak' WHERE id_pengaduan='$id'");

    if ($query) {
        // Simpan juga ke tabel tanggapan (kalau ada)
        mysqli_query($koneksi, "UPDATE tanggapan SET 
        tgl_tanggapan = NOW(), 
        tanggapan = '$isi_tanggapan', 
        nama_petugas = '$nama_petugas' 
        WHERE id_pengaduan = '$id'");

        echo "<script>alert('Pengaduan berhasil ditolak'); window.location.href='admin.php?url=verifikasi-tanggapan';</script>";
    } else {
        echo "<script>alert('Gagal menolak pengaduan'); window.history.back();</script>";
    }
} else {
    echo "<script>alert('ID tidak valid'); window.history.back();</script>";
}
