<?php

namespace App\Providers;

use App\Contracts\ProductContract;
use App\Repositories\ProductRepository;
use Illuminate\Support\ServiceProvider;
use App\Contracts\UserContract;
use App\Repositories\UserRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    protected $repositories = [
        ProductContract::class         =>          ProductRepository::class,
     
        UserContract::class =>        UserRepository::class,
       

    ];

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        foreach ($this->repositories as $interface => $implementation) {
            $this->app->bind($interface, $implementation);
        }
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
}
