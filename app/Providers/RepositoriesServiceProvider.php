<?php


namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Interfaces\PartnersRepositoriesInterface;
use App\Repositories\PartnersRepositories;

class RepositoriesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->registerServices();
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    private function registerServices(): void
    {
        $toBind = [
            PartnersRepositoriesInterface::class => PartnersRepositories::class,
        ];
        foreach ($toBind as $interface => $implementation) {
            $this->app->bind($interface, $implementation);
        }
    }
}