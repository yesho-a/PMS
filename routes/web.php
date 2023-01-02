<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
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
Route::resource('project',ProjectController::class);
Route::resource('task',TaskController::class);
Route::get('todo', [App\Http\Controllers\TaskController::class, 'todo']);
Route::get('task/complete/{id}','App\Http\Controllers\TaskController@complete')->name('complete');
Route::get('/table','App\Http\Controllers\TaskController@table');
