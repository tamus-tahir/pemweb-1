<?php include_once '../templates/header.php';  ?>
<?php require_once 'function_ubah.php'; ?>
<?php security([1]); ?>

<?php
$id_berita = $_GET['id'];
$berita = query("SELECT * FROM tabel_berita WHERE id_berita = $id_berita")[0];
?>

<!-- content -->
<div class="container card my-5 p-4 shadow">

    <h1 class="font-title text-primary mb-3">Detail Berita</h1>

    <p class="fw-bold"><?= $berita['judul']; ?></p>

    <img src="<?= $base_url . 'assets/uploads/' . $berita['sampul']; ?>" alt="<?= $berita['judul']; ?>" class="w-100 rounded mb-3">

    <p class="fw-bold"><?= tanggalIndo($berita['tanggal']); ?></p>

    <div class="my-2">
        <?= $berita['isi']; ?>
    </div>

    <div>
        <a href="<?= $base_url . 'admin/berita/index'; ?>" class="btn btn-danger me-2">Kembali</a>
    </div>

</div>
<!-- end content -->

<?php include_once '../templates/footer.php';  ?>