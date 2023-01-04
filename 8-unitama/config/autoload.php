<?php

require_once 'connection.php';
require_once 'helper.php';

session_start();
$base_url = 'http://localhost/unitama/';
$default_route = 'beranda.php';
$uri_segment = explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
