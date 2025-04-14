<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tanggapi Laporan</h6>
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
                    include '../koneksi.php';
                    $sql = "SELECT*FROM pengaduan WHERE id_pengaduan ORDER BY nik DESC";
                    $query = mysqli_query($koneksi, $sql);
                    $no = 1;

                    while ($data = mysqli_fetch_array($query)) {
                        if ($data['status'] != 'selesai') {  // Sembunyikan data dengan status 'selesai'
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

                                    <?php if ($data['status'] != 'proses' && $data['status'] != 'ditolak') {  // Menghilangkan tombol "Tanggapi" jika status adalah "proses" 
                                    ?>
                                        <a href="?url=tanggapi-pengaduan&id=<?= $data['id_pengaduan']; ?>" class="btn btn-info btn-icon-split">
                                            <span class="icon text-white-5">
                                                <i class="fa fa-check"></i>
                                            </span>
                                            <span class="text"> Tanggapi </span>
                                        </a>
                                </td>
                            </tr>
                        <?php
                                    }
                        ?>
                <?php
                        }
                    }

                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>