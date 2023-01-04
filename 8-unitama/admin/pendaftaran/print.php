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
                size: landscape;
            }

            body {
                margin: 1.6cm;
                font-size: 14px;
            }
        }
    </style>
</head>

<body>

    <?php
    $pendaftaran = query("SELECT * FROM tabel_pendaftaran JOIN tabel_prodi ON tabel_prodi.id_prodi = tabel_pendaftaran.id_prodi ORDER BY id_pendaftaran ASC");
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

    <table class="table table-hover table-bordered mt-5">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">No Telpon</th>
                <th scope="col">Asal Sekolah</th>
                <th scope="col">Pilihan Prodi</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1 ?>
            <?php foreach ($pendaftaran as $row) : ?>
                <tr>
                    <th><?= $i++; ?></th>
                    <td><?= tanggalIndo($row['tanggal']); ?></td>
                    <td><?= $row['nama']; ?></td>
                    <td><?= $row['gender'] == 1 ? 'Laki-laki' : 'Perempuan'; ?></td>
                    <td><?= $row['telpon']; ?></td>
                    <td><?= $row['sekolah']; ?></td>
                    <td><?= $row['prodi']; ?></td>
                    <td><?= getStatusCetak($row['status']); ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>

    <script>
        window.onafterprint = window.close;
        window.print();
    </script>

</body>

</html>