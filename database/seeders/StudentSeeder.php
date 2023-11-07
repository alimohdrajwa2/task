<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;


class StudentSeeder extends Seeder
{

    public function run()
    {
        $students = [
            ['name' => 'Student 1'],
            ['name' => 'Student 2'],
            ['name' => 'Student 3'],
            ['name' => 'Student 4'],
            ['name' => 'Student 5'],
        ];


        foreach ($students as $studentData) {
            Student::create($studentData);
        }
    }
}
