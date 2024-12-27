<?php

class Customers
{
    public int $id;
    public string $name, $phone;
}

function db(): PDO
{
    $dsn = "mysql:host=mysql; dbname=autoparkdb; port=3306";
    $user = "root";
    $password = "secret";
    $opts = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ];

    return new PDO($dsn, $user, $password, $opts);
}

$query = db() -> prepare("SELECT * FROM customers");

$query -> execute();

dd($query->fetchAll(PDO::FETCH_CLASS, Customers::class));