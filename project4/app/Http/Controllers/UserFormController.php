<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserFormController extends Controller
{
    public function ShowUser(Request $req){
        //return $req->input(); // wszytskie dane z formsa w postaci tablicy
        //return $req->input('fname'); // Imie podane w formsie
        //return $req->path(); // UserFormController
        //return $req->url(); //adres https
        //return $req->method(); //GET
        $data_user = [
            'fname'=>$req->input('fname'),
            'lname'=>$req->input('lname')
        ];
        return view('user', ['user'=>$data_user]);  
    }
}
