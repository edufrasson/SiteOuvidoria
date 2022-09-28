<?php
session_start();

$uri_parse = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
include 'config.php';
include 'Autoload.php';
include 'rotas.php';
    