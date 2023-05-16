<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::truncate();
        User::insert([
            //Admin
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin@gmail.com'),
                'role' => 'admin',
                'status' => 'active'
            ],
                // for event role check
            [
                'name' => 'Hospital',
                'email' => 'hospital@gmail.com',
                'password' => Hash::make('hospital@gmail.com'),
                'role' => 'hospital',
                'status' => 'active'
            ]
        ]);
    }
}
