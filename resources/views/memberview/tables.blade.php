<x-loginpage-layout>

    <div class="container mx-auto py-12">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
            @foreach ($tables as $table)
                
                <div class="bg-black p-4 text-white rounded-lg shadow-md">
                    <img src="{{ $table['image'] }}" alt="{{ $table['name'] }}" class="w-full h-40 object-cover mb-4 rounded-lg">
                    <h3 class="text-lg font-semibold mb-2">{{ $table['name'] }}</h3>
                    <p class="mb-2">Capacity: {{ $table['guest_number'] }} people</p>
                    <p class="mb-4">Location: {{ $table['location'] }}</p>
                    <a href="{{ route('reservation.create',['table' => $table['id']]) }}" class="bg-transparent hover:bg-yellow-300 text-yellow-300 hover:text-black rounded shadow hover:shadow-lg py-2 px-4 border border-yellow-300 hover:border-transparent">Reserve</a>
                </div>
               
            @endforeach
        </div>
    </div>
    
</x-loginpage-layout>