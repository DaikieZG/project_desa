

<div class="card shadow">
    <div class="card-header">
        <a href="masyarakat.php"class="btn btn-primary btn-icon-split">
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
            <input type="text" name="tgl_pengaduan" class="form-control" readonly value="<?= date('Y-m-d'); ?>">
        </div>

        <div class="form-group">
            <label for="" style="font-size: 14px;">Isi Laporan</label>
            <textarea name="isi_laporan" id="isi_laporan" class="form-control" required></textarea>
        </div>

        <div class="form-group">
            <label for="" style="font-size: 14px;">Foto</label>
            <input type="file" name="foto" class="form-control" required accept="image/*">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary"> SIMPAN </button>
        </div>

    </form>

    </div>
</div>