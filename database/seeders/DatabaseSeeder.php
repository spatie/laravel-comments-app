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
            'name' => 'Admin',
            'email' => 'freek@spatie.be',
            'password'=> bcrypt('secret'),
        ]);

        User::create([
            'name' => 'User 1',
            'email' => 'sebastian@spatie.be',
            'password'=> bcrypt('secret'),
        ]);

        User::create([
            'name' => 'User 2',
            'email' => 'willem@spatie.be',
            'password'=> bcrypt('secret'),
        ]);
    }
}
