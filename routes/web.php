<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CreateCvController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Auth;

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


// Route::get('/', function () {
//     return view('master');
// });

//Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/addmanufacturecompany', [BlogController::class, 'addmanufacturecompany'])->name('addmanufacturecompany')->middleware('auth');
Route::post('/storecv', [CreateCvController::class, 'StoreCV'])->name('storecv')->middleware('auth');
Route::get('/editcv', [CreateCvController::class, 'EditCV'])->name('editcv')->middleware('auth');
Route::post('/updatecv', [CreateCvController::class, 'UpdateCV'])->name('updatecv')->middleware('auth');
Route::get('/viewblog', [BlogController::class, 'viewblog'])->name('viewblog')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');