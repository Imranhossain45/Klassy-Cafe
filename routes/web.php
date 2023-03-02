<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\ChefController;

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

/* Route::get('/', function () {
    return view('frontend.index');
}); */

Route::controller(HomeController::class)->name('frontend.')->group(function(){

    Route::get('/', 'index')->name('index');
    Route::get('/chefs', 'chef')->name('chef');
});


Route::middleware(['auth'])->group(
    function () {
        Route::get('/home', [HomeController::class, 'home'])->name('home');

        Route::controller(ChefController::class)->name('backend.chef.')->group(function () {
            Route::get('/chef', 'index')->name('index');
            Route::get('/chef/create', 'create')->name('create');
            Route::post('/chef/store', 'store')->name('store');
            Route::get('/chef/edit/{chef}', 'edit')->name('edit');
            Route::post('/chef/update/{chef}', 'update')->name('update');
            Route::get('/chef/destroy/{chef}', 'destroy')->name('trash');
            Route::get('/chef/status/{chef}', 'status')->name('status');
            Route::get('/chef/reStore/{id}', 'reStore')->name('reStore');
            Route::get('/chef/permDelete/{id}', 'permDelete')->name('delete');
        });
    }
);



Auth::routes();
