<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Räume') }}
        </h2>
    </x-slot>

    <div class="py-12 space-y-6">

        <!-- ✅ ERFOLGSMELDUNG -->
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session('success'))
                <div style="background-color: green; color: white; padding: 12px; border-radius: 8px;">
                    {{ session('success') }}
                </div>
            @endif
        </div>

        <!-- HEADER -->
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1>Raum erstellen</h1>
                    <p>Bitte Raumdaten eingeben</p>
                </div>
            </div>
        </div>

        <!-- FORM -->
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <form action="{{ route('rooms.store') }}" method="post">
                        @csrf

                        <div class="mb-4">
                            <x-input-label for="name">Name</x-input-label>
                            <x-text-input
                                value="{{ old('name','') }}"
                                name="name"
                                id="name"
                                class="block mt-1 w-full" />
                        </div>

                       <!-- <div class="mb-4">
                            <x-input-label for="school_id">School ID</x-input-label>
                            <x-text-input
                                value="{{ old('school_id','') }}"
                                name="school_id"
                                id="school_id"
                                type="number"
                                class="block mt-1 w-full" />
                        </div> -->

                        <div>
                            <x-input-label for="school_id">{{__('School')}}</x-input-label>
                            <select id="school_id" name="school_id" class="rounded">
                                @foreach($schools as $school)
                                    <option value="{{$school->id}}"
                                        @selected(old('school_id', '101') == $school->id)>
                                        {{$school->name}}
                                    </option>
                                @endforeach
                            </select>
                        </div>


                        <x-primary-button class="mt-3">
                            Speichern
                        </x-primary-button>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <!-- LISTE -->
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">

                @foreach($rooms as $room)
                    <div class="border p-3 rounded flex justify-between">
                        <h2 class="text-2xl">{{ $room->name }}</h2>

                        <div class="flex space-x-3">
                            <a href="">
                                <x-pencil class="text-indigo-600" />
                                <span class="sr-only">{{__('Edit room')}}</span>
                        ></div>

                        <form action="{{route('rooms.destroy',$room->id) }}" method="post">

                            <div class="flex">



                                @csrf
                                @method('DELETE')

                                <button>
                                    <x-trash class="text-red-600"/>
                                    <span class="sr-only">{{__('Remove room')}}</span>
                                </button>

                        </form>

                    </div>



                        <p>School ID: {{ $room->school_id }}</p>
                    </div>
                @endforeach

                {{ $rooms->links() }}

            </div>
        </div>
    </div>

</x-app-layout>
