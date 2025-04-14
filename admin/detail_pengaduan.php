<?php

include '../koneksi.php';

$id = $_GET['id'];
if (empty($id)) {
    header("location:masyarakat.php");
}

$id = $_GET['id'];
$query = mysqli_query($koneksi, "
    SELECT pengaduan.*, masyarakat.nama 
    FROM pengaduan 
    JOIN masyarakat ON pengaduan.nik = masyarakat.nik 
    WHERE pengaduan.id_pengaduan = '$id'
");
$data = mysqli_fetch_assoc($query);
$query1 = mysqli_query($koneksi, "SELECT*FROM tanggapan WHERE id_pengaduan='$id'");
$data1 = mysqli_fetch_array($query1);

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

        <form method="post" action="proses_pengaduan.php" enctype="multipart/form-data">

            <div class="form-group">
                <label for="" style="font-size: 14px;">Tgl Pengaduan</label>
                <input type="text" name="tgl_pengaduan" class="form-control" readonly
                    value="<?= $data['tgl_pengaduan']; ?>">
            </div>

            <div class="form-group">
                <label for="" style="font-size: 14px;">Nama Pelapor</label>
                <input type="text" name="tgl_pengaduan" class="form-control" readonly
                    value="<?= $data['nama']; ?>">
            </div>

            <div class="form-group">
                <label for="" style="font-size: 14px;">Isi Laporan</label>
                <textarea name="isi_laporan" id="isi_laporan" class="form-control"
                    readonly><?= $data['isi_laporan']; ?></textarea>
            </div>

            <div class="form-group">
                <label for="" style="font-size: 14px;">Tanggapan</label>
                <textarea name="isi_laporan" id="isi_laporan" class="form-control"
                    readonly><?= $data1['tanggapan'] ; ?></textarea>
            </div>

            <div class="form-group">
                <label for="" style="font-size: 14px;">Foto</label>
                <br>
                <img class="img-thumbnail" src="../foto/<?= $data['foto'] ?>" width="300">
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
              } ?>; color: black;">
                    <?= ucfirst($data['status']); ?>
                </p>
            </div>

        </form>

    </div>
</div>