<?php
$data = [
	["wawan", "0411", "Informatika"],
	["andi", "0821", "Mesin"],
	["deni", "0322", "Elektro"],
	["marlin", "0587", "Ekonomi"]
];

// var_dump($data);
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
	<table border="1" cellspacing="0" cellpadding="10">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>NIM</th>
			<th>Prodi</th>
		</tr>
		<?php $i = 1; ?>
		<?php foreach ($data as $mhs) : ?>
			<tr>
				<td><?= $i; ?></td>
				<td><?= $mhs[0]; ?></td>
				<td><?= $mhs[1]; ?></td>
				<td><?= $mhs[2]; ?></td>
			</tr>
			<?php $i++; ?>
		<?php endforeach ?>
	</table>
</body>

</html>