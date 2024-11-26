<?php

require_once 'Classes/MethodNotFoundException.php';
require_once 'Classes/User.php';

use Classes\User;
use Classes\MethodNotFoundException;

try {
    $user = new User();
    $user->setName('John');
    $user->setAge(25);
    $user->setEmail('john@example.com');

    print_r($user->getAll());

    $user->setPhone('123456789');
} catch (MethodNotFoundException $e) {
    echo $e->customErrorMessage();
}