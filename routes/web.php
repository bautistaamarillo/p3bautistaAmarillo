<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AuditController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
// */

// Route::get('test', function () {
//     return view('welcome');
// });
Route::get('index', function () {
    return view('index');
});
Route::resource('students',StudentController::class);

Route::get('audit', [AuditController::class, 'index']);