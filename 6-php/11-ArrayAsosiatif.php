<?php
$data = [
	["nama" => "Awal", "nim" => "0411", "prodi" => "Informatika"],
	["nama" => "Alwi", "nim" => "0821", "prodi" => "Mesin"],
	["nama" => "Marlin", "nim" => "0981", "prodi" => "Elektro"]
];
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
		<?php foreach ($data as $d) : ?>
			<tr>
				<td><?= $i; ?></td>
				<td><?= $d["nama"]; ?></td>
				<td><?= $d["nim"]; ?></td>
				<td><?= $d["prodi"]; ?></td>
			</tr>
			<?php $i++; ?>
		<?php endforeach ?>
	</table>
</body>

</html>