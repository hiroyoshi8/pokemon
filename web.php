<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});



Route::post('/question',[App\Http\Controllers\QuestionController::class,'question'])->name('question');
Route::get('/manager',[App\Http\Controllers\QuestionController::class,'manager'])->name('manager');
Route::get('/index',[App\Http\Controllers\QuestionController::class,'index'])->name('index');

Route::get('/entry',[App\Http\Controllers\LoginController::class,'entry'])->name('entry');
Route::get('/sing',[App\Http\Controllers\LoginController::class,'sing'])->name('sing');
Route::get('/login',[App\Http\Controllers\LoginController::class,'login'])->name('login');
Route::post('/login',[App\Http\Controllers\LoginController::class,'login'])->name('login');
Route::post('/sing',[App\Http\Controllers\LoginController::class,'sing'])->name('sing');
Route::post('/logout',[App\Http\Controllers\LoginController::class,'logout'])->name('logout');
Route::get('/change',[App\Http\Controllers\LoginController::class,'change'])->name('change');
Route::post('/pass',[App\Http\Controllers\LoginController::class,'pass'])->name('pass');
Route::post('/delete',[App\Http\Controllers\LoginController::class,'delete'])->name('delete');

Route::post('/return',[App\Http\Controllers\ReturnController::class,'return'])->name('return');
Route::get('/home',[App\Http\Controllers\ReturnController::class,'home'])->name('home');

Route::get('/index',[App\Http\Controllers\ManagerController::class,'index'])->name('index');
Route::post('/insert',[App\Http\Controllers\ManagerController::class,'insert'])->name('insert');