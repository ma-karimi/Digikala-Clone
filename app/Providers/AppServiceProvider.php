<?php

namespace App\Providers;

use App\Repository\Interfaces\AccountantRepositoryInterface;
use App\Repository\Interfaces\BrandRepositoryInterface;
use App\Repository\Interfaces\CategoryRepositoryInterface;
use App\Repository\Interfaces\CommentRepositoryInterface;
use App\Repository\Interfaces\DetailRepositoryInterface;
use App\Repository\Interfaces\DiscountRepositoryInterface;
use App\Repository\Interfaces\ImageRepositoryInterface;
use App\Repository\Interfaces\MenuRepositoryInterface;
use App\Repository\Interfaces\OrderRepositoryInterface;
use App\Repository\Interfaces\ProductRepositoryInterface;
use App\Repository\Interfaces\SpecificationRepositoryInterface;
use App\Repository\Interfaces\UserRepositoryInterface;
use App\Repository\Repository\AccountantRepository;
use App\Repository\Repository\BrandRepository;
use App\Repository\Repository\CategoryRepository;
use App\Repository\Repository\CommentRepository;
use App\Repository\Repository\DetailRepository;
use App\Repository\Repository\DiscountRepository;
use App\Repository\Repository\ImageRepository;
use App\Repository\Repository\MenuRepository;
use App\Repository\Repository\OrderRepository;
use App\Repository\Repository\ProductRepository;
use App\Repository\Repository\SpecificationRepository;
use App\Repository\Repository\UserRepository;
use Illuminate\Pagination\Paginator;
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
        $this->app->bind(ProductRepositoryInterface::class,ProductRepository::class);
        $this->app->bind(ImageRepositoryInterface::class,ImageRepository::class);
        $this->app->bind(BrandRepositoryInterface::class,BrandRepository::class);
        $this->app->bind(CategoryRepositoryInterface::class,CategoryRepository::class);
        $this->app->bind(CommentRepositoryInterface::class,CommentRepository::class);
        $this->app->bind(SpecificationRepositoryInterface::class,SpecificationRepository::class);
        $this->app->bind(DetailRepositoryInterface::class,DetailRepository::class);
        $this->app->bind(AccountantRepositoryInterface::class,AccountantRepository::class);
        $this->app->bind(DiscountRepositoryInterface::class,DiscountRepository::class);
        $this->app->bind(MenuRepositoryInterface::class,MenuRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
    }
}
