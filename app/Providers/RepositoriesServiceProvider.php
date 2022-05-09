<?php


namespace App\Providers;
use App\Repositories\Admin\AdminRepositoryInterface;
use App\Repositories\Admin\AdminRepository;

use App\Repositories\Admin\Categories\CategoryRepositoryInterface;
use App\Repositories\Admin\Categories\CategoryRepository;

use App\Repositories\Admin\Products\ProductRepositoryInterface;
use App\Repositories\Admin\Products\ProductRepository;

use Illuminate\Support\ServiceProvider;

class RepositoriesServiceProvider extends ServiceProvider
{
    public function register(){
        $this->app->bind(AdminRepositoryInterface::class, AdminRepository::class);
        $this->app->bind(CategoryRepositoryInterface::class, CategoryRepository::class);
        $this->app->bind(ProductRepositoryInterface::class, ProductRepository::class);
    }
    

}
