<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('students')->insert([
            'name' => 'Horacio',
            'lastname' => 'Guarani',
            'dni' => '36978541' ,
            'birthdate' => '1998/12/12',
            'status' => 1
        ]);
    }
}
