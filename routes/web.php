<?php

use App\Http\Controllers\HomeController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);

Route::get('/login/{name}', function(string $name) {
    $user = User::query()->where('email', "{$name}@spatie.be")->first();

    auth()->login($user);

    return redirect()->back();
});

Route::get('/logout', function () {
    auth()->logout();

    return redirect()->back();
});
