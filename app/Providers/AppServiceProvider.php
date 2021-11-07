<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Providers\App;
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
    public function boot(UrlGenerator $url)
    {
      if(env('APP_ENV') !== 'local'){
        $url->forceScheme('https');
     }
    }
}
