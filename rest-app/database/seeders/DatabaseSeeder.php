<?php

namespace Database\Seeders;

use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'John Smith',
            'email' => 'john@resty.com',
            'user_type' => 'manager',
            'password' => Hash::make('john1234!'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10)

        ]);
        User::create( [
            'name' => 'Katy Miller',
            'email' => 'katy@resty.com',
            'user_type' => 'staff',
            'password' => Hash::make('katy1234!'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10)
        ]);
        User::create([
                'name' => 'Roger Pitt',
                'email' => 'roger@resty.com',
                'user_type' => 'kitchen_staff',
                'password' => Hash::make('roger1234!'),
                'email_verified_at' => now(),
                'remember_token' => Str::random(10)
            ]);
        User::create([
                'name' => 'George Black',
                'email' => 'george@resty.com',
                'user_type' => 'inventory_staff',
                'password' => Hash::make('george1234!'),
                'email_verified_at' => now(),
                'remember_token' => Str::random(10)
            ]);
        $this->call(MenuItemsSeeder::class);
    }
}

