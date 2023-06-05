<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Subject_SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //////////////////LUNES//////////////////

        DB::table('subject_settings')->insert([
            'subject_id' => 1,
            'day' => 1,
            'start_time' => '16:00:00',
            'end_time' => '19:20:00' ,
            'limit_time' => '17:30:00', // Practica profecionalizante III
        ]);
        DB::table('subject_settings')->insert([
            'subject_id' => 2,
            'day' => 1,
            'start_time' => '19:30:00',
            'end_time' => '20:50:00' ,
            'limit_time' => '20:00:00', //Analisis y diseño II
        ]);  

        //////////////////MARTES//////////////////
        DB::table('subject_settings')->insert([
            'subject_id' => 3,
            'day' => 2,
            'start_time' => '16:30:00',
            'end_time' => '17:50:00' ,
            'limit_time' => '17:00:00', // Derechos humanos
        ]);
        DB::table('subject_settings')->insert([
            'subject_id' => 1,
            'day' => 2,
            'start_time' => '18:00:00',
            'end_time' => '21:35:00' ,
            'limit_time' => '19:00:00', //Practica profecionalizante III
        ]);

        //////////////////MIERCOLES//////////////////
        DB::table('subject_settings')->insert([
            'subject_id' => 4,
            'day' => 3,
            'start_time' => '18:40:00',
            'end_time' => '20:10:00' ,
            'limit_time' => '19:20:00', //Programacion III
        ]);
        DB::table('subject_settings')->insert([
            'subject_id' => 5,
            'day' => 3,
            'start_time' => '20:10:00',
            'end_time' => '22:15:00' ,
            'limit_time' => '21:00:00', //Ingenieria de software 
        ]);  

        //////////////////JUEVES//////////////////
        DB::table('subject_settings')->insert([
            'subject_id' => 4,
            'day' => 4,
            'start_time' => '16:45:00',
            'end_time' => '19:20:00' ,
            'limit_time' => '18:00:00', //Programacion III
        ]);
        
        //////////////////VIERNES//////////////////
        DB::table('subject_settings')->insert([
            'subject_id' => 6,
            'day' => 5,
            'start_time' => '16:00:00',
            'end_time' => '17:50:00' ,
            'limit_time' => '16:30:00', //Estadistica 
        ]);
        DB::table('subject_settings')->insert([
            'subject_id' => 7,
            'day' => 5,
            'start_time' => '18:00:00',
            'end_time' => '19:20:00' ,
            'limit_time' => '18:30:00', //Dispositivos Mobiles    
        ]);
        DB::table('subject_settings')->insert([
            'subject_id' => 8,
            'day' => 5,
            'start_time' => '19:30:00',
            'end_time' => '20:50:00' ,
            'limit_time' => '20:00:00', //Auditoria
        ]);
        DB::table('subject_settings')->insert([
            'subject_id' => 2,
            'day' => 5,
            'start_time' => '20:55:00',
            'end_time' => '22:15:00' ,
            'limit_time' => '21:30:00', //Analisis y diseño II
        ]);

        

    
    }
}
