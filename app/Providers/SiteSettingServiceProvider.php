<?php

namespace App\Providers;

use App\Models\Admin\SiteSetting;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;

class SiteSettingServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        \Illuminate\Support\Facades\View::composer('*', function ($view) {
            $siteProfile = SiteSetting::first();
            $view->with('_site_profile', $siteProfile);
        });
    }
}
