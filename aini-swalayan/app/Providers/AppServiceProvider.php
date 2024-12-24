<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // $this->registerPolicies();

        Gate::define('isAdmin', function($data_user) {
            return $data_user->role == 'admin';
        });

        Gate::define('isKasir', function($data_user) {
            return $data_user->role == 'kasir';
        });

        Gate::define('isGudang', function($data_user) {
            return $data_user->role == 'gudang';
        });
    }
}
