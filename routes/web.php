<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('student/show', [StudentController::class, 'show']);
Route::get('student/create', [StudentController::class, 'create']);