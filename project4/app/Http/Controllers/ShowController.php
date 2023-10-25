<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function Show(){
        return 'kontroler ShowController';
    }

    public function ShowData(){
        $data = [
            'fname'=>'janusz',
            'lname'=>'nowak',
            'city'=>'poznan'
        ];
        return view('data', ['data'=>$data]);
    }
}
