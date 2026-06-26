<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

/*
|--------------------------------------------------------------------------
| cPanel Deployment Entry Point
|--------------------------------------------------------------------------
| Place this file in your public_html/ directory.
|
| $laravelRoot must point to the folder where you uploaded the Laravel
| project (i.e. everything EXCEPT the contents of public/).
|
| Example cPanel file structure:
|
|   /home/yourusername/
|   ├── public_html/          ← copy contents of public/ here
|   │   ├── index.php         ← this file
|   │   ├── .htaccess
|   │   ├── favicon.ico
|   │   ├── robots.txt
|   │   ├── ShebaTech.png
|   │   └── build/
|   └── shebatech/            ← upload entire Laravel project here
|       ├── app/
|       ├── bootstrap/
|       ├── config/
|       ├── database/
|       ├── resources/
|       ├── routes/
|       ├── storage/
|       ├── vendor/
|       └── ...
|
| Change 'shebatech' below to whatever folder name you used.
*/
$laravelRoot = __DIR__.'/../shebatech';

// Maintenance mode check
if (file_exists($maintenance = $laravelRoot.'/storage/framework/maintenance.php')) {
    require $maintenance;
}

// Autoloader
require $laravelRoot.'/vendor/autoload.php';

// Bootstrap and handle request
/** @var Application $app */
$app = require_once $laravelRoot.'/bootstrap/app.php';

$app->handleRequest(Request::capture());
