<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if(!User::where('email', 'paiferlucas2212@gmail.com') ->first()){
            User::create([
            'name' => 'Lucas',
            'email' => 'paiferlucas2212@gmail.com',
            'password' => Hash::make('123456a', ['round' => 12]),
        ]);
    }
if (!User::where('email', 'maria.oliveira@example.com')->first()) {
    User::create([
        'name' => 'Maria Oliveira',
        'email' => 'maria.oliveira@example.com',
        'password' => Hash::make('123456a', ['round' => 12]),
    ]);
}

if (!User::where('email', 'pedro.santos@example.com')->first()) {
    User::create([
        'name' => 'Pedro Santos',
        'email' => 'pedro.santos@example.com',
        'password' => Hash::make('123456a', ['round' => 12]),
    ]);
    }
}
    }
