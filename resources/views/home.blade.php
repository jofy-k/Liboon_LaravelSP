@extends('components.layout')
<title>Home - Student Portal</title>
@section('contents')

    <h1 class="text-center text-4xl py-8">Welcome to the Student Portal</h1>
    <p class="text-center">Click here to get started</p>
    <div class="flex justify-center">
        <a href="/students"
            class="btn border border-blue-500 bg-blue-500 text-white rounded-md px-4 py-2 mt-4 hover:bg-blue-600 hover:border-blue-600">
            Find Students!
        </a>
    </div>

@endsection 