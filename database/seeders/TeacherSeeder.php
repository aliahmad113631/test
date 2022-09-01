<?php

namespace Database\Seeders;

use App\Models\Instructor;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $instructor1 = Instructor::create([
            'name' => 'Ali', 
            'qualification' => 'MSC'
        ]);
        $instructor2 = Instructor::create([
            'name' => 'Umar', 
            'qualification' => 'MS'
        ]);
        $instructor3 = Instructor::create([
            'name' => 'Wali', 
            'qualification' => 'BS'
        ]);
    }
}
