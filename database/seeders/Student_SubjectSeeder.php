<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Student_SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table ('student_subjects') -> insert ([
            'student_id' => '1',
            'subject_id' => '1',
            'created_at' => now(),
            'updated_at' => now(),

        ]);
    }
}
