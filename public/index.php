<?php
echo 'Inside public/index.php start'; 

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

echo 'Before maintenance check'; 

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

echo 'Before autoload'; 

// Register the Composer autoloader...
require __DIR__.'/../vendor/autoload.php';

echo 'Before app bootstrap'; 

// Bootstrap Laravel and handle the request...
$app = require_once __DIR__.'/../bootstrap/app.php';

echo 'After app bootstrap'; 

$kernel = $app->make('Illuminate\Contracts\Http\Kernel');

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

echo 'After kernel handle'; 

$response->send();

echo 'After response send'; 

$kernel->terminate($request, $response);

echo 'After kernel terminate'; 
