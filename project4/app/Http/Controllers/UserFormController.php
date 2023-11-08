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

        $req->validate([
            "fname" => 'required | min:3 | max:20',
            "lname" => 'required | min:3 | max: 20',
            'mail' => 'required | email'
        ],
        [
            'fname.required'=>'pole :attribute jest wymagane',
            'fname.min'=>'pole :attribute musi mieć przynajmniej :min znaki',
            'fname.max'=>'pole :attribute musi mieć maksymalnie :max znaków',

            'lname.required'=>'pole :attribute jest wymagane',
            'lname.min'=>'pole :attribute musi mieć przynajmniej :min znaki',
            'lname.max'=>'pole :attribute musi mieć maksymalnie :max znaków',

            'mail.required'=>'pole :attribute jest wymagane',
            'mail.email'=>'pole :attribute musi być typu email'
        ]);

        $data_user = [
            'fname'=>$req->input('fname'),
            'lname'=>$req->input('lname'),
            'mail'=>$req->input('mail'),
        ];

        return view('user', ['user'=>$data_user]);  
    }
}
