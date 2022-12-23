<?php

namespace App\Providers;

use Carbon\Carbon as CarbonCarbon;
// use Illuminate\Auth\Access\Gate;
use Illuminate\Support\Carbon;
use App\Models\User;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

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
        // Paginator::useBootstrap();

        Str::macro('rupiah', function ($value) {
            return 'Rp. ' . number_format($value, 0, '.', '.');
        });

        config(['app.locale' => 'id']);
        Carbon::setLocale('id');
        date_default_timezone_set('Asia/Makassar');

        Gate::define('admin', function (User $user) {
            return $user->is_admin;
        });
    }
}
