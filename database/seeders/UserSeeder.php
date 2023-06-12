<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{ 
    
    public function run(): void
    {

        $password = 'admin';
        $hashedPassword = bcrypt($password);
        
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@admin',
            'email_verified_at' => now() ,
            'password' => $hashedPassword,
        ]);
    }
}
