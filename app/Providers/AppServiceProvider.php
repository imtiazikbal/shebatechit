<?php

namespace App\Providers;

use App\Models\ContactDetail;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void {}

    public function boot(): void
    {
        View::composer(
            ['components.nav', 'components.footer', 'pages.contact', 'pages.home', 'pages.services'],
            function ($view) {
                $view->with('contactDetails', ContactDetail::active()->get()->groupBy('type'));
            }
        );
    }
}
