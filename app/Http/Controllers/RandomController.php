<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RandomController extends Controller
{
    public function show(Request $request)
    {
        // oder Zugriff auf Request mit request()

        $stud = null;

        if ($request->isMethod('post')){
            $attributes = $request->validate([
                'min' => 'required|integer',
                'max' => 'required|integer|gte:min'
            ]);

            $stud = random_int($attributes['min'], $attributes['max']);

        }


        return view('student.random', [
            'stud' => $stud
        ]);

    }


}
