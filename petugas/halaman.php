<?php

if (isset($_GET['url'])) {
    switch ($_GET['url']) {
        case 'tulis-pengaduan';
            include 'tulis_pengaduan.php';
            break;

        case 'lihat-pengaduan';
            include 'lihat_pengaduan.php';
            break;

        case 'detail-pengaduan';
            include 'detail_pengaduan.php';
            break;

        case 'tanggapi-laporan':
            include 'tanggapi_laporan.php';
            break;

        case 'tanggapi-pengaduan':
            include 'tanggapi_pengaduan.php';
            break;

        case 'masyarakat':
            include 'masyarakat.php';
            break;

        case 'hapus-akun-masyarakat':
            include 'hapus_akun_masyarakat.php';
            break;
            
        default:
            echo "Halaman Tidak Ditemukan";
            break;
    }
} else {
    echo "Selamat Datang Di Aplikasi Pengaduan Masyarakat, Aplikasi ini bertujuan untuk melaporkan masalah yang ada di masyarakat.<br>";
    echo "Anda Login Sebagai : " . $_SESSION['nama_petugas'];
}
