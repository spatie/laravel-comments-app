<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;

class HomeController
{
    public function __invoke()
    {
        auth()->login(User::first());

        return view('home', [
            'post' => Post::first(),
        ]);
    }
}
