<?php include_once '../templates/header.php';  ?>
<?php require_once 'function_tambah.php'; ?>
<?php security([1, 2]); ?>

<!-- content -->
<div class="container card my-5 p-4 shadow">

    <h1 class="font-title text-primary mb-3">Tambah berita</h1>

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
            <input type="text" class="form-control" id="judul" name="judul" required>
        </div>

        <div class="col-md-6">
            <label for="tanggal" class="form-label">Tanggal <span class="text-danger">*</span></label>
            <input type="date" class="form-control" id="tanggal" name="tanggal" required>
        </div>

        <div class="col-md-6">
            <label for="publish" class="form-label">Publish <span class="text-danger">*</span></label>
            <select class="form-select" id="publish" name="publish">
                <option value="1">Yes</option>
                <option value="2">No</option>
            </select>
        </div>

        <div class="col-12">
            <label for="isi" class="form-label">Isi <span class="text-danger">*</span></label>
            <textarea class="form-control ckeditor" id="isi" name="isi" cols="30" rows="10" required></textarea>
        </div>

        <div class="mb-3">
            <label for="sampul" class="form-label">Sampul <span class="text-danger">* (Tipe PNG, JPG, JPEG, MaxSize 500Kb)</span></label>
            <input class="form-control" type="file" id="upload-img" name="sampul">
        </div>

        <img id="preview-img" src="<?= $base_url . 'assets/images/no-image.png'; ?>" width="100%" height="400px" />

        <div>
            <a href="<?= $base_url . 'admin/berita/index'; ?>" class="btn btn-danger me-2">Kembali</a>
            <button type="submit" name="submit" class="btn btn-primary">Tambah</button>
        </div>
    </form>

</div>
<!-- end content -->

<script>
    // let uploadImg = document.getElementById('upload-img');
    // uploadImg.addEventListener('change', function() {
    //     let previewImg = document.getElementById('preview-img');
    //     previewImg.src = URL.createObjectURL(event.target.files[0]);
    // })
</script>

<?php include_once '../templates/footer.php';  ?>