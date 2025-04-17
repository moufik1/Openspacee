<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    @if (session('success'))
    <div id="flash-message" class="bg-green-500 text-white max-w-2xl px-2 py-2 rounded-md">
        {{ session('success') }}
    </div>
    @endif
    @if (session('danger'))
    <div id="flash-message" class="bg-red-500 text-white max-w-2xl px-2 py-2 rounded-md">
        {{ session('danger') }}
    </div>
    @endif

    <div class="flex items-center justify-between mb-4">
        <h2 class="text-2xl font-semibold">Manage Events</h2>
        <a href="{{ route('admin.events.create') }}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Create Event</a>
    </div>

    @if ($events->isEmpty())
        <p>No events found.</p>
    @else
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th class="py-6 px-4 border-b">Name</th>
                        <th class="py-6 px-4 border-b">Date d'Evennement</th>
                        <th class="py-6 px-4 border-b">Description</th>
                        <th class="py-6 px-4 border-b">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($events as $event)
                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $event->name }}</td>
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $event->event_date }}</td>
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $event->description }}</td>
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <a href="{{ route('admin.events.edit', $event->id) }}" class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-lg text-white">Edit</a>
                                <form action="{{ route('admin.events.destroy', $event->id) }}" method="POST" class="inline-block px-4 py-2 bg-red-500 hover:bg-red-700 rounded-lg text-white">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</x-admin-layout>