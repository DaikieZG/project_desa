<?php

include 'koneksi.php';

$id = $_GET['id'];
if (empty($id)) {
    header("location:masyarakat.php");
}

$query = mysqli_query($koneksi, "SELECT*FROM pengaduan,tanggapan WHERE tanggapan.id_pengaduan='$id' AND tanggapan.id_pengaduan=pengaduan.id_pengaduan");

?>

<div class="card shadow">
    <div class="card-header">
        <a href="?url=lihat-pengaduan" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-5">
                <i class="fa fa-arrow-left"></i>
            </span>
            <span class="text"> Kembali </span>
        </a>
    </div>
    <div class="card-body">
        <?php
        if (mysqli_num_rows($query) == 0) {
            echo "<div class='alert alert-danger'>Maaf, Pengaduan Anda Belum Ditanggapi.</div>";
        } else {
            $data = mysqli_fetch_array($query); ?>

            <form method="post" action="proses_pengaduan.php" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="" style="font-size: 14px;">Tgl Pengaduan</label>
                    <input type="text" name="tgl_pengaduan" class="form-control" readonly
                        value="<?= $data['tgl_pengaduan']; ?>">
                </div>
                <div class="form-group">
                    <label for="" style="font-size: 14px;">Tgl Tanggapan</label>
                    <input type="text" name="tgl_pengaduan" class="form-control" readonly
                        value="<?= $data['tgl_tanggapan']; ?>">
                </div>

                <div class="form-group">
                    <label for="" style="font-size: 14px;">Laporan</label>
                    <textarea name="isi_laporan" id="isi_laporan" class="form-control"
                        readonly><?= $data['isi_laporan']; ?></textarea>
                </div>

                <div class="form-group">
                    <label for="" style="font-size: 14px;">Tanggapan</label>
                    <textarea name="tanggapan" id="tanggapan" class="form-control"
                        readonly><?= $data['tanggapan']; ?></textarea>
                </div>

                <div class="form-group">
                    <label for="" style="font-size: 14px;">Foto</label>
                    <br>
                    <img class="img-thumbnail" src="foto/<?= $data['foto'] ?>" width="300">
                </div>

                <div class="form-group">
                    <label for="" style="font-size: 14px;">Status</label>
                    <p name="isi_laporan" id="isi_laporan" class="form-control" style="background-color: 
              <?php if ($data['status'] == '0') {
                    echo '#d3d3d3';  // Abu-abu
                } elseif ($data['status'] == 'proses') {
                    echo '#ffeb3b';  // Kuning
                } elseif ($data['status'] == 'selesai') {
                    echo '#4caf50';  // Hijau
                } elseif ($data['status'] == 'ditolak') {
                    echo '#E4080A';  // Merah
                } ?>; color: black;">
                        <?= ucfirst($data['status']); ?>
                    </p>
                </div>


            </form>
        <?php
        }
        ?>

    </div>
</div>