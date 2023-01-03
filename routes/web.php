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

Route::get('/todos' ,[App\Http\Controllers\TodoController::class ,'index']);
Route::get('/create' ,[App\Http\Controllers\TodoController::class, 'create']);
Route::post('/store-todo',[App\Http\Controllers\TodoController::class, 'store']);
Route::get('/todos/{id}' ,[App\Http\Controllers\TodoController::class, 'show']);
Route::get('/todos/edit/{id}' ,[App\Http\Controllers\TodoController::class, 'edit']);
Route::post('/todos/update/{id}' ,[App\Http\Controllers\TodoController::class, 'update']);
Route::get('/todos/delete/{id}' ,[App\Http\Controllers\TodoController::class, 'destroy']);
Route::get('/todos/complete/{id}' ,[App\Http\Controllers\TodoController::class, 'complete']);
