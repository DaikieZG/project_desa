<?php
include '../koneksi.php';

$id = $_POST['id_petugas'];
$lama = md5($_POST['password_lama']);
$baru = $_POST['password_baru'];
$konfirmasi = $_POST['konfirmasi_password'];

$data = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM petugas WHERE id_petugas='$id'"));

if ($data['password'] != $lama) {
    echo "<script>alert('Password lama salah'); window.history.back();</script>";
    exit;
}

if ($baru != $konfirmasi) {
    echo "<script>alert('Konfirmasi password tidak sesuai'); window.history.back();</script>";
    exit;
}

$password_baru = md5($baru);
$update = mysqli_query($koneksi, "UPDATE petugas SET password='$password_baru' WHERE id_petugas='$id'");

if ($update) {
    echo "<script>alert('Password berhasil diubah'); window.location.href='admin.php?url=petugas';</script>";
} else {
    echo "<script>alert('Gagal mengubah password'); window.history.back();</script>";
}
?>