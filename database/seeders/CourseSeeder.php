<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{

    public function run()
    {
        $courses = [
            ['name' => 'Course 1'],
            ['name' => 'Course 2'],
            ['name' => 'Course 3'],
            ['name' => 'Course 4'],
            ['name' => 'Course 5'],
        ];


        foreach ($courses as $course) {
            Course::create($course);
        }
    }
}
