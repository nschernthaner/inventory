<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Schule') }}
        </h2>
    </x-slot>

    <div class="py-12 space-y-6">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 border text-green-500 dark:text-green-500 ">
        d
            @if (session('success'))
                <p>{{session('success')}}</p>
            @endif
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1>{{ __('Select school') }}</h1>
                    <p>{{ __('Please enter the school details') }}</p>


                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('school.store') }}" method="post">
                        @csrf

                        <div class="mb-4">
                            <x-input-label for="name">{{__('Name')}}</x-input-label>
                            <x-text-input value="{{ old('name','') }}" name="name" id="name" class="block mt-1 w-full" />
                        </div>

                        <div class="mb-4">
                            <x-input-label for="address">{{__('Address')}}</x-input-label>
                            <x-text-input value="{{ old('address','')}}" name="address" id="address" class="block mt-1 w-full" />
                        </div>

                        <div class="mb-4">
                            <x-input-label for="school_number">{{__('School_number')}}</x-input-label>
                            <x-text-input value="{{ old('school_number','')}}"  name="school_number" id="school_number" class="block mt-1 w-full" />
                        </div>

                        <x-primary-button class="mt-3">
                            {{ __('Save') }}
                        </x-primary-button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">

                @foreach($schools as $school)
                    <div class="border p-3 rounded">
                        {{$school->name}}
                        <h2 class="text-2xl">{{$school->name}}</h2>
                        <p class="text-gray-500 dark:text-gray-100">{{$school->adress}}</p>
                    </div>
                @endforeach

                <div>
                    {{ $schools->links() }}
                </div>

            </div>
        </div>
    </div>

</x-app-layout>


