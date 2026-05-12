<?php
$path = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ?: '/');
$file = __DIR__ . $path;

if (is_file($file)) {
    return false;
}

if (is_dir($file)) {
    $indexFile = rtrim($file, '/') . '/index.php';
    if (is_file($indexFile)) {
        require $indexFile;
        return true;
    }
}

require __DIR__ . '/index.php';
