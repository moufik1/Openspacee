<x-loginpage-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Make Reservation') }}
        </h2>
    </x-slot>

    {{-- <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-black overflow-hidden shadow-xl sm:rounded-lg p-6">
                    <a class="text-3xl font-bold leading-none px-12" href="/">
                        <img src="{{ asset('build/assets/Logo_open-space.png') }}" alt="Logo_open-space.png">
                    </a> 
                <form action="{{ auth()->check() ? route('reservation.store') : route('login')}}" method="POST">
                    @csrf
                
                    <div class="mb-4">
                        <label for="table_id" class="block text-gray-100 text-sm font-bold mb-2">Select a Table:</label>
                        <select id="table_id" name="table_id" class="border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300">
                            @foreach ($tables as $table)
                                <option value="{{ $table->id }}">{{ $table->name }}</option>
                            @endforeach
                        </select>
                        @error('table_id')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                
                    <div class="mb-4">
                        <label for="reservation_date" class="block text-gray-100 text-sm font-bold mb-2">Reservation Date:</label>
                        <input type="datetime-local" id="reservation_date" name="reservation_date" class="border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300">
                        @error('reservation_date')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex justify-end">
                        <button type="submit" class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded">
                            {{ auth()->check() ? 'Make Reservation' : 'Login to Reserve' }}
                        </button>
                    </div>
                </form>
                
        
            </div>
        </div>
    </div> --}}

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-black overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h1 class="text-3xl font-bold text-center text-white mb-8">Reserver votre table</h1> 
                <form action="{{ auth()->check() ? route('reservations.store') : route('login')}}" method="POST">
                    @csrf
                
                    <div class="mb-4">
                        <label for="table_id" class="block text-gray-100 text-sm font-bold mb-2">Select a Table:</label>
                        <select id="table_id" name="table_id" class="border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300">
                            @foreach ($tables as $table)
                                <option value="{{ $table->id }}">{{ $table->name }}</option>
                            @endforeach
                        </select>
                        @error('table_id')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                
                    <div class="mb-4">
                        <label for="reservation_date" class="block text-gray-100 text-sm font-bold mb-2">Reservation Date:</label>
                        <input type="datetime-local" id="reservation_date" name="reservation_date" class="border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300">
                        @error('reservation_date')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex justify-end">
                        <button type="submit" class="bg-transparent hover:bg-yellow-300 text-yellow-300 hover:text-black rounded shadow hover:shadow-lg py-2 px-4 border border-yellow-300 hover:border-transparent">
                            {{ auth()->check() ? 'Make Reservation' : 'Login to Reserve' }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</x-loginpage-layout>