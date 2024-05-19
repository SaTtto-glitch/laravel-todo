<?php

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

require __DIR__.'/../vendor/autoload.php';

$app = require_once __DIR__.'/../bootstrap/app.php';

// Create a Laravel request from the incoming Vercel request
$request = Request::capture();
// Bootstrap the Laravel application
$app->make(Kernel::class)->handle($request);

