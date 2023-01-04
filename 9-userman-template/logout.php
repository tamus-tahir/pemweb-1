<?php
session_start();

// berfungsi untuk mengakhiri session
session_unset();

// berfungsi untuk menghapus session
session_destroy();

header('location:' . $base_url . 'login');
