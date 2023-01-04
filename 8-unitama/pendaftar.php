<?php include_once 'templates/header.php';  ?>
<?php
if (isset($_GET["keyword"])) {
    $keyword = $_GET["keyword"];
    $pendaftar = query("SELECT * FROM tabel_pendaftaran JOIN tabel_prodi ON tabel_prodi.id_prodi = tabel_pendaftaran.id_prodi WHERE telpon = '$keyword' ORDER BY id_pendaftaran DESC");
}
?>

<section class="py-5 ">

    <div class="container">
        <h1 class="text-center font-title mb-5 text-primary">Cek Data Pendaftaran</h1>

        <form action="" class="row justify-content-center mb-3">
            <div class="col-md-8">
                <input type="text" class="form-control" placeholder="Cari Data Berdasarkan Nomor Telpon" name="keyword">
            </div>
            <div class="col-md-2">
                <button class="btn btn-primary w-100" type="sumbit">Cari</button>
            </div>
            <div class="col-md-2 ">
                <a href="<?= $base_url . 'pendaftar'; ?>" class="btn btn-warning w-100">Reset</a>
            </div>
        </form>

        <div class="card shadow p-3">

            <?php if (isset($pendaftar)) : ?>
                <?php if ($pendaftar) : ?>
                    <?php foreach ($pendaftar as $row) : ?>
                        <table class="table mb-3">
                            <tr>
                                <td width="170px">Nama</td>
                                <td width="5px">:</td>
                                <td class="fw-bold"><?= $row['nama']; ?></td>
                            </tr>
                            <tr>
                                <td>Asal Sekolah</td>
                                <td>:</td>
                                <td class="fw-bold"><?= $row['sekolah']; ?></td>
                            </tr>
                            <tr>
                                <td>Prodi</td>
                                <td>:</td>
                                <td class="fw-bold"><?= $row['prodi']; ?></td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>:</td>
                                <td class="fw-bold"><?= getStatus($row['status']); ?></td>
                            </tr>
                            <tr>
                                <td>Tanggal Pendaftaran</td>
                                <td>:</td>
                                <td class="fw-bold"><?= tanggalIndo($row['tanggal']); ?></td>
                            </tr>
                        </table>
                    <?php endforeach ?>
                <?php else : ?>
                    <h6 class="text-danger">Data tidak ditemukan</h6>
                <?php endif ?>
            <?php else : ?>
                <h6 class="fw-bold">Lakukan pencarian data pada form input dengan memasukan nomor telpon pada saat pendaftaran</h6>
            <?php endif ?>

        </div>


    </div>

</section>

<?php include_once 'templates/footer.php';  ?>