<?php
// beberapa function yang telah disediakan oleh php

// isset untuk mengecek apakah sebuah variabel sudah ada atau tidak
$a = "Teknik Informatika";
var_dump(isset($a));

echo "<br>";

$b = "";
if (isset($b)) {
    echo "Sistem Informasi";
}

echo "<br>";

// empty untuk mengecek ada tidaknya isi dari variabel
$var = "";
if (empty($var)) {
    echo 'tidak ada isinya';
} else {
    echo "ada isinya";
}

// die digunakan untuk memberhentikan program
die();

echo 'Script Ini Tidak Dijalankan';
