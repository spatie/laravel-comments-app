<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\ServiceProvider;
use Spatie\Comments\Notifications\PendingCommentNotification;

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
        PendingCommentNotification::sendTo(function() {
            return User::where('email', 'freek@spatie.be')->first();
        });
    }
}
