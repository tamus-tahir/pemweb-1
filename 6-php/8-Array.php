<?php

// membuat array
$prodi = ["Teknik", "Sistem", "Bisnis"];

// menampilkan array
var_dump($prodi);
echo "<br>";
print_r($prodi);

echo "<br>";
// cetak salah satu value array
// index array mulai dari 0
echo "$prodi[1]";
?>

<!DOCTYPE html>
<html>

<head>
	<title></title>
</head>

<body>
	<!-- cara pertama, disini kita harus mengetahui jumlah array (not recomended)-->
	<?php for ($i = 0; $i < 3; $i++) : ?>
		<h1><?= $prodi[$i]; ?></h1>
	<?php endfor ?>
	<br>

	<!-- cara kedua kita menghitung jumlah array secara otomatis (not recomended) -->
	<!-- menghitung jumlha data -->
	<?php for ($i = 0; $i < count($prodi); $i++) : ?>
		<h1><?= $prodi[$i]; ?></h1>
	<?php endfor ?>
	<br>

	<!-- cara ketiga (recomended) -->
	<!-- foreach digunakan untuk pengulangan array -->
	<?php foreach ($prodi as $pd) : ?>
		<h1><?= $pd ?></h1>
	<?php endforeach ?>

</body>

</html>