<?php

namespace Database\Seeders;

use App\Models\Standard;
use Illuminate\Database\Seeder;

class StandardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $standard1 = Standard::create([
            'name' => 'VIII', 
            'total_students' => '45'
        ]);
        $standard2 = Standard::create([
            'name' => 'IX', 
            'total_students' => '45'
        ]);
        $standard3 = Standard::create([
            'name' => 'X', 
            'total_students' => '45'
        ]);
    }
}
