@extends('components.layout')
<title>Create New Student - Student Portal</title>
@section('contents')
<div class="py-8">
   <div class="max-w-4xl mx-auto p-6 bg-white rounded-lg border border-gray-300">
   <h1 class="text-3xl font-bold mb-4 text-center">New Student</h1>
    
    <form method="POST" action="/students">
        @csrf
        
        <div class="form-group">
            <label class="block text-gray-700 font-bold mb-2" for="name">Name:</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight" type="text" id="name" name="name" required>
        </div>
        
        <div class="form-group">
            <label class="block text-gray-700 font-bold mb-2" for="course">Course:</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight" type="text" id="course" name="course" required>
        </div>
        
        <div class="form-group">
            <label class="block text-gray-700 font-bold mb-2" for="year">Year:</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight" type="number" id="year" name="year" required>
        </div>
        
        <div class ="flex justify-center pt-5">
            <button type="submit" class="btn border border-blue-500 bg-blue-500 text-white rounded-md px-4 py-2">Create Student</button>
        </div>
    </form>
</div>
</div>
@endsection
