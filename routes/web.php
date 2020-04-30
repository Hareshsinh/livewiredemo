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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/user/create', function(){
    return view('user');
});

Route::get('/user/{id}/show', function(){
    return view('user');
})->name('user.show');

Route::get('/users', function(){
    return view('listing');
});
Route::livewire('/user/{user}', 'user.register-edit');
