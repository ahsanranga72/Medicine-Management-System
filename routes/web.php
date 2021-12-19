<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ManagementController;
use App\Http\Controllers\MedicineController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/addmanufacturecompany', [ManagementController::class, 'addmanufacturecompany'])->name('addmanufacturecompany')->middleware('auth');
Route::post('/storemanufacturecompany', [ManagementController::class, 'storemanufacturecompany'])->name('storemanufacturecompany')->middleware('auth');
//Route::get('/editcv', [CreateCvController::class, 'EditCV'])->name('editcv')->middleware('auth');
//Route::post('/updatecv', [CreateCvController::class, 'UpdateCV'])->name('updatecv')->middleware('auth');
Route::get('/viewmanufacturercompany', [ManagementController::class, 'viewmanufacturercompany'])->name('viewmanufacturercompany')->middleware('auth');

Route::get('/addgenericname', [ManagementController::class, 'addgenericname'])->name('addgenericname')->middleware('auth');
Route::post('/storegenericname', [ManagementController::class, 'storegenericname'])->name('storegenericname')->middleware('auth');
//Route::get('/editcv', [CreateCvController::class, 'EditCV'])->name('editcv')->middleware('auth');
//Route::post('/updatecv', [CreateCvController::class, 'UpdateCV'])->name('updatecv')->middleware('auth');
Route::get('/viewgenericname', [ManagementController::class, 'viewgenericname'])->name('viewgenericname')->middleware('auth');

Route::get('/addmeditype', [ManagementController::class, 'addmeditype'])->name('addmeditype')->middleware('auth');
Route::post('/storemeditype', [ManagementController::class, 'storemeditype'])->name('storemeditype')->middleware('auth');
//Route::get('/editcv', [CreateCvController::class, 'EditCV'])->name('editcv')->middleware('auth');
//Route::post('/updatecv', [CreateCvController::class, 'UpdateCV'])->name('updatecv')->middleware('auth');
Route::get('/viewmeditype', [ManagementController::class, 'viewmeditype'])->name('viewmeditype')->middleware('auth');

Route::get('/addmedicine', [MedicineController::class, 'addmedicine'])->name('addmedicine')->middleware('auth');
Route::post('/storemedicine', [MedicineController::class, 'storemedicine'])->name('storemedicine')->middleware('auth');
//Route::get('/editcv', [CreateCvController::class, 'EditCV'])->name('editcv')->middleware('auth');
//Route::post('/updatecv', [CreateCvController::class, 'UpdateCV'])->name('updatecv')->middleware('auth');
Route::get('/viewmedicine', [MedicineController::class, 'viewmedicine'])->name('viewmedicine')->middleware('auth');