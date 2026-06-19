<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

// ── Public ──────────────────────────────────────────────
Route::view('/',         'pages.home')->name('home');
Route::view('/services', 'pages.services')->name('services');
Route::view('/about',    'pages.about')->name('about');
Route::view('/contact',  'pages.contact')->name('contact.show');
Route::post('/contact',  [ContactController::class, 'store'])->name('contact.store');

Route::get('/blog',       [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}',[BlogController::class, 'show'])->name('blog.show');

Route::get('/news',        [NewsController::class, 'index'])->name('news.index');
Route::get('/news/{slug}', [NewsController::class, 'show'])->name('news.show');

// ── Admin Auth (no middleware) ──────────────────────────
Route::get('/admin/login',  [Admin\AuthController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [Admin\AuthController::class, 'login'])->name('admin.login.post');
Route::post('/admin/logout',[Admin\AuthController::class, 'logout'])->name('admin.logout');

// ── Admin (protected) ──────────────────────────────────
Route::prefix('admin')->name('admin.')->middleware('admin')->group(function () {
    Route::get('/', [Admin\DashboardController::class, 'index'])->name('dashboard');

    Route::resource('blogs',    Admin\BlogController::class)->except('show');
    Route::resource('news',     Admin\NewsController::class)->except('show');
    Route::resource('contacts', Admin\ContactController::class)->only(['index', 'show', 'destroy']);
});
