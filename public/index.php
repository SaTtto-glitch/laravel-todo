<?php
use Illuminate\Http\Request;
echo 'test1'; 

define('LARAVEL_START', microtime(true));

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

echo 'test2'; 
// Register the Composer autoloader...
require __DIR__.'/../vendor/autoload.php';

echo 'test3'; 

// Bootstrap Laravel and handle the request...
(require_once __DIR__.'/../bootstrap/app.php')
    ->handleRequest(Request::capture());

echo 'test4'; 

