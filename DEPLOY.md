# cPanel Deployment Guide — ShebaTech

---

## Why the App Breaks on cPanel

Laravel's entry point is `public/index.php`, but cPanel's web root is `public_html/`.  
If you upload everything into `public_html/`, the app either breaks or runs at `yourdomain.com/public/` — which is wrong.

**The fix:** keep the Laravel project *outside* `public_html/`, and only put the `public/` contents *inside* `public_html/`.

---

## Server File Structure

```
/home/yourusername/
│
├── public_html/                 ← your domain points here
│   ├── index.php                ← from  deploy/index.php
│   ├── .htaccess                ← from  public/.htaccess
│   ├── favicon.ico              ← from  public/
│   ├── robots.txt               ← from  public/
│   ├── ShebaTech.png            ← from  public/
│   └── build/                   ← from  public/build/  (Vite assets)
│
└── shebatech/                   ← upload entire Laravel project here
    ├── app/
    ├── bootstrap/
    ├── config/
    ├── database/
    ├── resources/
    ├── routes/
    ├── storage/
    ├── vendor/
    └── ...
```

> **Note:** `shebatech` can be any folder name. Just update the path in `index.php` (Step 3).

---

## Step-by-Step Deployment

### Step 1 — Upload the Laravel Project

1. Zip your entire project folder locally
2. In cPanel **File Manager**, go to `/home/yourusername/` (one level **above** `public_html`)
3. Upload and extract the zip there — you should end up with `/home/yourusername/shebatech/`

---

### Step 2 — Copy Public Assets to `public_html/`

From your local `public/` folder, upload these into `public_html/`:

| File / Folder      | Copy to              |
|--------------------|----------------------|
| `.htaccess`        | `public_html/`       |
| `favicon.ico`      | `public_html/`       |
| `robots.txt`       | `public_html/`       |
| `ShebaTech.png`    | `public_html/`       |
| `build/` *(folder)*| `public_html/build/` |

---

### Step 3 — Upload the Entry Point (`index.php`)

1. Open `deploy/index.php` from this project
2. If your Laravel folder is **not** named `shebatech`, change this line:
   ```php
   $laravelRoot = __DIR__.'/../shebatech';
   //                              ^^^^^^^^^^^ change this
   ```
3. Upload the file to `public_html/index.php`

---

### Step 4 — Configure `.env`

Open `shebatech/.env` on the server and update:

```env
APP_ENV=production
APP_DEBUG=false
APP_URL=https://yourdomain.com

DB_HOST=127.0.0.1
DB_DATABASE=cpanel_dbname
DB_USERNAME=cpanel_dbuser
DB_PASSWORD=your_db_password
```

> In cPanel, database names and usernames are prefixed with your cPanel username.  
> Example: `myuser_shebadb`, `myuser_shebauser`

---

### Step 5 — Fix Images (Storage Symlink)

If images uploaded through the app are not showing, you need to create a storage symlink.

**Option A — cPanel Terminal (recommended):**
```bash
cd public_html
ln -s ShebaTech/storage/app/public storage
```

**Option B — Via browser (no SSH needed):**
1. Upload `deploy/storage_link.php` to `public_html/`
2. Visit `https://shebatechit.com.bd/storage_link.php` in your browser
3. You should see a **"Success!"** message
4. **Delete `storage_link.php` immediately** after — it's a security risk if left there

> ⚠️ Do NOT run `php artisan storage:link` on the server — it creates the symlink
> inside `ShebaTech/public/storage/` which is the wrong location for cPanel.

---

### Step 6 — Set Folder Permissions

In cPanel **File Manager**, set these folder permissions to `755`:

```
shebatech/storage/
shebatech/storage/logs/
shebatech/storage/framework/
shebatech/storage/framework/cache/
shebatech/storage/framework/sessions/
shebatech/storage/framework/views/
shebatech/bootstrap/cache/
```

---

### Step 7 — Run Database Migrations

In **cPanel Terminal**:
```bash
cd shebatech
php artisan migrate --force
```

Or import `database.sql` directly via **phpMyAdmin** if you exported it locally.

---

### Step 8 — Clear & Cache Config

```bash
cd shebatech
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

---

## Troubleshooting

| Problem | Fix |
|---|---|
| **500 Internal Server Error** | Check `shebatech/storage/logs/laravel.log` |
| **Blank white page** | Set `APP_DEBUG=true` temporarily to see the error |
| **Images not showing** | Run Step 5 (storage symlink) |
| **CSS / JS not loading** | Make sure `public/build/` was copied to `public_html/build/` |
| **Database connection failed** | Double-check DB credentials in `.env` (cPanel prefix) |
| **Class not found errors** | Run `composer dump-autoload` in `shebatech/` via terminal |

---

## Alternative (Quick but Less Secure)

If you uploaded **everything** into `public_html/` and don't want to restructure:

1. Rename `deploy/htaccess-root.txt` to `.htaccess`
2. Place it in `public_html/` (the root `.htaccess`)

This routes all requests through the `public/` subfolder automatically.

> ⚠️ This is less secure because it exposes `app/`, `config/`, `.env` to the server root.  
> Use the proper structure above whenever possible.
