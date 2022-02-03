<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PupilsController;

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

Route::get('/', function () {
    return view('front');
});

Route::resource('pupil', 'App\Http\Controllers\PupilsController');

Route::get('/regForm', function(){
    return view('pupil.regForm');
});

Route::get('/list', function(){
    return view('pupil.list');
});

Route::get('/edit', function(){
    return view('pupil.edit');
});

Route::get('/set', function(){
    return view('assignment.set');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
