@extends('components.layout')
<title>Edit Student Profile - Student Portal</title>
@section('contents')
<div class="py-8">
    <div class="max-w-4xl mx-auto p-6 bg-white rounded-lg border border-gray-300">
        <h1 class="text-3xl font-bold mb-4 text-center">Edit Student Profile</h1>
        <form method="POST" action="/students/{{ $student->id }}">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="name">Name:</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight" type="text" id="name" name="name" value="{{ old('name', $student->name) }}" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="course">Course:</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight" type="text" id="course" name="course" value="{{ old('course', $student->course) }}" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="year">Year:</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight" type="number" id="year" name="year" value="{{ old('year', $student->year) }}" required>
            </div>
            <div class="flex items-center justify-between">
                <button type="submit" class="btn border border-blue-500 bg-blue-500 text-white rounded-md px-4 py-2">Update Student</button>
                <a href="/students" class="btn border border-gray-500 bg-gray-500 text-white rounded-md px-4 py-2">Cancel</a>
            </div>
        </form>
    </div> 
</div>

@endsection