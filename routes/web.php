<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Models\Student;

Route::get('/', function () {
    return view('home');
});

Route::post('/students', [StudentController::class, 'store']);

Route::get('/students', [StudentController::class, 'index']);

Route::get('/students/{id}/show', [StudentController::class, 'show']);

Route::get('/students/{id}/edit', [StudentController::class, 'edit']);

Route::get('/students/create', [StudentController::class, 'create']);