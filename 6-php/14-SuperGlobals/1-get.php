<?php

// jika ada variabel submit
// variabel submit ada jika tombol submit ditekan
if (isset($_GET["submit"])) {
	echo $_GET["name"];
}

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
	<!-- 
		get digunakan untuk mengolah data
		data yang dikirim akan tampil di url
		biasa digunakan untuk pagnation atau membuat artikel
		jika actionnya kosong maka data akan dikirim ke halaman ini
		jika tidak menulis action dan method maka 
			action default adalah kosong dan
			method default adalah get
	-->
	<form action="" method="get">
		<input type="text" name="name">
		<button type="submit" name="submit">Send</button>
	</form>

	<!-- 
		disini kita mengisi nilai action data.php
		hasil dari input ini akan diolah pada file data.php
	-->
	<form action="data.php" method="get">
		<input type="text" name="name">
		<button type="submit" name="submit">Send</button>
	</form>
</body>

</html>