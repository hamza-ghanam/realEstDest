<?php

namespace App\Providers;

use App\Models\Configuration;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Share data with all views
        // $logoPath = asset('storage/alogo.svg');
        $logoPath = asset(Configuration::whereName('logo_image')->first()->value);
        $siteTitle = Configuration::whereName('site_title')->first()->value;
        view()->share([
            'siteLogo' => $logoPath,
            'siteTitle' => $siteTitle
        ]);
    }
}
