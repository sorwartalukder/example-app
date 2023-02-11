@extends('layouts.dashboard')

@section('content')

<div class="pt-12">
   <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
               <div class="container p-2 mx-auto sm:p-4">
                   <div class='flex justify-between items-center'>
                    <h2 class="mb-4 text-2xl font-semibold leading-tight">All students</h2>
                   <a href="{{route('students.create')}}" 
                   class='bg-green-600 rounded text-white px-4 py-2 hover:bg-blue-700 hover:shadow-md hover:shadow-yellow-600 mx-2'
                   >
                    Add New
                   </a>
                   </div>
                    <div class="overflow-x-auto">
                            @if(session()->has('success'))
                            <strong class='text-green-600 bg-pink-200 p-3 my-3'>{{session()->get('success')}}</strong>
                            @endif
                        <table class="w-full p-6 text-xs text-left whitespace-nowrap">
                            <thead>
                                <tr class=" border-b ">
                                    <th class="p-3">SL</th>
                                    <th class="p-3">Roll</th>
                                    <th class="p-3">Name</th>
                                    <th class="p-3">Phone</th>
                                    <th class="p-3">Class Name</th>
                                    <th class="p-3">
                                        Action 
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($students as $key=>$student)
                                <tr>
                                    <td class="px-3">{{++$key}}</td>
                                    <td class="px-3 py-2">
                                        <p>{{$student->roll}}</p>
                                    </td>
                                    <td class="px-3 py-2">
                                        <p>{{$student->name}}</p>
                                    </td>
                                    <td class="px-3 py-2">
                                        <p>{{$student->phone}}</p>
                                    </td>
                                    <td class="px-3 py-2">
                                        <p>{{$student->class_id}}</p>
                                    </td>
                                    <td class="px-3 py-4">
                                        <a href="{{route('students.edit',$student->id)}}" class="bg-gray-900 rounded text-white px-4 py-2 hover:bg-blue-700 hover:shadow-md hover:shadow-yellow-600 mx-2">
                                            Edit
                                        </a>
                                        <form 
                                        action="{{route('students.destroy',$student->id)}}"
                                        method="post"
                                        >
                                            @csrf
                                            @method('delete')
                                            <button type='submit' class="bg-red-600 rounded text-white px-4 py-2 hover:bg-red-700 hover:shadow-md hover:shadow-yellow-600 mt-4">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
   </div>
</div>

@endsection