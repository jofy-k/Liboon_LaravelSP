<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'course' => 'required|string|max:255',
            'year' => 'required|integer|min:1|max:4',
        ]);

        Student::create($validated);

        return redirect('/students')->with('success', 'Student created successfully!');
    }
}
