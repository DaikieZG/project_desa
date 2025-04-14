<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Daftar Masyarakat</h6>
    </div>
    <div class="card-body" style="font-size: 14px;">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nik</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Telp</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No.</th>
                        <th>Nik</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Telp</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php
                    include '../koneksi.php';
                    $sql = "SELECT*FROM masyarakat WHERE nik ORDER BY nik DESC";
                    $query = mysqli_query($koneksi, $sql);
                    $no = 1;
                    while ($data = mysqli_fetch_array($query))   { 
                    ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $data['nik']; ?></td>
                                <td><?= $data['nama']; ?></td>
                                <td><?= $data['username']; ?></td>
                                <td><?= $data['telp']; ?></td>
                                <td>
                                    <!--Ini Tombol -->
                                    <a href="?url=hapus-akun-masyarakat&nik=<?= $data['nik']; ?>" class="btn btn-danger btn-icon-split" onclick="return confirm('Yakin ingin menghapus akun ini?')">

                                        <span class="icon text-white-5">
                                            <i class="fa fa-exclamation"></i>
                                        </span>
                                        <span class="text"> Hapus Akun </span>
                                    </a>
                                </td>
                            </tr>
                        <?php
                                    }
                        ?>
                </tbody>
            </table>
        </div>
    </div>
</div>