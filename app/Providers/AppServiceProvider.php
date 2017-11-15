<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
	{
        Schema::defaultStringLength(191);
		\App\Models\User::observe(\App\Observers\UserObserver::class);
		\App\Models\Topic::observe(\App\Observers\TopicObserver::class);

        //
        \Carbon\Carbon::setLocale('zh');
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
