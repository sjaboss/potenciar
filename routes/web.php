<?php

/* use App\Http\Controllers\PersonasController; */
use App\Http\Controllers\crudPersonasSepController;
use Illuminate\Support\Facades\Route;
use Illuminate\Contracts\Container\BindingResolutionException; 
/* 
 Route::get('/', WelcomeController::class); */
Route::get('/inicio',[crudPersonasSepController::class,'index'])->name('personas.index');
Route::get('/historial',[crudPersonasSepController::class,'historial'])->name('personas.historial');
Route::get('/ver/{id}',[crudPersonasSepController::class,'ver'])->name('personas.ver'); 
Route::get('/agregar',[crudPersonasSepController::class,'create'])->name('personas.create'); 
Route::post('/store',[crudPersonasSepController::class,'store'])->name('personas.store'); 

Route::get('/modificar/{id}',[crudPersonasSepController::class,'edit'])->name('personas.edit'); 
Route::post('/update/{id}',[crudPersonasSepController::class,'update'])->name('personas.update'); 
Route::get('/show/{id}',[crudPersonasSepController::class,'show'])->name('personas.show'); 
Route::post('/destroy/{id}',[crudPersonasSepController::class,'destroy'])->name('personas.destroy'); 


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
