<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RandomController extends Controller
{
    public function select()
    {
        $stud = random_int(1, 19);
        return view('student.random', [
           'stud' => $stud
        ]);
    }
}
