<?php

use Illuminate\Support\Facades\Route;


// DB::listen(function($query) {
//     var_dump($query->sql);
// });
//main


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
// ->middleware(['auth'])
require __DIR__.'/auth.php';
//->middleware(['auth']); 
Route::view ('/','home')->name('home');    
Route::view ('/quienes-somos','about')->name('about');


Route::resource('portafolio', 'ProjectController')
->names('projects')
->parameters(['portafolio' => 'project']);

Route::get('categorias/{category}', 'CategoryController@show')->name('categories.show');

Route::view ('/contacto','contact')->name('contact');
Route::post('contact','MessageController@store')->name('messages.store');

Route::delete('/portafolio/{project}', 'ProjectController@destroy')->name('projects.destroy');





