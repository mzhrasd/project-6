<?php

error_reporting(E_ALL);

session_start();

$scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$base   = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'])), '/');
define("URL", $scheme . "://" . $_SERVER['HTTP_HOST'] . str_replace(' ', '%20', $base));
define("AST", URL . "/layouts/assets");

define("ROOT", dirname(__DIR__) . DIRECTORY_SEPARATOR);

define("UPLOAD_DIR", ROOT . "uploads" . DIRECTORY_SEPARATOR . "produk" . DIRECTORY_SEPARATOR);
define("UPLOAD_URL", URL . "/uploads/produk");

define("DB_HOST", "localhost");
define("DB_NAME", "dbproject6");
define("DB_USER", "root");
define("DB_PASS", "");

require_once ROOT. "vendor/autoload.php";

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();
