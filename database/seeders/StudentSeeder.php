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
            'name' => 'Bautista',
            'lastname' => 'Amarillo',
            'dni' => '43632740' ,
            'birthdate' => '2001/10/18',
            'status' => 1
        ]);
    }
}
