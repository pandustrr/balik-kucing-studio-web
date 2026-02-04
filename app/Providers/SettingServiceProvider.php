<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class SettingServiceProvider extends ServiceProvider
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
        try {
            if (\Illuminate\Support\Facades\Schema::hasTable('general_settings')) {
                $whatsappNumber = \App\Models\GeneralSetting::where('key', 'whatsapp_number')->first()?->value ?? '6281234567890';
                \Illuminate\Support\Facades\View::share('whatsappNumber', $whatsappNumber);
            }
        } catch (\Exception $e) {
            \Illuminate\Support\Facades\View::share('whatsappNumber', '6281234567890');
        }
    }
}
