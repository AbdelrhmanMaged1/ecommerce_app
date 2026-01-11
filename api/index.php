<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// 1. Register the Composer Autoloader
require __DIR__ . '/../vendor/autoload.php';

// 2. Bootstrap the Application
$app = require_once __DIR__ . '/../bootstrap/app.php';

// 3. FORCE STORAGE TO /tmp (Fixes Vercel Read-Only Error)
$app->useStoragePath('/tmp/storage');

// 4. Run the Application
$app->handleRequest(Request::capture());