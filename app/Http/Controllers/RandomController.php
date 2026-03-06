<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RandomController extends Controller
{
    public function select()
    {
        return random_int(1, 9);
    }
}
