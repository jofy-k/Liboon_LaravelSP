@extends('components.layout')
<title>Students List - Student Portal</title>
@section('contents')

<div class="container mx-auto px-4">
    <h1 class="text-center text-4xl pt-8">Students List</h1>

<div class="flex justify-center">
    <button class="btn border border-green-500 bg-green-500 text-white rounded-md px-4 py-2 mt-8">
        <a href="/students/create">Add New Student</a>
    </button>
</div>

</div>

    <div class="py-8">
        <table class="w-full border-collapse border border-gray-400 bg-white text-sm">
            <thead>
                <tr>
                    <th class="border border-gray-300 ...">ID</th>
                    <th class="border border-gray-300 ...">Name</th>
                    <th class="border border-gray-300 ...">Course</th>
                    <th class="border border-gray-300 ...">Year</th>
                    <th class="border border-gray-300 ...">Actions</th>
                </tr>
            </thead>
            <tbody>
                
                @foreach ($students as $student)
                    <tr>
                        <td class="border border-gray-300 p-4">
                            <p class="text-center">{{ $student->id }}</p>
                        </td>
                        <td class="border border-gray-300 p-4">
                            <p class="text-center">{{ $student->name }}</p>
                        </td>
                        <td class="border border-gray-300 p-4">
                            <p class="text-center">{{ $student->course }}</p>
                        </td>
                        <td class="border border-gray-300 p-4">
                            <p class="text-center">{{ $student->year }}</p>
                        </td>
                        
                    <x-card :show="url('/students/'. $student->id .'/show')" :edit="url('/students/'. $student->id .'/edit')">
                    </x-card>

                    </tr> 
                @endforeach

            </tbody>
        </table>
    </div>
@endsection