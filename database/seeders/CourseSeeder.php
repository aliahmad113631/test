<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $course1 = Course::create([
            'name' => 'maths', 
        ]);
        $course2 = Course::create([
            'name' => 'science', 
        ]);
        $course3 = Course::create([
            'name' => 'English', 
        ]);
    }
}
