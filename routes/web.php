<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SampleController;
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
Route::get('student/find-or-fail', [StudentController::class, 'findOrFail']);

//STUDENT RELATIONSHIP ROUTES.
Route::get('student/one-to-one', [StudentController::class, 'oneToOne']); //one to one.
Route::get('student/home', [HomeController::class, 'index']); //one to many relationship.
Route::get('student/many-to-many', [SampleController::class, 'index']); //many to many relationship.