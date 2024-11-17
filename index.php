<?php
define('APP_URL', 'http://localhost:8080/amlak');
define('APP_DIR', __DIR__);

require_once APP_DIR . '/controller/errorHandler.php';
require_once APP_DIR . '/controller/indexHandler.php';
require_once APP_DIR . '/controller/contactHandler.php';
require_once APP_DIR . '/controller/aboutHandler.php';
require_once APP_DIR . '/controller/servicesHandler.php';
require_once APP_DIR . '/controller/rentsHandler.php';
require_once APP_DIR . '/controller/salesHandler.php';

session_start();

$domain = str_replace('http://', '', APP_URL);
$uri = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$params = $_REQUEST;
$path = explode('?', explode($domain, $uri)[1])[0];
try {
    $res = match ($path) {
        '/' => new indexHandler,
        '/contact' => new contactHandler,
        '/about' => new aboutHandler,
        '/services' => new servicesHandler,
        '/sales' => new salesHandler,
        '/rents' => new rentsHandler,
        default => new errorHandler(404),
    };
} catch (\Throwable $e) {
    $res = new errorHandler(500);
};
echo $res->response();
