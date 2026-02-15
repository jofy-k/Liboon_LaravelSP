<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Models\Student;

Route::get('/', function () {
    return view('home');
});

Route::post('/students', [StudentController::class, 'store']);

Route::get('/students', function () {
    $samples = Student::all();

    return view('students.index', ["samples" => $samples]);
});

Route::get('/students/{id}/view', function ($id) {
    $samples = Student::all();

    return view('students.show', ["id" => $id, "samples" => $samples]);
});

Route::get('/students/{id}/edit', function ($id) {
    $samples = Student::all();
    
     return view('students.edit', ["id" => $id, "samples" => $samples]);
});


Route::get('/students/create', function () {
    return view('students.create');
});