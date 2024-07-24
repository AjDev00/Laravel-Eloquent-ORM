<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//STUDENT ROUTES.
Route::get('student/show', [StudentController::class, 'show']);
Route::get('student/update', [StudentController::class, 'update']);
Route::get('student/delete', [StudentController::class, 'delete']);
Route::get('student/create', [StudentController::class, 'create']);
Route::get('student/mass', [StudentController::class, 'mass']);
Route::get('student/index', [StudentController::class, 'index']);