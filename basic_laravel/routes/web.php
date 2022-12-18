<?php

use App\Http\Controllers\Fontcontroller;
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

Route::get('/', [Fontcontroller::class, 'index']);
Route::get('/contact',[Fontcontroller::class, 'contact']);
Route::get('/blog',[Fontcontroller::class, 'blog']);
Route::get('/add',[Fontcontroller::class, 'add']);
Route::post('/add',[Fontcontroller::class, 'post']);
Route::get('/list',[Fontcontroller::class, 'list']);
Route::get('/edit/{id}',[Fontcontroller::class, 'edit']);
Route::post('/edit/{id}',[Fontcontroller::class, 'update']);
Route::get('/destroy/{id}',[Fontcontroller::class, 'destroy']);
Route::get('/todo',[Fontcontroller::class, 'todo']);
Route::post('/todo',[Fontcontroller::class, 'insert']);
Route::get('/todo/edit/{id}',[Fontcontroller::class, 'todoedit']);
Route::post('/todo/edit/{id}',[Fontcontroller::class, 'todoupdate']);
Route::get('/todo/delet/{id}',[Fontcontroller::class, 'tododelet']);


