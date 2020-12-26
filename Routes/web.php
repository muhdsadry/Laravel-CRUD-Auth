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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

//Redirect to Welcome page with Record Count and Latest Record
Route::get('/', [App\Http\Controllers\WelcomeController::class, 'list'])->name('welcome');

//CRUD controller
Route::resource('students', 'App\Http\Controllers\StudentsController');

//Authentication controller
Auth::routes();

//Extract Record Count and Latest Record from Students Model
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
