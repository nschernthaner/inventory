<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function contact(){
        $firstname = 'Max';
        $surname = 'Muster';

        return view('contact', [
            'fname' => $firstname,
            'sname' => $surname
        ]);
    }

    public function impressum(){
        return view('impressum');
    }

    public function me(){
        return view('test');
    }

    public function about(){

    }

    public function inventory($id){

        //$info = 'Lenovo ThinkCenter';
        //$info = '<script>window.top.location="https://www.hakzell.at";</script>';
        $info = 'Der <strong>PC</strong> funktioniert perfekt.';

        return view('inventory', [
            'id' => $id,
            'info' => $info
        ]);
    }

}
