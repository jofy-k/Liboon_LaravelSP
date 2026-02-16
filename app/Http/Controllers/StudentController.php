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

    public function index (){
    //route --> students.index views
    $student = Student::orderBy('created_at','desc')->get();
        
     return view ('students.index' , [ 'students' => $student]);
    }

    public function show ($id){
    //route --> students.show views
    $student = Student::findOrFail($id);
    
    return view ('students.show', ['students' => $student]);
    }

    public function edit($id){
        //route --> students.edit views

    }

    public function create (){
        //route --> students.create views

        return view ('students.create');
    }
}
