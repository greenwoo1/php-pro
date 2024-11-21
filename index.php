<?php

require_once "ValueObject.php";

try {
    $color1 = new ValueObject(255,255,255);

//    $color2 = new ValueObject(300,50,50);

//    $color3 = new ValueObject(-1,400,70);
} catch (InvalidArgumentException $e) {
    echo $e->getMessage() . PHP_EOL;
}