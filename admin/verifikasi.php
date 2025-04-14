<?php

include '../koneksi.php';

$id = $_GET['id'];
if (empty($id)) {
    header("location:masyarakat.php");
}

$query = mysqli_query($koneksi, "SELECT p.*, t. tanggapan 
                                 FROM pengaduan p 
                                 LEFT JOIN tanggapan t ON p. id_pengaduan = t. id_pengaduan 
                                 WHERE p. id_pengaduan='$id'");
$data = mysqli_fetch_array($query);

?>

<div class="card shadow">
    <div class="card-header">
        <a href="?url=verifikasi-tanggapan" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-5">
                <i class="fa fa-arrow-left"></i>
            </span>
            <span class="text"> Kembali </span>
        </a>
    </div>
    <div class="card-body">

        <form method="post" action="proses_verifikasi.php" enctype="multipart/form-data">


            <div class="form-group">
                <input type="text" id="id_pengaduan" name="id_pengaduan" class="form-control" readonly value="<?= $data['id_pengaduan']; ?>" hidden>
            </div>

            <div class="form-group">
                <label for="" style="font-size: 14px;">Tgl Tanggapan</label>
                <input type="text" name="tgl_tanggapan" class="form-control" readonly value="<?= date('Y-m-d'); ?>">
            </div>

            <div class="form-group">
                <label for="" style="font-size: 14px;">Isi Laporan</label>
                <textarea name="isi_laporan" id="isi_laporan" class="form-control"
                    readonly><?= $data['isi_laporan']; ?></textarea>
            </div>

            <div class="form-group">
                <label for="" style="font-size: 14px;">Foto</label>
                <br>
                <img class="img-thumbnail" src="../foto/<?= $data['foto'] ?>" width="300">
            </div>
            <div class="form-group">
                <label for="" style="font-size: 14px;">Isi Tanggapan / Alasan</label>
                <textarea name="isi_tanggapan" id="isi_tanggapan" class="form-control" placeholder="Isi Tanggapan / Alasan"
                    required><?= $data['tanggapan'] ?></textarea>
                <br>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary"> SIMPAN </button>
                </div>

        </form>

    </div>
</div>