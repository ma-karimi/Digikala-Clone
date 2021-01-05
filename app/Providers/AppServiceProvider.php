<?php

namespace App\Providers;

use App\Repository\Interfaces\OrderRepositoryInterface;
use App\Repository\Interfaces\UserRepositoryInterface;
use App\Repository\Repository\OrderRepository;
use App\Repository\Repository\UserRepository;
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
        $this->app->bind(UserRepositoryInterface::class,UserRepository::class);
        $this->app->bind(OrderRepositoryInterface::class,OrderRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
