<?php
echo 'Inside app.php start'; 

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    );
    echo 'Inside app.php 1'

    ->withMiddleware(function (Middleware $middleware) {
        //
    });
    echo 'Inside app.php 2'

    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();

