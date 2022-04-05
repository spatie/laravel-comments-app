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
            'name' => 'Freek',
            'email' => 'freek@spatie.be',
            'password'=> bcrypt('secret'),
        ]);

        User::create([
            'name' => 'Seb',
            'email' => 'sebastian@spatie.be',
            'password'=> bcrypt('secret'),
        ]);

        User::create([
            'name' => 'vic',
            'email' => 'vic@spatie.be',
            'password'=> bcrypt('secret'),
        ]);
    }
}
