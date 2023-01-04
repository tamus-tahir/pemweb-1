<?php

/*
session merupakan data yang disimpan dalam suatu server yang dapat digunakan secara global di server tersebut, dimana data tersebut spesifik merujuk ke user/client tertentu, contoh penggunaan session adalah ketika user telah login di halaman tertentu, maka ketika membuka halaman lain, php akan mengingat bahwa user tersebut telah login
*/

// untuk menggunakan session wajib menambahkan session_start()
session_start();

// membuat nama session dan memebrikan nilai session
// session ini akan hilang jika browser di close atau kita mengapus session
$_SESSION["anime"] = "One Piece";
