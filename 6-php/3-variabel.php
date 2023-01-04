<?php
// membuat variabel
$prodi = "Informatika";
// cetak variabel
echo $prodi;

echo '<br>';

// penggabungan variabel
$nama_depan = "Tamus";
$nama_belakang = "Tahir";

// tanda (.) digunakan untuk menggabungkan variabel
echo $nama_depan . " " . $nama_belakang;
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<!-- cetak variabel -->
	<h1>Teknik <?= $prodi; ?></h1>
</body>

</html>