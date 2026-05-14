<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        Paginator::useBootstrapFive();

        View::composer('layouts.app', function ($view): void {
            if (Auth::check()) {
                $user = Auth::user();
                $view->with([
                    'navbarUnreadNotifications' => $user->unreadNotifications()->latest()->take(10)->get(),
                    'navbarUnreadCount' => $user->unreadNotifications()->count(),
                ]);
            } else {
                $view->with([
                    'navbarUnreadNotifications' => collect(),
                    'navbarUnreadCount' => 0,
                ]);
            }
        });
    }
}
