@extends('layouts.dashboard')

@section('content')

<div class="pt-12">
   <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
               <div class="container p-2 mx-auto sm:p-4">
                   <h2 class="mb-4 text-2xl font-semibold leading-tight">All Classes</h2>
                    <div class="overflow-x-auto">
                        <table class="w-full p-6 text-xs text-left whitespace-nowrap">
                            <thead>
                                <tr class=" border-b ">
                                    <th class="p-3">SL</th>
                                    <th class="p-3">Name</th>
                                    <th class="p-3">
                                        Action 
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($classes as $key=>$class)
                                <tr>
                                    <td class="px-3">{{++$key}}</td>
                                    <td class="px-3 py-2">
                                        <p>{{$class->class_name}}</p>
                                    </td>
                                    <td class="px-3 py-4">
                                        <a href="" class="bg-gray-900 rounded text-white px-4 py-2 hover:bg-blue-700 hover:shadow-md hover:shadow-yellow-600 mx-2">
                                            Edit
                                        </a>
                                        <a href="" class="bg-red-600 rounded text-white px-4 py-2 hover:bg-blue-700 hover:shadow-md hover:shadow-yellow-600 mx-2">
                                            Delete
                                        </a>
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