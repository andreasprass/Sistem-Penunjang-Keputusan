<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;

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

Route::get('/',[DashboardController::class, 'index'])->middleware('auth');
Route::get('/home',[DashboardController::class, 'index'])->name('home')->middleware('auth');
Route::get('/positions',[DashboardController::class, 'position_view'])->name('position')->middleware('auth');
Route::post('/addPosition',[DashboardController::class, 'add_position'])->name('add_position')->middleware('auth');
// Ajax URL
Route::get('/getDivs/{id}',[AjaxController::class, 'get_divs'])->name('getDivs')->middleware('auth');

// Route::get('/tes', [DashboardController::class, 'test'])->name('test')->middleware('auth');

Route::get('/login',[LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class, 'validation'])->name('login')->middleware('guest');
Route::post('/logout',[LoginController::class, 'logout'])->name('logout')->middleware('auth');
Route::get('/register',[LoginController::class, 'register'])->name('register')->middleware('guest');
Route::post('/register',[LoginController::class, 'store'])->name('register')->middleware('guest');
