<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin', // atau nama lain yang Anda inginkan
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123#'), // Menggunakan Hash untuk keamanan
        ]);
    }
}
