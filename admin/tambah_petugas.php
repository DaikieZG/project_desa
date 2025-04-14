
<div class="card shadow">
    <div class="card-header">
        <a href="?url=petugas"class="btn btn-primary btn-icon-split">
            <span class="icon text-white-5">
                <i class="fa fa-arrow-left"></i>
            </span>
            <span class="text"> Kembali </span>
        </a>
    </div>
    <div class="card-body">

    <form method="post" action="proses_tambah_petugas.php" enctype="multipart/form-data">

        <div class="form-group">
            <label for="" style="font-size: 14px;">Nama Petugas</label>
            <input type="text" name="nama_petugas" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="" style="font-size: 14px;">Username</label>
            <input type="text" name="username" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="" style="font-size: 14px;">Password</label>
            <input name="password" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="" style="font-size: 14px;">Telp.</label>
            <input type="number" name="telp" class="form-control" required>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary"> Tambah </button>
        </div>

    </form>

    </div>
</div>