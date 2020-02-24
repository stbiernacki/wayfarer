<?php

namespace App\Providers;

use App\Models\Setting;
use App\Repository\AdminSystem\ViewComposers\ManagerComposer;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
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
        $this->setLocale();
    }

    private function setLocale(): void
    {
        if (Schema::hasTable('settings')) {
            $locale = Setting::where('key', 'locale')->first();
            if ($locale) {
                App::setLocale($locale->value);
            }
        }
    }
}
