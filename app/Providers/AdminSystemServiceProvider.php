<?php

namespace App\Providers;

use App\Repository\AdminSystem\Manager;
use App\Repository\AdminSystem\ViewComposers\ManagerComposer;
use Illuminate\Contracts\Container\Container;
use Illuminate\Support\ServiceProvider;


class AdminSystemServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Manager::class, function (Container $app) {
            return new Manager(
                include __DIR__ . '/../../resources/views/admin/menu/admin-menu.php',
                $this->filters()
            );
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->creator('admin.*', ManagerComposer::class);
    }

    /**
     * @return array
     */
    private function filters(): array
    {
        return [
            \App\Repository\AdminSystem\Generator\Filters\HrefFilter::class,
            \App\Repository\AdminSystem\Generator\Filters\ActiveFilter::class,
            \App\Repository\AdminSystem\Generator\Filters\SubmenuFilter::class,
            \App\Repository\AdminSystem\Generator\Filters\ClassesFilter::class,
        ];
    }
}
