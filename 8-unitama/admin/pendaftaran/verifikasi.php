<?php include_once '../templates/header.php';  ?>
<?php require_once 'function_verifikasi.php'; ?>
<?php security([1, 2]); ?>

<?php
$id_pendaftaran = $_GET['id'];
$pendaftaran = query("SELECT * FROM tabel_pendaftaran JOIN tabel_prodi ON tabel_prodi.id_prodi = tabel_pendaftaran.id_prodi WHERE id_pendaftaran = '$id_pendaftaran'")[0];
?>

<!-- content -->
<div class="container card my-5 p-4 shadow">

    <h1 class="font-title text-primary mb-3">Verifikasi Pendaftaran</h1>

    <?php if (isset($_SESSION['gagal'])) : ?>
        <div class="alert alert-danger" role="alert">
            <?= $_SESSION['gagal']; ?>
            <?php unset($_SESSION['gagal']) ?>
        </div>
    <?php endif ?>

    <form action="" method="post" class="row g-3">

        <table class="table mb-3">
            <tr>
                <td width="170px">Nama</td>
                <td width="5px">:</td>
                <td class="fw-bold"><?= $pendaftaran['nama']; ?></td>
            </tr>
            <tr>
                <td>Telpon</td>
                <td>:</td>
                <td class="fw-bold"><?= $pendaftaran['telpon']; ?></td>
            </tr>
            <tr>
                <td>Asal Sekolah</td>
                <td>:</td>
                <td class="fw-bold"><?= $pendaftaran['sekolah']; ?></td>
            </tr>
            <tr>
                <td>Prodi</td>
                <td>:</td>
                <td class="fw-bold"><?= $pendaftaran['prodi']; ?></td>
            </tr>
            <tr>
                <td>Tanggal Pendaftaran</td>
                <td>:</td>
                <td class="fw-bold"><?= tanggalIndo($pendaftaran['tanggal']); ?></td>
            </tr>
        </table>

        <div class=" col-md-4">
            <label for="status" class="form-label">Verifikasi pendaftaran <span class="text-danger">*</span></label>
            <select class="form-select" id="status" name="status" required>
                <option value="">-- Pilih Verifikasi --</option>
                <option value="1" <?= $pendaftaran['status'] == 1 ? 'selected' : ''; ?>>Belum Diverifikasi</option>
                <option value="2" <?= $pendaftaran['status'] == 2 ? 'selected' : ''; ?>>Pendaftaran Disetujui</option>
                <option value="3" <?= $pendaftaran['status'] == 3 ? 'selected' : ''; ?>>Lulus</option>
                <option value="4" <?= $pendaftaran['status'] == 4 ? 'selected' : ''; ?>>Pendaftaran Ditolak</option>
            </select>
        </div>

        <input type="hidden" name="id_pendaftaran" value="<?= $pendaftaran['id_pendaftaran']; ?>">

        <div>
            <a href="<?= $base_url . 'admin/pendaftaran/index'; ?>" class="btn btn-danger me-2">Kembali</a>
            <button type="submit" name="submit" class="btn btn-primary">Ubah</button>
        </div>
    </form>

</div>
<!-- end content -->

<?php include_once '../templates/footer.php';  ?>