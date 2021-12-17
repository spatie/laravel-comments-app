<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        Post::create(['title' => 'dummy post']);
        User::create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'password'=> bcrypt('secret')
        ]);
    }
}
