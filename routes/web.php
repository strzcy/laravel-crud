<?php
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});

// ini student routes, yg bakal display ygy
Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');

