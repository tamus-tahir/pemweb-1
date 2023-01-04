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
        include ==> memasukan file ke dalam dokumen
        jika menggunakan include, file setelahnya akan tetap dijalankan meskipun includenya error
    -->
    <?php include 'nav.php' ?>
    <!-- file header.php tidak ada ==> menimbulkan error-->
    <?php include 'header.php' ?>
    <h1>End Halaman</h1>
</body>

</html>