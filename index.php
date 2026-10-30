<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Laravel sits one level up on the server, and in salmart/ locally...
$laravel = is_file(__DIR__.'/../vendor/autoload.php') ? __DIR__.'/..' : __DIR__.'/salmart';

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = $laravel.'/storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader...
require $laravel.'/vendor/autoload.php';

// Bootstrap Laravel and handle the request...
/** @var Application $app */
$app = require_once $laravel.'/bootstrap/app.php';

// This folder is the web root wherever Laravel sits, so uploads land in the right place...
$app->usePublicPath(__DIR__);

$app->handleRequest(Request::capture());
