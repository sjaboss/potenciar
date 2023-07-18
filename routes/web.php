<?php

use App\Http\Controllers\PersonasController;
use Illuminate\Support\Facades\Route;
/* 
 Route::get('/', WelcomeController::class); */
Route::get('/inicio',[PersonasController::class,'index'])->name('personas.index');
Route::get('/agregar',[PersonasController::class,'create'])->name('personas.create'); 
Route::post('/store',[PersonasController::class,'store'])->name('personas.store'); 
Route::get('/modificar/{id}',[PersonasController::class,'edit'])->name('personas.edit'); 
Route::post('/update/{id}',[PersonasController::class,'update'])->name('personas.update'); 
Route::get('/show/{id}',[PersonasController::class,'show'])->name('personas.show'); 
Route::get('/destroy/{id}',[PersonasController::class,'destroy'])->name('personas.destroy'); 


Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
