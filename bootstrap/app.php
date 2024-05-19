<?php
echo 'Inside app.php start'; 

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

echo 'Before Application::configure'; 

$app = Application::configure(basePath: dirname(__DIR__));
echo 'After Application::configure'; 

$app = $app
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    );
echo 'After withRouting'; 

$app = $app
    ->withMiddleware(function (Middleware $middleware) {
        //
    });
echo 'After withMiddleware'; 

$app = $app
    ->withExceptions(function (Exceptions $exceptions) {
        //
    });
echo 'After withExceptions'; 

$app = $app->create();
echo 'After create'; 

return $app;

echo 'Inside app.php end';
