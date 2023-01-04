<?php

session_start();

// jika kita belum membuka page1 maka akan terjadi error karna $_SESSION["anime"] belum ada
// $_SESSION["anime"] didapatkan ketika kita membuka page1
echo $_SESSION["anime"];
