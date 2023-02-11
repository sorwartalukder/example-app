@extends('layouts.dashboard')

@section('content')

<div class="pt-12">
   <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white p-3 shadow-sm sm:rounded-lg">
           <a href="{{route('students.index')}}" 
                   class='bg-green-600 rounded text-white px-4 py-2  hover:bg-blue-700 hover:shadow-md hover:shadow-yellow-600 m-3'
                   >
                    All students
                   </a>
                   <ul class='m-3'>
                    <li>{{$student->name}}</li>
                    <li>{{$student->roll}}</li>
                    <li>{{$student->phone}}</li>
                    <li>{{$student->class_id}}</li>
                   </ul>
        </div>
   </div>
</div>

@endsection