<?php
/*
|--------------------------------------------------------------------------
| Storage Symlink Helper for cPanel
|--------------------------------------------------------------------------
| Upload this file to public_html/, open it in the browser ONCE, then
| DELETE it immediately after seeing "Success!".
|
| URL to run: https://shebatechit.com.bd/storage_link.php
|
| What it does:
|   Creates:  public_html/storage/  →  public_html/ShebaTech/storage/app/public/
|
| This makes uploaded images accessible at:
|   https://shebatechit.com.bd/storage/blogs/filename.jpg
|   https://shebatechit.com.bd/storage/news/filename.jpg
*/

// Laravel root is inside public_html/ShebaTech/
$laravelRoot = __DIR__ . '/ShebaTech';
$target      = $laravelRoot . '/storage/app/public';
$link        = __DIR__ . '/storage';

echo '<style>body{font-family:monospace;padding:20px;background:#0f172a;color:#e2e8f0}
      .ok{color:#4ade80}.err{color:#f87171}.warn{color:#fbbf24}
      pre{background:#1e293b;padding:12px;border-radius:6px}</style>';

echo '<h3 style="color:#38bdf8">ShebaTech — Storage Symlink Setup</h3>';
echo '<pre>';
echo 'Laravel root : ' . $laravelRoot . "\n";
echo 'Target       : ' . $target . "\n";
echo 'Symlink at   : ' . $link . "\n";
echo '</pre>';

// Check target exists
if (!is_dir($target)) {
    die('<p class="err"><b>Error:</b> Target directory not found: <code>' . $target . '</code><br>'
      . 'Make sure the ShebaTech folder is uploaded to public_html/ and '
      . 'the storage/app/public/ directory exists inside it.</p>');
}

// Already linked
if (is_link($link)) {
    echo '<p class="warn"><b>Symlink already exists</b> at public_html/storage/.<br>'
       . 'Images should already be working. You can delete this file.</p>';
    exit;
}

// Directory already exists (not a symlink)
if (is_dir($link)) {
    die('<p class="err"><b>Error:</b> A real <code>storage/</code> folder already exists in public_html/.<br>'
      . 'Delete or rename it via cPanel File Manager, then run this script again.</p>');
}

// Create symlink
if (symlink($target, $link)) {
    echo '<p class="ok"><b>✔ Success!</b> Symlink created.<br><br>'
       . 'Uploaded images are now accessible at:<br>'
       . '<code>https://shebatechit.com.bd/storage/blogs/filename.jpg</code><br>'
       . '<code>https://shebatechit.com.bd/storage/news/filename.jpg</code><br><br>'
       . '<b style="color:#f87171">Delete this file (storage_link.php) from public_html now!</b></p>';
} else {
    echo '<p class="err"><b>Failed to create symlink.</b><br>'
       . 'Your host may restrict symlinks. Use cPanel Terminal instead:<br><br>'
       . '<code>cd public_html && ln -s ShebaTech/storage/app/public storage</code></p>';
}
