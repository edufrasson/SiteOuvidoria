<?php
session_start();
set_time_limit(300);

$uri_parse = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
include 'Autoload.php';
include 'rotas.php';
    