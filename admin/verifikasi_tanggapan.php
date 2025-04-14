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
                        <th>Tgl Tanggapan</th>
                        <th>Isi Laporan</th>
                        <th>Tanggapan</th>
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
                        <th>Tanggapan</th>
                        <th>Foto</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php
                    include '../koneksi.php';
                    $sql = "SELECT p. id_pengaduan, p. isi_laporan, p. foto, p. status, 
                    t. id_tanggapan, t. tgl_tanggapan, t. tanggapan
                    FROM pengaduan p 
                    LEFT JOIN tanggapan t ON p. id_pengaduan = t. id_pengaduan
                    ORDER BY p. nik DESC";


                    $query = mysqli_query($koneksi, $sql);

                    $no = 1;

                    while ($data = mysqli_fetch_array($query)) {
                        if ($data['status'] != '0') {
                    ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= !empty($data['tgl_tanggapan']) ? $data['tgl_tanggapan'] : 'Belum Ditanggapi'; ?></td>
                                <td><?= $data['isi_laporan']; ?></td>
                                <td><?= !empty($data['tanggapan']) ? $data['tanggapan'] : '-'; ?></td>
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
                                    <a href="?url=detail-pengaduan&id=<?= $data['id_pengaduan']; ?>"
                                        class="btn btn-primary btn-icon-split">
                                        <span class="icon text-white-5">
                                            <i class="fa fa-info"></i>
                                        </span>
                                        <span class="text"> Detail </span>
                                    </a>

                                    <?php if ($data['status'] != 'selesai' && $data['status'] != 'ditolak'): ?>
                                        <a href="?url=verifikasi&id=<?= $data['id_pengaduan']; ?>"
                                            class="btn btn-success btn-icon-split">
                                            <span class="icon text-white-5">
                                                <i class="fa fa-check-square"></i>
                                            </span>
                                            <span class="text"> Verifikasi </span>
                                        </a>
                                    <?php endif; ?>
                                    <?php if ($data['status'] != 'ditolak' && $data['status'] != 'selesai') { ?>
                                        <a href="?url=tolak-pengaduan&id=<?= $data['id_pengaduan']; ?>"
                                            class="btn btn-warning btn-icon-split">
                                            <span class="icon text-white-5">
                                                <i class="fa fa-exclamation-triangle"></i>
                                            </span>
                                            <span class="text"> Tolak Pengaduan </span>
                                        </a>
                                    <?php 
                                    }
                                  ?>
                                </td>
                            </tr>
                    <?php
                                    
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>