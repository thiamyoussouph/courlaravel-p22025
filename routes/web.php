<?php

use Illuminate\Support\Facades\Route;

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
Route::get('voitures',function(){
   return view('voitures.liste');
});