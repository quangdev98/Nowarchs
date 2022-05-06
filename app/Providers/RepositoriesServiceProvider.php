<?php


namespace App\Providers;
use App\Repositories\Admin\AdminRepositoryInterface;
use App\Repositories\Admin\AdminRepository;
use Illuminate\Support\ServiceProvider;

class RepositoriesServiceProvider extends ServiceProvider
{
    public function register(){
        $this->app->bind(AdminRepositoryInterface::class, AdminRepository::class);
    }

}
