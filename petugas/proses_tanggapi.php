<?php
session_start();
include '../koneksi.php';
$id_pengaduan   = $_POST['id_pengaduan'];
$tgl_tanggapan  = $_POST['tgl_tanggapan'];
$isi_tanggapan  = $_POST['isi_tanggapan'];
$nama_petugas   = $_SESSION['nama_petugas'];

$sql  = "UPDATE pengaduan SET status = 'proses' WHERE id_pengaduan = $id_pengaduan";
$sql2 = "INSERT INTO tanggapan (id_tanggapan, id_pengaduan, tgl_tanggapan, tanggapan, nama_petugas)
         VALUES ('', '$id_pengaduan', '$tgl_tanggapan', '$isi_tanggapan', '$nama_petugas')
         ON DUPLICATE KEY UPDATE 
         tgl_tanggapan='$tgl_tanggapan', tanggapan='$isi_tanggapan', nama_petugas='$nama_petugas'";

$query1 = mysqli_query($koneksi, $sql);
$query2 = mysqli_query($koneksi, $sql2);
    if ($query1 && $query2) {
        echo "<script>alert('Tanggapan Sudah Tersimpan'); 
        window.location.assign('petugas.php?url=tanggapi-laporan');</script>";
    } else {
        echo "<script>alert('Tanggapan Gagal Tersimpan'); 
        window.location.assign('petugas.php?url=tanggapi-laporan');</script>";
    }

