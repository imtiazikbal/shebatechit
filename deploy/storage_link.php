<?php
/*
|--------------------------------------------------------------------------
| Storage Symlink Helper for cPanel
|--------------------------------------------------------------------------
| Upload this file to public_html/, open it in the browser ONCE, then
| DELETE it immediately. It creates the storage symlink so uploaded
| images (storage/app/public) are accessible at /storage/...
|
| URL to run: https://yourdomain.com/storage_link.php
*/

$laravelRoot = __DIR__.'/../shebatech';  // same as in index.php
$target      = $laravelRoot.'/storage/app/public';
$link        = __DIR__.'/storage';

if (is_link($link)) {
    echo '<b style="color:orange">Symlink already exists.</b> You can delete this file.';
    exit;
}

if (!is_dir($target)) {
    echo '<b style="color:red">Target directory not found:</b> '.$target;
    exit;
}

if (symlink($target, $link)) {
    echo '<b style="color:green">Success!</b> Storage symlink created. <b>Delete this file now.</b>';
} else {
    echo '<b style="color:red">Failed.</b> Your host may not allow symlinks. '
       . 'Try running <code>php artisan storage:link</code> via cPanel Terminal instead.';
}
