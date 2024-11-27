<?php

require_once 'autoloader.php';

try {
    $user = new User('John Doe', 'john.doe@example.com');
    echo $user->greet();

    echo "<br>";

    $product = new Product('Laptop', 999.99);
    echo $product->displayProduct();
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
