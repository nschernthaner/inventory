<?php

namespace Database\Seeders;

use App\Models\School;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $schools = [
            [
                'name' => 'Hak Zell am See',
                'school_number' => 506418
            ],
            [
                'name' => 'HLP Zell am See',
                'school_number' => 506419


            ],
            [
                'name' => 'BG/BRG Zell am See',
                'school_number' => 506026
            ],
        ];

        foreach ($schools as $school)
        {
            $s = new School();
            $s->name = $school['name'];
            $s->address = 'Karl-Vogt-Straße 21, 5700 Zell am See';
            $s->school_number = $school['school_number'];
            $s->save();
        }




    }
}
