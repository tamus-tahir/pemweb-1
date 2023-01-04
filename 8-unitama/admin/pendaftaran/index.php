<?php include_once '../templates/header.php';  ?>
<?php $pendaftaran = query("SELECT * FROM tabel_pendaftaran JOIN tabel_prodi ON tabel_prodi.id_prodi = tabel_pendaftaran.id_prodi ORDER BY id_pendaftaran DESC"); ?>
<?php security([1, 2]); ?>

<!-- content -->
<div class="container card my-5 p-4 shadow">

    <h1 class="font-title text-primary mb-5">Data Pendaftaran</h1>

    <?php if (isset($_SESSION['berhasil'])) : ?>
        <div class="alert alert-primary" role="alert">
            <?= $_SESSION['berhasil']; ?>
            <?php unset($_SESSION['berhasil']) ?>
        </div>
    <?php endif ?>

    <div class="mb-2">
        <a class="btn btn-info" href="<?= $base_url . 'admin/pendaftaran/print'; ?>" role="button" target="_blank">Cetak PDF Semua Data</a>
    </div>

    <div class="table-responsive">
        <table class="table table-hover table-bordered " id="tabel-pendaftaran">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">No Telpon</th>
                    <th scope="col">Asal Sekolah</th>
                    <th scope="col">Pilihan Prodi</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1 ?>
                <?php foreach ($pendaftaran as $row) : ?>
                    <tr>
                        <th><?= $i++; ?></th>
                        <td><?= tanggalIndo($row['tanggal']); ?></td>
                        <td><?= $row['nama']; ?></td>
                        <td><?= $row['gender'] == 1 ? 'Laki-laki' : 'Perempuan'; ?></td>
                        <td><?= $row['telpon']; ?></td>
                        <td><?= $row['sekolah']; ?></td>
                        <td><?= $row['prodi']; ?></td>
                        <td><?= getStatus($row['status']); ?></td>
                        <td class="text-nowrap">
                            <a class="btn btn-info" href="<?= $base_url . 'admin/pendaftaran/cetak?id=' . $row['id_pendaftaran']; ?>" role="button" target="_blank">Cetak PDF</a>
                            <a class="btn btn-warning" href="<?= $base_url . 'admin/pendaftaran/verifikasi?id=' . $row['id_pendaftaran']; ?>" role="button">Verifikasi</a>
                            <button type="button" class="btn btn-danger" id="btn-modal-delete" data-bs-toggle="modal" data-bs-target="#deleteModal" data-url="<?= $base_url . 'admin/pendaftaran/hapus?id=' . $row['id_pendaftaran']; ?>">
                                Hapus
                            </button>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>

</div>
<!-- end content -->

<?php include_once '../templates/footer.php';  ?>