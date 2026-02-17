@extends('components.layout')
<title>Student Profile - Student Portal</title>

@section('contents')

<div class="py-8">
@foreach([$student] as $sample)
     <div class="max-w-4xl mx-auto p-6 bg-white rounded-lg border border-gray-300">
        <h1 class="text-3xl font-bold mb-4 text-center">Student Profile</h1>
    <div class="mb-4">
        <strong>ID:</strong> {{ $sample->id }}
    </div>
        <div class="mb-4">
            <strong>Name:</strong> {{ $sample->name }}
        </div>
        <div class="mb-4">
            <strong>Course:</strong> {{ $sample->course }}
        </div>
        <div class="mb-4">
            <strong>Year:</strong> {{ $sample->year }}
        </div>
        <a href="/students" class="btn border border-blue-500 bg-blue-500 text-white rounded-md px-4 py-2 hover:bg-blue-600 hover:border-blue-600">Back to Students List</a>
    </div>
@endforeach 

</div>

@endsection
   