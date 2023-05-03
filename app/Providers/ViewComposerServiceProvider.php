<?php

namespace App\Providers;

use App\Models\GeneralSetting;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        

        View::composer('*', function ($view) {
            $general_setting = GeneralSetting::first();
            $view->with('footer_copyright', $general_setting->footer_copyright);
        });    }
}
