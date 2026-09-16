<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@uniwara.test'],
            [
                'name' => 'Administrator UNIWARA',
                'password' => Hash::make('Admin@12345'),
                'role' => 'admin',
            ],
        );

        User::updateOrCreate(
            ['email' => 'eka@uniwara.test'],
            [
                'name' => 'Eka',
                'password' => Hash::make('Eka@12345'),
                'role' => 'admin',
            ],
        );

        User::updateOrCreate(
            ['email' => 'faiz@uniwara.test'],
            [
                'name' => 'Faiz',
                'password' => Hash::make('Faiz@12345'),
                'role' => 'admin',
            ],
        );
    }
}
