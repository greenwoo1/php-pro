<?php

spl_autoload_register(function ($class) {
    $baseDir = __DIR__ . '/Classes/';

    $class = str_replace('\\', '/', $class);

    // Формування шляху до файлу класу
    $file = $baseDir . $class . '.php';

    echo "Trying to load: $file\n";

    if (file_exists($file)) {
        require_once $file;
        echo "Class $class loaded successfully.\n";
    } else {
        echo "Class $class not found.\n";
    }
});
