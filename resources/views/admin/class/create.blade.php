@extends('layouts.dashboard')

@section('content')

<div class="pt-12">
   <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
               <div class="container p-2 mx-auto sm:p-4">
                   <div class='flex justify-between items-center'>
                    <h2 class="mb-4 text-2xl font-semibold leading-tight">Add new class</h2>
                   <a href="{{route('class.index')}}" 
                   class='bg-green-600 rounded text-white px-4 py-2 hover:bg-blue-700 hover:shadow-md hover:shadow-yellow-600 mx-2'
                   >
                    All Class
                   </a>
                   </div>
     <div class="overflow-x-auto">
        <form action="{{route('store.class')}}" 
        method='post'
        class="container flex flex-col mx-auto text-white"
        >
        @csrf
        @if(session()->has('success'))
           <strong class='text-green-600 bg-pink-200 p-3 my-3'>{{session()->get('success')}}</strong>
        @endif
       
                <fieldset class="grid grid-cols-4 gap-6 p-6 rounded-md shadow-sm bg-gray-900">
                    <div class="grid grid-cols-6 gap-4 col-span-full lg:col-span-3">
                        <div class="col-span-full sm:col-span-3">
                            <label>Class Name</label>
                            <input type="text"
                            name='class_name'
                             placeholder="Class Name" 
                             class="w-full rounded-md focus:ring focus:ring-opacity-75 focus:ring-violet-400 border-gray-700 text-gray-900 @error('class_name') is-invalid @enderror"
                             value="{{old('class_name')}}"
                             >
                             @error('class_name')
                             <span class=" text-red-600 invalid-feedback" role="alert">
                               <strong class='block'>{{ $message }}</strong>

                             </span>
                             @enderror
                             <button
                             type='submit'
                             class='bg-green-600 rounded text-white px-6 py-2 my-4 hover:bg-blue-700 hover:shadow-md hover:shadow-yellow-600'
                            >
                                Add
                            </button>
                        </div>
                    </div>
                </fieldset>
            </form>
                    </div>
                </div>
            </div>
        </div>
   </div>
</div>

@endsection