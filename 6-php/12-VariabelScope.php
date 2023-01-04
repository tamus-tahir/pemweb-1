<?php

$x = 100;
$y = 200;

function tambah()
{
	// untuk dapat digunakan variabel tersebut dijadikan global variabel
	global $x, $y;
	return $x + $y;
}

echo tambah();
