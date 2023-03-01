<?php

use App\Http\Controllers\Backend\ChefController;
use Illuminate\Support\Facades\Auth;
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
    return view('frontend.index');
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::controller(ChefController::class)->name('chef.')->group(function () {
    Route::get('/chef', 'index')->name('index');
    Route::get('/chef/create', 'create')->name('create');
    Route::post('/chef/store', 'store')->name('store');
    Route::get('/chef/edit/{chef}', 'edit')->name('edit');
    Route::get('/chef/update/{chef}', 'update')->name('update');
    Route::get('/chef/destroy/{chef}', 'destroy')->name('delete');
});



Auth::routes();
