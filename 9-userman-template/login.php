<?php include_once 'config/autoload.php';  ?>

<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Tamus Tahir">
    <meta name="keywords" content="Pemograman Web, Unitama, Akba">
    <meta name="description" content="Website ini merupakan studi kasus pada Mata Kuliah Pemograman Web di Universita Teknologi Akba Makassar">

    <title>Unitama</title>
    <link rel="icon" href="<?= $base_url; ?>assets/images/logo.png">

    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <!-- end font -->

    <link href="<?= $base_url . 'assets/plugins/bootstrap/bootstrap.css'; ?>" rel="stylesheet">
    <link href="<?= $base_url . 'assets/plugins/fontawesome-free-6.2.1/css/all.css'; ?>" rel="stylesheet">
    <link href="<?= $base_url . 'assets/css/style.css'; ?>" rel="stylesheet">

    <style>
        .content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            min-width: 350px;
        }

        img {
            width: 200px;
        }
    </style>

</head>

<body class="bg-secondary">

    <div class="content  ">

        <div class="text-center mb-3">
            <img src="<?= $base_url; ?>assets/images/logo.png" alt="Logo-Unitama">
        </div>

        <form action="<?= $base_url . 'proses/login.php'; ?>" method="post" class="card p-3">

            <?php if (isset($_SESSION['gagal'])) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= $_SESSION['gagal']; ?>
                    <?php unset($_SESSION['gagal']) ?>
                </div>
            <?php endif ?>

            <div class="mb-3 ">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary mb-2" name="submit">Login</button>
            <a class="btn btn-warning" href="<?= $base_url; ?>">Beranda</a>

        </form>

    </div>

    <script src="<?= $base_url . 'assets/plugins/bootstrap/bootstrap.js'; ?>"></script>
    <script src="<?= $base_url . 'assets/js/source.js'; ?>"></script>
</body>

</html>