<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Halaman Data</h1>
    <!-- 
        require ==> memasukan file ke dalam dokumen
        jika menggunakan require, file setelahnya tidak akan dijalankan jika requirenya error
        require_once juga memiliki fungsi yang sama dengan include_once
    -->
    <?php require('nav.php') ?>
    <!-- file ini tidak ada otomatis error -->
    <?php require('header.php') ?>
    <h1>End Halaman</h1>
</body>

</html>