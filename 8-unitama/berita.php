<?php include_once 'templates/header.php';  ?>
<?php
if (isset($_GET["keyword"])) {
    $keyword = $_GET["keyword"];
    $berita = query("SELECT * FROM tabel_berita WHERE publish = 1 AND judul LIKE '%$keyword%' ORDER BY tanggal DESC");
} else {
    $berita = query("SELECT * FROM tabel_berita WHERE publish = 1 ORDER BY tanggal DESC");
}
?>

<section class="py-5 ">

    <div class="container">
        <h1 class="text-center font-title mb-5 text-primary">Berita Terbaru</h1>

        <form action="" class="row justify-content-center mb-3">
            <div class="col-md-8">
                <input type="text" class="form-control" placeholder="Cari Berita" name="keyword">
            </div>
            <div class="col-md-2">
                <button class="btn btn-primary w-100" type="sumbit">Cari</button>
            </div>
            <div class="col-md-2 ">
                <a href="<?= $base_url . 'berita'; ?>" class="btn btn-warning w-100">Reset</a>
            </div>
        </form>

        <div class="row justify-content-center g-3">

            <?php foreach ($berita as $row) : ?>
                <div class="col-md-3">
                    <div class="card shadow">
                        <img src="<?= $base_url . 'assets/uploads/' . $row['sampul']; ?>" class="card-img-top " alt="<?= $row['judul']; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $row['judul']; ?></h5>
                            <p class="card-text"><?= substr($row['isi'], 0, 100); ?> ......</p>
                            <a href="<?= $base_url . 'detailberita?id=' . $row['id_berita']; ?>" class="btn btn-primary">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>

        </div>
    </div>

</section>

<?php include_once 'templates/footer.php';  ?>