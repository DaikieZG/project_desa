<?php

$koneksi = mysqli_connect('localhost', 'root', '', 'db_pengaduan');

if ($koneksi->connect_error) {
    die("connection failed: ". $koneksi->connect_error);
}