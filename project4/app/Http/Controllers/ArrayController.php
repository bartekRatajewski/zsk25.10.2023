<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArrayController extends Controller
{
    public function ShowArray(){
        $user = [
            'fname'=>'janusz',
            'lname'=>'nowak',
            'city'=>'poznan',
            'hobby'=>['żużel','siatkówka','skoki narciarskie']
        ];
        return view('showUser',['user'=>$user]);
    }
}
