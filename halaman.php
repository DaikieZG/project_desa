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

        case 'lihat-tanggapan':
            include 'lihat_tanggapan.php';
            break;
        case 'ganti-password':
            include 'ganti_password.php';
            break;

        default:
            echo "Halaman Tidak Ditemukan";
            break;
    }
} else {
    echo "Selamat Datang Di Aplikasi Pengaduan Masyarakat, Aplikasi ini bertujuan untuk melaporkan masalah yang ada di masyarakat.<br>";
    echo "Anda Login Sebagai : " . $_SESSION['nama'];
}
