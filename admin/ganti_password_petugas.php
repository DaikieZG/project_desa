<?php
include '../koneksi.php';
$id_petugas = $_GET['id_petugas'];
$data = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM petugas WHERE id_petugas='$id_petugas'"));
?>
<div class="card shadow">
    <div class="card-header">
        <a href="?url=petugas" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-5">
                <i class="fa fa-arrow-left"></i>
            </span>
            <span class="text"> Kembali </span>
        </a>
    </div>
    <div class="card-body">

        <form method="post" action="proses_ganti_password_petugas.php" enctype="multipart/form-data">

            <div class="form-group">
                <input type="hidden" name="id_petugas" value="<?= $data['id_petugas']; ?>">
            </div>

            <div class="form-group">
                <label>Password Lama:</label><br>
                <input type="password" name="password_lama" required>
            </div>
            <div class="form-group">
                <label>Password Baru:</label><br>
                <input type="password" name="password_baru" required>
            </div>
            <div class="form-group">
                <label>Konfirmasi Password Baru:</label><br>
                <input type="password" name="konfirmasi_password" required>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary"> Tambah </button>
            </div>

        </form>

    </div>
</div>