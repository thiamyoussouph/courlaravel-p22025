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

Route::get('voitures',[VoitureController::class,'index'])->name('voitures.index');
Route::get('voitures/create',[VoitureController::class,'create'])->name('voitures.create');
Route::post('voitures/ajouter',[VoitureController::class,'store'])->name('voitures.store');
Route::get('voitures/{voiture}/edit',[VoitureController::class,'edit'])->name('voitures.edit');
Route::put('voitures/{voiture}',[VoitureController::class,'update'])->name('voitures.update');
Route::delete('voitures/{voiture}',[VoitureController::class,'destroy'])->name('voitures.destroy');
Route::get('voitures/{voiture}',[VoitureController::class,'show'])->name('voitures.show');