<?php
define("_DIR_ROOT", __DIR__);

$webRoot = "http://{$_SERVER['HTTP_HOST']}";
if ((isset($_SERVER['HTTP_X_FORWARDED_PROTO'])) && (strpos($_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') !== false)) {
    $webRoot = "https://{$_SERVER['HTTP_HOST']}";
}

$foder = strtolower(str_replace($_SERVER['DOCUMENT_ROOT'], '', str_replace('\\', '/', _DIR_ROOT)));
$webRoot = $webRoot . $foder;
define("_WEB_ROOT", $webRoot);

require_once "./configs/routes.php";
require_once "./Core/Route.php";
require_once "./app/App.php";
require_once "./Core/Controller.php";