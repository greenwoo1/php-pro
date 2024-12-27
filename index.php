<?php
require_once "vendor/autoload.php";

try {

    require_once __DIR__ . '/queries.php';
}  catch (PDOException $exception) {
    dd($exception);
}

