<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="pt-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }} {{ Auth::user()->name}}
                </div>
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                   <a href="{{route('class.index')}}" class="bg-gray-900 rounded text-white px-4 py-2 hover:bg-blue-700 hover:shadow-md hover:shadow-yellow-600 mx-2">
                    class
                   </a>
                   <a href="{{route('students.index')}}" class="bg-gray-900 rounded text-white px-4 py-2 hover:bg-blue-700 hover:shadow-md hover:shadow-yellow-600 mx-2">
                    Students
                   </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
