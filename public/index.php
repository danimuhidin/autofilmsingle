<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Set cache headers for static assets
$request_uri = $_SERVER['REQUEST_URI'] ?? '';
if (preg_match('/\.(css|js|jpg|jpeg|png|gif|svg|webp|ico|woff2|woff|ttf|eot)(\?.*)?$/i', $request_uri)) {
    header('Cache-Control: max-age=31536000, public, immutable');
    header('Expires: ' . gmdate('D, d M Y H:i:s \G\M\T', time() + 31536000));
}

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader...
require __DIR__.'/../vendor/autoload.php';

// Bootstrap Laravel and handle the request...
/** @var Application $app */
$app = require_once __DIR__.'/../bootstrap/app.php';

$app->handleRequest(Request::capture());
