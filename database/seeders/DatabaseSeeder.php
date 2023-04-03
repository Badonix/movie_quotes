<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Quote;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Quote::factory(10)->create();

        User::create([
            'username' => 'testuser',
            'email' => 'test@gmail.com',
            'password' => Hash::make('secret'),
        ]);
    }
}
