<?php include_once '../templates/header.php';  ?>
<?php require_once 'function_ubah.php'; ?>
<?php security([1, 2]); ?>

<?php
$id_prodi = $_GET['id'];
$prodi = query("SELECT * FROM tabel_prodi WHERE id_prodi = $id_prodi")[0];
?>

<!-- content -->
<div class="container card my-5 p-4 shadow">

    <h1 class="font-title text-primary mb-3">Ubah Prodi</h1>

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

    <form action="" method="post" class="row g-3">

        <div class="col-md-9">
            <label for="prodi" class="form-label">Prodi <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="prodi" name="prodi" required value="<?= $prodi['prodi']; ?>">
        </div>
        <div class="col-md-3">
            <label for="akreditasi" class="form-label">Akreditasi <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="akreditasi" name="akreditasi" required value="<?= $prodi['akreditasi']; ?>">
        </div>
        <div class="col-12">
            <label for="keterangan" class="form-label">Keterangan <span class="text-danger">*</span></label>
            <textarea class="form-control " id="keterangan" name="keterangan" cols="30" rows="2" required><?= $prodi['keterangan']; ?></textarea>
        </div>

        <input type="hidden" name="id_prodi" value="<?= $prodi['id_prodi']; ?>">

        <div>
            <a href="<?= $base_url . 'admin/prodi/index'; ?>" class="btn btn-danger me-2">Kembali</a>
            <button type="submit" name="submit" class="btn btn-primary">Ubah</button>
        </div>
    </form>

</div>
<!-- end content -->

<?php include_once '../templates/footer.php';  ?>