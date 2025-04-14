<?php
include '../koneksi.php';


    $nama_petugas = $_POST['nama_petugas'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $telp = $_POST['telp'];

    mysqli_query($koneksi, "INSERT INTO petugas (id_petugas, nama_petugas, username, password, telp, level) VALUES ('','$nama_petugas', '$username', '$password', $telp, 'petugas')");

    echo "<script>alert('Anda Berhasil Menambahkan Petugas.'); window.location.assign('admin.php?url=petugas');</script>";