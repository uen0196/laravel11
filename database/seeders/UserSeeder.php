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
        User::insert([
            'username' => 'admin_parfum',
            'email' => 'admin_parfum@gmail.com',
            'password' => Hash::make('12345678'),
            'created_at' => now('Asia/Jakarta'),
            'updated_at' => now('Asia/Jakarta'),
        ]);
    }
}
