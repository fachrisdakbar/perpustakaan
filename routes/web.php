<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/bukus', [App\Http\Controllers\BukuController::class, 'index'])->name('bukus');

Route::resource('/bukus', BukuController::class);
// Route::namespace('Admin')->prefix('admin')->as('admin.')->middleware('auth','admin')->group(function(){

// 	Route::get('/admin', 'HomeController@index')->name('home');
// 	// Route::get('/search', 'EmployeesController@search')->name('search');
// 	Route::resource('/perpus', 'PerpusController');
// 	Route::resource('/admin', 'AdminController');
// 	// Route::resource('/user', 'UserController');
// 	});
