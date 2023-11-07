<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\StudentSeeder;


class DatabaseSeeder extends Seeder
{

    public function run()
    {
        $this->call([


            StudentSeeder::class,
            CourseSeeder::class,

        ]);
    }
}
