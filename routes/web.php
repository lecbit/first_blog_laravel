<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', 'App\Http\Controllers\PagesController@home');

// Route::get('/contact', 'App\Http\Controllers\PagesController@contact');

// Route::get('/about', 'App\Http\Controllers\PagesController@about');



// Route::get('/projects', 'App\Http\Controllers\ProjectsController@index');

// Route::post('/projects', 'App\Http\Controllers\ProjectsController@store');

// Route::get('/projects/create', 'App\Http\Controllers\ProjectsController@create');

// Route::patch('/projects/{project}', 'App\Http\Controllers\ProjectsController@update');

Route::resource('projects', 'App\Http\Controllers\ProjectsController');