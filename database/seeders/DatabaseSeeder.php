<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use  App\Models\Student;
use  App\Models\User;
use  App\Models\Subject;
use  App\Models\Subject_Setting;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {   
        $this->call([StudentSeeder::class]);
       Student::factory(100)->create();

       $this->call([UserSeeder::class]);
       User::factory(10)->create();

       $this->call([SubjectSeeder::class]);
    

       $this->call([Subject_SettingSeeder::class]);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
