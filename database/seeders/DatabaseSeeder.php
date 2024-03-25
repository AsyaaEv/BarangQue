<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::updateOrCreate([
            'name' => 'Asyaa',
            'email' => 'asd',
            'type' => 'admin',
            'password' => '123'
        ],[
            'name' => 'Asyaa',
            'email' => 'asd',
            'type' => 'admin',
            'password' => '123'
        ]);

        User::create([
            'name' => 'rasya',
            'email' => '123',
            'type' => 'user',
            'password' => '123'
        ]);
    }
}
