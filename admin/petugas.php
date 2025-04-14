<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Daftar Petugas</h6>
    </div>
    <div class="d-flex justify-content-end">
    <div class="card-header py-3">
    <a href="?url=tambah-petugas"class="btn btn-primary btn-icon-split">
            <span class="icon text-white-5">
                <i class="	fa fa-plus-square"></i>
            </span>
            <span class="text"> Tambah </span>
        </a>
    </div>
</div>
    <div class="card-body" style="font-size: 14px;">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Petugas</th>
                        <th>Username</th>
                        <th>Telp</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No.</th>
                        <th>Nama Petugas</th>
                        <th>Username</th>
                        <th>Telp</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php
                    include '../koneksi.php';
                    $sql = "SELECT*FROM petugas WHERE id_petugas ORDER BY id_petugas DESC";
                    $query = mysqli_query($koneksi, $sql);
                    $no = 1;
                    while ($data = mysqli_fetch_array($query)) {
                        if($data['level'] != 'admin'): ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $data['nama_petugas']; ?></td>
                            <td><?= $data['username']; ?></td>
                            <td><?= $data['telp']; ?></td>
                            <td>
                                <!--Ini Tombol -->
                                <a href="?url=hapus-petugas&id_petugas=<?= $data['id_petugas']; ?>" class="btn btn-danger btn-icon-split" onclick="return confirm('Yakin ingin menghapus akun ini?')">

                                    <span class="icon text-white-5">
                                        <i class="fa fa-exclamation"></i>
                                    </span>
                                    <span class="text"> Hapus Akun </span>
                                </a>
                                <a href="?url=ganti-password-petugas&id_petugas=<?= $data['id_petugas']; ?>" class="btn btn-info btn-icon-split">

                                    <span class="icon text-white-5">
                                        <i class="fa fa-key"></i>
                                    </span>
                                    <span class="text"> Ganti Password </span>
                                </a>
                            </td>
                        </tr>
                        <?php endif; ?>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>