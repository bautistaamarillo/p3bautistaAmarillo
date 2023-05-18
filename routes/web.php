<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\AuditController;
use App\Models\Student;

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
//--------- INDEX -------------

Route::get('index', function () {
    return view('index');
});

//--------- Student CRUD -------------

// Route::resource('students',StudentController::class);

//--------- AUDIT -------------

Route::get('audit', [AuditController::class, 'index']);

// --------- WELCOME ------------

Route::get('/', function () {
    return view('welcome');
});

// --------- Desarrollando ------------

Route::resource('subjects',SubjectController::class);

Route::get('/test', function () {
    return view('test');
})->middleware(['auth', 'verified'])->name('test');


// ----------LOGIN-------------
Route::get('/dashboard', function () {
    $students = Student::all();
    return view('dashboard', compact('students'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('students',StudentController::class);
    
});

require __DIR__.'/auth.php';
