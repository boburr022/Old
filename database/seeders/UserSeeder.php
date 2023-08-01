<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'Bobur',
            'email' => 'Boburr@gmail.com',
            'password' => Hash::make('password')

        ]);
        $user->roles()->attach([1, 3]);

        $user2 = User::create([
            'name' => 'John',
            'email' => 'John@gmail.com',
            'password' => Hash::make('password')

        ]);
        $user2->roles()->attach([2]);
    }
}
