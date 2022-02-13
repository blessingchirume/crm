<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{

    public function run()
    {
        $user = User::create([
            "name" => "blessing",
            "surname" => "chirume",
            "email" => "chirume37@gmail.com",
            "organisation" => "Old Mutual Holdings",
            "password" => Hash::make("12345678"),
        ]);

        $user->assignRole('Super-Admin');

        $user = User::create([
            "name" => "charles",
            "surname" => "chirume",
            "email" => "charles.chirume@gmail.com",
            "organisation" => "First Mutual Holdings",
            "password" => Hash::make("12345678"),
        ]);

        $user->assignRole('Client User');

        $user = User::create([
            "name" => "darlington",
            "surname" => "chirume",
            "email" => "darlington.chirume@gmail.com",
            "organisation" => "Econet",
            "password" => Hash::make("12345678"),
        ]);

        $user->assignRole('System User');
    }
}
