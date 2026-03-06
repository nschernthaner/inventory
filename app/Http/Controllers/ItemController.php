<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{

    public function index(){
        $items = Item::all()->where(function ($school){
            return $school->school_id === 101;
        });

        //dd($items);

        return view('items.index', [
            'items' => $items
        ]);
    }
}
