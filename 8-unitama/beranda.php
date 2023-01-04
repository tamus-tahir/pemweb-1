<?php include_once 'templates/header.php';  ?>

<!-- banner -->
<section class="banner">
    <img src="<?= $base_url; ?>/assets/images/banner.png" alt="">
</section>
<!-- end baner -->

<!--  prodi -->
<section class="container py-5">

    <h1 class="text-center font-title mb-5 text-primary">Program Studi</h1>

    <div class="row justify-content-center g-3">

        <?php $prodi = query("SELECT * FROM tabel_prodi ORDER BY id_prodi ASC"); ?>
        <?php foreach ($prodi as $row) : ?>
            <div class="col-md-4">
                <div class="card shadow text-center">
                    <div class="card-body">
                        <h5 class="card-title"><?= $row['prodi']; ?></h5>
                        <p class="card-text my-3"><?= $row['keterangan']; ?></p>
                        <span class="badge text-bg-primary py-2"><?= $row['akreditasi']; ?></span>
                    </div>
                </div>
            </div>
        <?php endforeach ?>

    </div>

</section>
<!-- end prodi -->

<!--  berita -->
<section class="py-5 bg-light">

    <div class="container">
        <h1 class="text-center font-title mb-5 text-primary">Berita Terbaru</h1>

        <div class="row justify-content-center g-3">

            <?php $berita = query("SELECT * FROM tabel_berita WHERE publish = 1 ORDER BY tanggal DESC LIMIT 3"); ?>
            <?php foreach ($berita as $row) : ?>
                <div class="col-md-4">
                    <div class="card shadow">
                        <img src="<?= $base_url . 'assets/uploads/' . $row['sampul']; ?>" class="card-img-top " alt="<?= $row['judul']; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $row['judul']; ?></h5>
                            <p class="card-text"><?= substr($row['isi'], 0, 200); ?> ......</p>
                            <a href="<?= $base_url . 'detailberita?id=' . $row['id_berita']; ?>" class="btn btn-primary">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>

        </div>
    </div>

</section>
<!-- end berita -->

<?php include_once 'templates/footer.php';  ?>