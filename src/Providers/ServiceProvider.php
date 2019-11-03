<?php

namespace Rits\ModelTranslate\Providers;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/resources/lang/en' => resource_path('lang/en/'),
            __DIR__ . '/resources/lang/pt_BR' => resource_path('lang/pt_BR/'),
        ]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
