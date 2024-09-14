<?php
define("_DIR_ROOT", __DIR__);

$webRoot = "http://{$_SERVER['HTTP_HOST']}";
if ((isset($_SERVER['HTTP_X_FORWARDED_PROTO'])) && (strpos($_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') !== false)) {
    $webRoot = "https://{$_SERVER['HTTP_HOST']}";
}

$foder = strtolower(str_replace($_SERVER['DOCUMENT_ROOT'], '', str_replace('\\', '/', _DIR_ROOT)));
$webRoot = $webRoot . $foder;
define("_WEB_ROOT", $webRoot);

$configsDir = scandir('configs');
if (!empty($configsDir)) {
    foreach ($configsDir as $dir) {
        if (file_exists("./configs/{$dir}") && $dir != '.' && $dir != '..') {
            require_once "./configs/{$dir}";
        }
    }
}
require_once "./Core/Route.php";
require_once "./app/App.php";
if (!empty($config['database'])) {
    $dbConfig = array_filter($config['database']);

    if (!empty($dbConfig)) {
        require_once "./Core/Connection.php";
        require_once "./Core/Database.php";
        new Database();
    }
}
require_once "./Core/Controller.php";
