<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Categoryseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kat1 = new Category();
        $kat1->title="kategorie 1";
        $kat1->school_id= 101;
        $kat1->save();
    }
}
