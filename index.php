<?php


require_once 'Trait1.php';
require_once 'Trait2.php';
require_once 'Trait3.php';
require_once 'Test.php';

$obj = new Test();

echo "Сума результатів методів з трейтов: " . $obj->getSum();

