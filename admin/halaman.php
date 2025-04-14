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

        case 'verifikasi-tanggapan':
            include 'verifikasi_tanggapan.php';
            break;

        case 'verifikasi':
            include 'verifikasi.php';
            break;

        case 'masyarakat':
            include 'masyarakat.php';
            break;

        case 'hapus-akun-masyarakat':
            include 'hapus_akun_masyarakat.php';
            break;

        case 'petugas':
            include 'petugas.php';
            break;

        case 'tambah-petugas':
            include 'tambah_petugas.php';
            break;

        case 'hapus-petugas':
            include 'hapus_akun_petugas.php';
            break;

        case 'ganti-password-petugas':
            include 'ganti_password_petugas.php';
            break;

        case 'tolak-pengaduan':
            include 'tolak_pengaduan.php';
            break;






        default:
            echo "Halaman Tidak Ditemukan";
            break;
    }
} else {
    echo "Selamat Datang Di Aplikasi Pengaduan Masyarakat, Aplikasi ini bertujuan untuk melaporkan masalah yang ada di masyarakat.<br>";
    echo "Anda Login Sebagai : " . $_SESSION['nama_petugas'];
}
