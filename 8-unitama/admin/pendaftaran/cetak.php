<?php include_once '../../config/autoload.php';  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= $base_url . 'assets/plugins/bootstrap/bootstrap.css'; ?>" rel="stylesheet">
    <title>Cetak Data Pendaftaran</title>

    <style>
        @media print {
            @page {
                margin: 0;
            }

            body {
                margin: 1.6cm;
            }
        }
    </style>
</head>

<body>

    <?php
    $id_pendaftaran = $_GET['id'];
    $pendaftaran = query("SELECT * FROM tabel_pendaftaran JOIN tabel_prodi ON tabel_prodi.id_prodi = tabel_pendaftaran.id_prodi WHERE id_pendaftaran = '$id_pendaftaran'")[0];
    ?>

    <div class="row">
        <div class="col-2 text-center">
            <img src="<?= $base_url; ?>assets/images/logo.png" alt="" width="90">
        </div>
        <div class="col-8">
            <h5>DATA PENDAFTAR</h5>
            <h5>UNIVERSITAS TEKNOLOGI AKBA MAKASSAR</h5>
            <h6>Jl. Perintis Kemerdekaan No.75, Makassar</h6>
        </div>
    </div>

    <hr>
    <hr>

    <table class="table mt-5">
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
        <tr>
            <td>Status</td>
            <td>:</td>
            <td class="fw-bold"><?= getStatusCetak($pendaftaran['status']); ?></td>
        </tr>
    </table>

    <script>
        window.onafterprint = window.close;
        window.print();
    </script>

</body>

</html>