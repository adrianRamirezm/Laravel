<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ContactController;

Route::view('/', 'principal')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/contacto', 'contacto')->name('contacto');
Route::post('/contacto', [ContactController::class, 'storage'])->name('contacto.index');

Route::resource('portafolio', 'ProjectController')
    ->parameters(['portafolio' => 'project'])
    ->names('projects');

// Route::get('/portafolio', [ProjectController::class, 'index'])->name('projects.index');
// Route::get('/portafolio/create', [ProjectController::class, 'create'])->name('projects.create');

// Route::get('/portafolio/{project}/editar', [ProjectController::class, 'edit'])->name('projects.edit');
// Route::patch('/portafolio/{project}', [ProjectController::class, 'update'])->name('projects.update');

// Route::delete('portafolio/{project}', [ProjectController::class,'destroy'])->name('projects.destroy');

// Route::post('/portafolio', [ProjectController::class, 'store'])->name('projects.store');
// Route::get('/portafolio/{id}', 'ProjectController@show')->name('projects.show');


// Route::resource('portafolio', PortafolioController::class)->only('index','show'); //only/except

// Route::ApiResource('portafolio', PortafolioController::class); //only/except

Auth::routes();

