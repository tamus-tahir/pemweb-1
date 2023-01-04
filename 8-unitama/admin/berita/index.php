<?php include_once '../templates/header.php';  ?>
<?php $berita = query("SELECT * FROM tabel_berita ORDER BY id_berita DESC"); ?>
<?php security([1, 2]); ?>

<!-- content -->
<div class="container card my-5 p-4 shadow">

    <h1 class="font-title text-primary mb-5">Berita</h1>

    <?php if (isset($_SESSION['berhasil'])) : ?>
        <div class="alert alert-primary" role="alert">
            <?= $_SESSION['berhasil']; ?>
            <?php unset($_SESSION['berhasil']) ?>
        </div>
    <?php endif ?>

    <div class="mb-3">
        <a class="btn btn-primary" href="<?= $base_url . 'admin/berita/tambah'; ?>" role="button">Tambah</a>
    </div>

    <div class="table-responsive">
        <table class="table table-hover table-bordered " id="data-table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Publish</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1 ?>
                <?php foreach ($berita as $row) : ?>
                    <tr>
                        <th><?= $i++; ?></th>
                        <td><?= tanggalIndo($row['tanggal']); ?></td>
                        <td><?= $row['judul']; ?></td>
                        <td><?= $row['publish'] == 1 ? 'Yes' : 'No'; ?></td>
                        <td class="text-nowrap">
                            <a class="btn btn-info" href="<?= $base_url . 'admin/berita/detail?id=' . $row['id_berita']; ?>" role="button">Detail</a>
                            <a class="btn btn-warning" href="<?= $base_url . 'admin/berita/ubah?id=' . $row['id_berita']; ?>" role="button">Ubah</a>
                            <button type="button" class="btn btn-danger" id="btn-modal-delete" data-bs-toggle="modal" data-bs-target="#deleteModal" data-url="<?= $base_url . 'admin/berita/hapus?id=' . $row['id_berita']; ?>">
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