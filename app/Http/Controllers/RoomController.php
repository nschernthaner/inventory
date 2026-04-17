<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\School;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index(){
        // $schools = School::all();
        $rooms =Room::paginate(10);

        $schools = School::all();
        return view('rooms.index', [
            'rooms' => $rooms,
            'schools' => $schools
        ]);
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            "title" => "required|min:3|max:64|string",
            "school_id" => "required|integer"
        ]);

        $rooms = Room::create($attributes);

        /*
        $room = new Room();
        $room->title = $attributes["title"];
        $room->school_id = $attributes["school_id"];
        $room->save();
        */

        return back()->with('success', __('Room saved.'));

    }

    public function destroy(Room $room) {
        $room->delete();

        return back()->with('success',__('Room removed.'));
    }
}
