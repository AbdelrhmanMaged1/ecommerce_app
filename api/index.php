<?php

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// 1. Register the Composer Autoloader
require __DIR__ . '/../vendor/autoload.php';

// 2. Bootstrap the Application
$app = require_once __DIR__ . '/../bootstrap/app.php';

// 3. FORCE STORAGE TO /tmp (Crucial for Vercel)
$app->useStoragePath('/tmp/storage');

// 4. Run the Application (Compatible with Laravel 9, 10, & 11)
if (method_exists($app, 'handleRequest')) {
    // Laravel 11 Logic
    $app->handleRequest(Request::capture());
} else {
    // Laravel 9/10 Logic
    $kernel = $app->make(Kernel::class);
    $response = $kernel->handle(
        $request = Request::capture()
    )->send();
    $kernel->terminate($request, $response);
}