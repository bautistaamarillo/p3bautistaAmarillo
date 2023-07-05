<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\AuditController;
use App\Http\Controllers\AssistanceController;
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
// Headers
// CORS
function headerCors ( $response ){
    $response->header('Access-Control-Allow-Origin', '*');
    $response->header('Access-Control-Allow-Methods', 'GET');
    $response->header('Access-Control-Allow-Headers', 'Content-Type');
}

//--------- INDEX -------------

Route::get('index', function () {
    return view('index');
});

//--------- AUDIT -------------

Route::get('audit', [AuditController::class, 'index']);

// --------- WELCOME ------------

Route::get('/', function () {
    return view('welcome');
});

// --------- DESARROLLO ------------

Route::get('/test', function () {
    return view('test');
})->middleware(['auth', 'verified'])->name('test');


// ------------JSON PRACTICA PROFECIONALIZANTE.-------------
Route::get('/studentsjson',function (){
    $students = Student::all();
    $response = response()->json($students);
    headerCors($response);
    return $response;
})->name('studentsjson');  //SAQUE EL MIDDLEWARE PARA BYPASSEAR LA AUTENTIFICACION.

Route::get('/subjectsjson',function (){
    $subjects = Subject::all();
    $response = response()->json($subjects);
    headersCors($response);
    return $response;
})->name('subjectsjson');

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
    Route::resource('subjects', SubjectController::class);
    Route::resource('assistances', AssistanceController::class);
    
});

require __DIR__.'/auth.php';
