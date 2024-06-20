<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use SocialiteProviders\Manager\SocialiteWasCalled;
use SocialiteProviders\Microsoft\MicrosoftExtendSocialite;

class SocialiteServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->extend('Laravel\Socialite\Contracts\Factory', function ($service) {
            $service->extend('microsoft', function ($app) {
                $config = $app['config']['services.microsoft'];
                return $service->buildProvider(MicrosoftExtendSocialite::class, $config);
            });

            return $service;
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app['events']->listen(
            SocialiteWasCalled::class,
            MicrosoftExtendSocialite::class
        );
    }
}
