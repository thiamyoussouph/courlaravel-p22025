<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VoitureController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('teste', function () {
    return 'bonjour tout le monde ';
});
Route::get('teste2',function() {
    return view('teste2');
});
Route::get('navigation',function(){
   return view('nav');
});

Route::get('voitures',[VoitureController::class,'index']);
Route::get('voitures/create',[VoitureController::class,'create']);
