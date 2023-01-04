<?php

if (isset($_POST["submit"])) {
	echo $_POST["username"];
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
		post digunakan untuk mengolah data
		data yang dikirim tidak akan tampil di url
	-->
	<form action="" method="post">
		<input type="text" name="username">
		<button type="submit" name="submit">Login</button>
	</form>
</body>

</html>