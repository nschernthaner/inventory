<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Roomseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kat1 = new Room();
        $kat1->name = "Raum 4BHK";
        $kat1->school_id = 1;
        $kat1->save();
    }
}
