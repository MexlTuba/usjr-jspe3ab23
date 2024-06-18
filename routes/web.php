<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UniversityController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/show/students/all', [UniversityController::class, 'showAllStudents']);
Route::get('/show/student/{id}', [UniversityController::class, 'showStudent']);
Route::get('/show/colleges', [UniversityController::class, 'showColleges']);
Route::get('/show/college/{id}', [UniversityController::class, 'showCollege']);
Route::get('/show/departments', [UniversityController::class, 'showDepartments']);
