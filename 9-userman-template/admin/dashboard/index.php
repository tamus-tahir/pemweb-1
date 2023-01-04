<?php include_once '../templates/header.php';  ?>
<?php security(); ?>

<!-- content -->
<div class="container card my-5 p-4 shadow">

    <h1 class="font-title text-primary mb-3">Dashboard</h1>
    <?php if (isset($_SESSION['berhasil'])) : ?>
        <div class="alert alert-primary" role="alert">
            <?= $_SESSION['berhasil']; ?>
            <?php unset($_SESSION['berhasil']) ?>
        </div>
    <?php endif ?>

    <?php if (isset($_SESSION['gagal'])) : ?>
        <div class="alert alert-danger" role="alert">
            <?= $_SESSION['gagal']; ?>
            <?php unset($_SESSION['gagal']) ?>
        </div>
    <?php endif ?>

</div>

<!-- end content -->

<?php include_once '../templates/footer.php';  ?>