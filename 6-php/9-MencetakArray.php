<?php

$data = ["andi", "0411", "Informatika"]

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
			<th>Nama</th>
			<th>NIM</th>
			<th>Prodi</th>
		</tr>
		<tr>
			<td><?= $data[0]; ?></td>
			<td><?= $data[1]; ?></td>
			<td><?= $data[2]; ?></td>
		</tr>
	</table>
</body>

</html>