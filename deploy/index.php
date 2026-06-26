<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

ini_set('display_errors', '1');
error_reporting(E_ALL);

// ── Locate the Laravel root ───────────────────────────────────────────────
// Laravel root is inside public_html/ShebaTech/
$laravelRoot = __DIR__ . '/ShebaTech';

// ── Guard: stop with a clear message if root not found ───────────────────
if (!file_exists($laravelRoot . '/vendor/autoload.php')) {
    die('<b>Error:</b> Cannot find vendor/autoload.php inside <code>' . $laravelRoot . '</code><br>'
      . 'Either the vendor/ folder was not uploaded, or the folder name is wrong.<br>'
      . 'Run <code>composer install</code> on your server or upload the vendor/ folder.');
}

if (!file_exists($laravelRoot . '/.env')) {
    die('<b>Error:</b> .env file is missing inside <code>' . $laravelRoot . '</code><br>'
      . 'Copy your .env file to the server and set APP_KEY, DB credentials, APP_URL etc.');
}

// ── Maintenance mode ──────────────────────────────────────────────────────
if (file_exists($maintenance = $laravelRoot . '/storage/framework/maintenance.php')) {
    require $maintenance;
}

// ── Autoloader ────────────────────────────────────────────────────────────
require $laravelRoot . '/vendor/autoload.php';

// ── Bootstrap & handle request ────────────────────────────────────────────
/** @var Application $app */
$app = require_once $laravelRoot . '/bootstrap/app.php';

$app->handleRequest(Request::capture());
