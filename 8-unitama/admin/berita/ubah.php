<?php include_once '../templates/header.php';  ?>
<?php require_once 'function_ubah.php'; ?>
<?php security([1, 2]); ?>

<?php
$id_berita = $_GET['id'];
$berita = query("SELECT * FROM tabel_berita WHERE id_berita = $id_berita")[0];
?>

<!-- content -->
<div class="container card my-5 p-4 shadow">

    <h1 class="font-title text-primary mb-3">Ubah Berita</h1>

    <?php if (isset($_SESSION['gagal'])) : ?>
        <div class="alert alert-danger" role="alert">
            <?= $_SESSION['gagal']; ?>
            <?php unset($_SESSION['gagal']) ?>
        </div>
    <?php endif ?>
    <?php if (isset($_SESSION['error'])) : ?>
        <div class="alert alert-danger" role="alert">
            <?= $_SESSION['error']; ?>
            <?php unset($_SESSION['error']) ?>
        </div>
    <?php endif ?>

    <form action="" method="post" class="row g-3" enctype="multipart/form-data">

        <div class="col-12">
            <label for="judul" class="form-label">Judul <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="judul" name="judul" required value="<?= $berita['judul']; ?>">
        </div>

        <div class="col-md-6">
            <label for="tanggal" class="form-label">Tanggal <span class="text-danger">*</span></label>
            <input type="date" class="form-control" id="tanggal" name="tanggal" required value="<?= $berita['tanggal']; ?>">
        </div>

        <div class="col-md-6">
            <label for="publish" class="form-label">Publish <span class="text-danger">*</span></label>
            <select class="form-select" id="publish" name="publish">
                <option value="1" <?= $berita['publish'] == 1 ? 'selected' : ''; ?>>Yes</option>
                <option value="2" <?= $berita['publish'] == 2 ? 'selected' : ''; ?>>No</option>
            </select>
        </div>

        <div class="col-12">
            <label for="isi" class="form-label">Isi <span class="text-danger">*</span></label>
            <textarea class="form-control ckeditor" id="isi" name="isi" cols="30" rows="10" required><?= $berita['isi']; ?></textarea>
        </div>

        <div class="mb-3">
            <label for="sampul" class="form-label">Sampul <span class="text-danger">* (Tipe PNG, JPG, JPEG, MaxSize 500Kb)</span></label>
            <input class="form-control" type="file" id="upload-img" name="sampul">
        </div>

        <img id="preview-img" src="<?= $base_url . 'assets/uploads/' . $berita['sampul']; ?>" width="100%" height="400px" />

        <input type="hidden" name="sampul_lama" value="<?= $berita['sampul']; ?>">
        <input type="hidden" name="id_berita" value="<?= $berita['id_berita']; ?>">

        <div>
            <a href="<?= $base_url . 'admin/berita/index'; ?>" class="btn btn-danger me-2">Kembali</a>
            <button type="submit" name="submit" class="btn btn-primary">Ubah</button>
        </div>
    </form>

</div>
<!-- end content -->

<?php include_once '../templates/footer.php';  ?>