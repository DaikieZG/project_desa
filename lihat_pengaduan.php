<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Pengaduan</h6>
    </div>
    <div class="card-body" style="font-size: 14px;">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Tgl Pengaduan</th>
                        <th>Isi Laporan</th>
                        <th>Foto</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No.</th>
                        <th>Tgl Pengaduan</th>
                        <th>Isi Laporan</th>
                        <th>Foto</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php
                    include 'koneksi.php';
                    $sql = "SELECT*FROM pengaduan WHERE nik='$_SESSION[nik]' ORDER BY id_pengaduan DESC";
                    $query = mysqli_query($koneksi, $sql);
                    $no = 1;

                    while ($data = mysqli_fetch_array($query)) {

                    ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $data['tgl_pengaduan']; ?></td>
                            <td><?= $data['isi_laporan']; ?></td>
                            <td><?= $data['foto']; ?></td>
                            <td><?php
                                    if ($data['status'] == '0') {
                                        echo "Belum Ditanggapi";
                                    } elseif ($data['status'] == 'proses') {
                                        echo "<span class='text-warning'>Sedang Diperoses</span>";
                                    } elseif ($data['status'] == 'selesai') {
                                        echo "<span class='text-primary'>Selesai</span>";
                                    } elseif ($data['status'] == 'ditolak') {
                                        echo "<span class='text-danger'>Ditolak</span>";
                                    } else {
                                        echo $data['status'];
                                    }
                                    ?></td>
                            <td>
                                <!--Ini Tombol -->
                                <a href="?url=detail-pengaduan&id=<?= $data['id_pengaduan']; ?>" class="btn btn-primary btn-icon-split">
                                    <span class="icon text-white-5">
                                        <i class="fa fa-info"></i>
                                    </span>
                                    <span class="text"> Detail </span>
                                </a>

                                <a href="?url=lihat-tanggapan&id=<?= $data['id_pengaduan']; ?>" class="btn btn-info btn-icon-split">
                                    <span class="icon text-white-5">
                                        <i class="fa fa-check-square"></i>
                                    </span>
                                    <span class="text"> Lihat Tanggapan </span>
                                </a>
                                <?php if ($data['status'] == 0): ?>
                                    <a href="proses_hapus_pengaduan.php?id=<?= $data['id_pengaduan']; ?>"
                                        onclick="return confirm('Yakin ingin menghapus pengaduan ini?')"
                                        class="btn btn-danger btn-icon-split"><span class="icon text-white-5">
                                            <i class="fa fa-exclamation"></i>
                                        </span>
                                        <span class="text"> Hapus </span></a>
                                <?php else: ?>
                                    <span class="text-muted">Tidak bisa dihapus</span>
                                <?php endif; ?>
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