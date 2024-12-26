<?php
require_once "vendor/autoload.php";

$dsn = "mysql:host=mysql; dbname=php_10_24_db; port=3306";
$user = "root";
$password = "secret";
$opts = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {

    $pdo = new PDO($dsn, $user, $password, $opts);
}  catch (PDOException $exception) {
    dd($exception);
}

