<?php include_once 'templates/header.php';  ?>
<?php
$id_berita = $_GET['id'];
$berita = query("SELECT * FROM tabel_berita WHERE id_berita = $id_berita")[0];
?>

<section class="py-5 ">

    <div class="container">
        <h3 class="text-center font-title mb-5 text-primary"><?= $berita['judul']; ?></h3>
        <div class="card shadow">
            <img src="<?= $base_url . 'assets/uploads/' . $berita['sampul']; ?>" alt="<?= $berita['judul']; ?>" class="w-100 rounded mb-3">
            <div class="card-body">
                <p class="fw-bold"><?= tanggalIndo($berita['tanggal']); ?></p>
                <div class="my-2">
                    <?= $berita['isi']; ?>
                </div>
                <div>
                    <a href="<?= $base_url; ?>" class="btn btn-primary me-2">Beranda</a>
                    <a href="<?= $base_url . 'berita'; ?>" class="btn btn-success me-2">Berita</a>
                </div>
            </div>
        </div>
    </div>

</section>

<?php include_once 'templates/footer.php';  ?>