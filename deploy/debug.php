<?php
/*
 * ShebaTech — cPanel Deployment Debugger
 * Upload this to public_html/debug.php
 * Visit: https://shebatechit.com.bd/debug.php
 * DELETE THIS FILE immediately after fixing the issue.
 */

ini_set('display_errors', 1);
error_reporting(E_ALL);

echo '<style>
body { font-family: monospace; padding: 20px; background: #0f172a; color: #e2e8f0; }
h2   { color: #38bdf8; border-bottom: 1px solid #334155; padding-bottom: 8px; }
.ok  { color: #4ade80; }
.err { color: #f87171; }
.warn{ color: #fbbf24; }
pre  { background: #1e293b; padding: 12px; border-radius: 6px; overflow-x: auto; }
</style>';

echo '<h2>ShebaTech — Deployment Debugger</h2>';

// ── 1. Show current directory ──────────────────────────────────────────
echo '<h2>1. Paths</h2>';
echo '<pre>';
echo 'This file is at : ' . __FILE__ . "\n";
echo '__DIR__         : ' . __DIR__ . "\n";
echo 'One level up    : ' . dirname(__DIR__) . "\n";
echo '</pre>';

// ── 2. List folders one level above public_html ───────────────────────
echo '<h2>2. Folders next to public_html</h2><pre>';
$parent = dirname(__DIR__);
$items  = scandir($parent);
foreach ($items as $item) {
    if (in_array($item, ['.', '..'])) continue;
    $full = $parent . '/' . $item;
    echo (is_dir($full) ? '[DIR] ' : '[FILE]') . ' ' . $item . "\n";
}
echo '</pre>';

// ── 3. Check the Laravel root path in index.php ───────────────────────
echo '<h2>3. Laravel Root Check</h2><pre>';
$laravelRoot = __DIR__ . '/../shebatech'; // ← same as index.php
$real        = realpath($laravelRoot);

echo 'Configured path : ' . $laravelRoot . "\n";
echo 'Resolved to     : ' . ($real ?: '<span class="err">NOT FOUND — folder does not exist</span>') . "\n\n";

$checks = [
    'vendor/autoload.php'                   => 'Composer autoloader',
    'bootstrap/app.php'                     => 'Laravel bootstrap',
    '.env'                                  => '.env config file',
    'storage/framework/sessions'            => 'Sessions directory',
    'storage/framework/views'               => 'Views cache directory',
    'bootstrap/cache'                       => 'Bootstrap cache',
];

foreach ($checks as $rel => $label) {
    $path   = $laravelRoot . '/' . $rel;
    $exists = file_exists($path);
    $icon   = $exists ? '<span class="ok">✔</span>' : '<span class="err">✘</span>';
    echo $icon . ' ' . $label . ' (' . $rel . ')' . "\n";
}
echo '</pre>';

// ── 4. Storage writability ─────────────────────────────────────────────
echo '<h2>4. Storage Writability</h2><pre>';
$storageDirs = [
    $laravelRoot . '/storage/framework/sessions',
    $laravelRoot . '/storage/framework/views',
    $laravelRoot . '/storage/framework/cache',
    $laravelRoot . '/storage/logs',
    $laravelRoot . '/bootstrap/cache',
];
foreach ($storageDirs as $dir) {
    $short = str_replace($laravelRoot, '', $dir);
    if (!is_dir($dir)) {
        echo '<span class="err">✘ MISSING  </span> ' . $short . "\n";
    } elseif (!is_writable($dir)) {
        echo '<span class="warn">⚠ NOT WRITABLE</span> ' . $short . " — chmod to 755\n";
    } else {
        echo '<span class="ok">✔ OK       </span> ' . $short . "\n";
    }
}
echo '</pre>';

// ── 5. PHP version ────────────────────────────────────────────────────
echo '<h2>5. PHP Version</h2><pre>';
$version = PHP_VERSION;
$ok      = version_compare($version, '8.2.0', '>=');
echo ($ok ? '<span class="ok">✔</span>' : '<span class="err">✘</span>');
echo ' PHP ' . $version . ($ok ? ' (OK)' : ' — Laravel 11 requires PHP 8.2+') . "\n";
echo '</pre>';

// ── 6. Laravel log (last 30 lines) ───────────────────────────────────
echo '<h2>6. Laravel Error Log (last 30 lines)</h2><pre>';
$log = $laravelRoot . '/storage/logs/laravel.log';
if (file_exists($log)) {
    $lines = file($log);
    $tail  = array_slice($lines, -30);
    echo htmlspecialchars(implode('', $tail));
} else {
    echo '<span class="warn">No log file found yet.</span>';
}
echo '</pre>';

echo '<p class="err"><strong>⚠ Delete this file (debug.php) from public_html once you are done!</strong></p>';
