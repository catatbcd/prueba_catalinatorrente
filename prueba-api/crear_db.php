<?php
require __DIR__ . '/vendor/autoload.php';

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmmutable(__DIR__);
$dotenv->load();

$nombreDB = $_ENV['DB_DATABASE']??'prueba';
$usuario = $_ENV['DB_USERNAME']??'root';
$pass = $_ENV['']
