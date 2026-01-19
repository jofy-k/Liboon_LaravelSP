<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/students', function () {
    $samples = [
        1 => ['id' => 1, 'name' => 'John Bennedict Bancruz', 'course' => 'Bachelor of Science in Computer Science', 'year' => 2],
        2 => ['id' => 2, 'name' => 'Bien Ninyo Enric Iligan', 'course' => 'Bachelor of Science in Information Technology', 'year' => 2],
        3 => ['id' => 3, 'name' => 'Nathalio Feliciano Solis', 'course' => 'Bachelor of Science in Pharmacy', 'year' => 4],
        4 => ['id' => 4, 'name' => 'Keegan Jeoff Liboon', 'course' => 'Bachelor of Science in Information System', 'year' => 2],
        5 => ['id' => 5, 'name' => 'Keanu Lumando', 'course' => 'Bachelor of Science in Information System', 'year' => 2],
    ];

    return view('students.index', ["samples" => $samples]);
});

Route::get('/students/{id}/view', function ($id) {
    $samples = [
        1 => ['id' => 1, 'name' => 'John Bennedict Bancruz', 'course' => 'Bachelor of Science in Computer Science', 'year' => 2],
        2 => ['id' => 2, 'name' => 'Bien Ninyo Enric Iligan', 'course' => 'Bachelor of Science in Information Technology', 'year' => 2],
        3 => ['id' => 3, 'name' => 'Nathalio Feliciano Solis', 'course' => 'Bachelor of Science in Pharmacy', 'year' => 4],
        4 => ['id' => 4, 'name' => 'Keegan Jeoff Liboon', 'course' => 'Bachelor of Science in Information System', 'year' => 2],
        5 => ['id' => 5, 'name' => 'Keanu Lumando', 'course' => 'Bachelor of Science in Information System', 'year' => 2],
    ];

    return view('students.show', ["id" => $id, "samples" => $samples]);
});

Route::get('/students/{id}/edit', function ($id) {
    $samples = [
        1 => ['id' => 1, 'name' => 'John Bennedict Bancruz', 'course' => 'Bachelor of Science in Computer Science', 'year' => 2],
        2 => ['id' => 2, 'name' => 'Bien Ninyo Enric Iligan', 'course' => 'Bachelor of Science in Information Technology', 'year' => 2],
        3 => ['id' => 3, 'name' => 'Nathalio Feliciano Solis', 'course' => 'Bachelor of Science in Pharmacy', 'year' => 4],
        4 => ['id' => 4, 'name' => 'Keegan Jeoff Liboon', 'course' => 'Bachelor of Science in Information System', 'year' => 2],
        5 => ['id' => 5, 'name' => 'Keanu Lumando', 'course' => 'Bachelor of Science in Information System', 'year' => 2],
    ];

    return view('students.edit', ["id" => $id, "samples" => $samples]);
});


Route::get('/students/create', function () {
    return view('students.create');
});