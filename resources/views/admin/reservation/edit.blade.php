<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Reservation') }}
        </h2>
    </x-slot>

    <div class="py-0">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="m-4 p-4 bg-gray-200 rounded-md shadow-2xl">
                <div class="space-y-8 divide-y divide-gray-200 mt-10">
                    <form method="POST" action="{{ route('admin.reservations.update', $reservation->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="sm:col-span-6">
                            <label for="member_id" class="block text-sm font-medium text-gray-700">Member</label>
                            <div class="mt-1">
                                <select id="member_id" name="member_id" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('Member') border-red-400 @enderror">
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}" {{ $reservation->member_id == $user->id ? 'selected' : '' }}>
                                            {{ $user->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            @error('member_id')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6 pt-5">
                            <label for="table_id" class="block text-sm font-medium text-gray-700">Table</label>
                            <div class="mt-1">
                                <select id="table_id" name="table_id" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('Table') border-red-400 @enderror">
                                    @foreach ($tables as $table)
                                        <option value="{{ $table->id }}" {{ $reservation->table_id == $table->id ? 'selected' : '' }}>
                                            {{ $table->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            @error('table_id')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6 pt-5">
                            <label for="reservation_date" class="block text-sm font-medium text-gray-700">Reservation Date</label>
                            <div class="mt-1">
                                <input type="datetime-local" id="reservation_date" name="reservation_date" value="{{ $reservation->reservation_date }}" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>
                            @error('reservation_date')
                             <p class="text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="sm:col-span-6 pt-5">
                            <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                            <div class="mt-1">
                              <select id="status" name="status" class="form-multiselect bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600">
                                    @foreach (\App\Enums\TableStatus::cases() as $status)
                                    <option value="{{$status}}" @selected($table->status->value == $status->value)>{{$status->value}}</option>
                                    @endforeach
                              </select>
                            </div>
                      </div>
                        <!-- Add other fields and form controls here -->
                        
                            <div class="mt-6 p-4">
                                <button type="submit" class="px-4 py-2 bg-indigo-500 hover:bg-green-700 rounded-lg text-white">Modifier</button>
                            </div> <div class="flex justify-end m-2 p-2">
                    <a href="{{route('admin.reservations.index')}}" class="px-4 py-2 bg-indigo-500 hover:bg-red-700 rounded-lg text-white text-white">Back</a>
                  </div>
                    </form>
                </div>
          </div>
      </div>
  </div>  
</div>
        </div>
    </div>
</x-admin-layout>
