<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArrayController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\UserFormController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('show', [ShowController::class, 'Show']);
Route::get('show_data', [ShowController::class, 'ShowData']);
Route::get('show_array', [ArrayController::class, 'ShowArray']);

Route::view('user_form','forms.user_form');

Route::get('UserFormController', [UserFormController::class, 'ShowUser']);