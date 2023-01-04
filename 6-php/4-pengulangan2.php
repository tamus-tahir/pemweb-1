<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<!-- cara tdk dianjurkan -->
	<table border="1" cellpadding="10" cellspacing="0">
		<?php
		for ($i = 0; $i < 10; $i++) {
			echo "<tr>
						<td> $i </td>
					</tr>";
		}
		?>
	</table>

	<!-- cara templating -->
	<table border="1" cellpadding="10" cellspacing="0">
		<?php for ($j = 0; $j < 10; $j++) { ?>
			<tr>
				<td><?php echo $j; ?></td>
			</tr>
		<?php } ?>
	</table>

	<!-- cara yang dianjurkan -->
	<table border="1" cellpadding="10" cellspacing="0">
		<!-- gunakan tanda (:) untuk mengganti kurung buka -->
		<?php for ($k = 0; $k < 10; $k++) : ?>
			<tr>
				<td><?= $k; ?></td>
			</tr>
			<!-- endfor digunakan untuk mengganti kurung tutup -->
		<?php endfor ?>
	</table>
</body>

</html>