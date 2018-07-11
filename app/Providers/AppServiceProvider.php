<?php

namespace App\Providers;

use App\Services\CurrencyService;
use App\Services\CurrencyServiceInterface;
use App\Services\MoneyService;
use App\Services\MoneyServiceInterface;
use App\Services\UserService;
use App\Services\UserServiceInterface;
use App\Services\WalletService;
use App\Services\WalletServiceInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $this->app->bind(CurrencyServiceInterface::class, CurrencyService::class);
        $this->app->bind(UserServiceInterface::class, UserService::class);
        $this->app->bind(WalletServiceInterface::class, WalletService::class);
        $this->app->bind(MoneyServiceInterface::class, MoneyService::class);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //

    }
}
