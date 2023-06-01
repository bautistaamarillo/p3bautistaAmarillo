<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('subjects')->insert([
            'name' => 'Practica Profecionalizante III', //ID 1
        ]);

        DB::table('subjects')->insert([ 
            'name' => 'Analisis y diseño II' //ID 2
        ]);

        DB::table('subjects')->insert([
            'name' => 'Seminario Fe, Cultura y VIDA III' //ID 3 
        ]);

        DB::table('subjects')->insert([
            'name' => 'Programacion III' //ID 4 
        ]);

        DB::table('subjects')->insert([
        'name' => 'Ingenieria de Software'//ID 5
        ]);

        DB::table('subjects')->insert([
            'name' => 'Estadistica' //ID 6 
        ]);

        DB::table('subjects')->insert([
            'name' => 'Dispositivos Mobiles' //ID 7 
        ]);

        DB::table('subjects')->insert([
        'name' => 'Auditoria de Sistemas' //ID 8    
        ]);


    }
}
