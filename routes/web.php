<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\Controller;



Route::view ('/','home')->name('home');     
Route::view ('/quienes-somos','about')->name('about');


Route::resource('portafolio', 'ProjectController')
->names('projects')
->parameters(['portafolio' => 'project']);


// Route::get('/portafolio','ProjectController@index')->name('projects.index');//(url,controlador a ejecutar)
// Route::get('/portafolio/crear','ProjectController@create')->name('projects.create');

// Route::get('/portafolio/{project}/editar','ProjectController@edit')->name('projects.edit');
// Route::patch('/portafolio/{project}','ProjectController@update')->name('projects.update');

// Route::post('/portafolio','ProjectController@store')->name('projects.store');
// Route::get('/portafolio/{project}','ProjectController@show')->name('projects.show');

// Route::delete('/portafolio/{project}','ProjectController@destroy')->name('projects.destroy');

Route::view ('/contacto','contact')->name('contact');
Route::post('contact','MessageController@store')->name('messages.store');


//Route::resource('Projects', 'PortfolioController')->only(['index','show']);



