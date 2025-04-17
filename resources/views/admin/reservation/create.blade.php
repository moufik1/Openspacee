{{-- <x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="m-2 p-2 bg-gray-200">
                <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                    <form enctype="multipart/form-data">
                      <div class="sm:col-span-6">
                        <label for="title" class="block text-sm font-medium text-gray-700"> Name </label>
                        <div class="mt-1">
                          <input type="text" id="title"  name="title" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                        </div>
                      </div>
                      <div class="sm:col-span-6">
                        <label for="title" class="block text-sm font-medium text-gray-700"> Image </label>
                        <div class="mt-1">
                          <input type="file" id="image" name="image" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                        </div>
                      </div>
                      <div class="sm:col-span-6 pt-5">
                        <label for="body" class="block text-sm font-medium text-gray-700">Description</label>
                        <div class="mt-1">
                          <textarea id="body" rows="3" class="shadow-sm focus:ring-indigo-500 appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"></textarea>
                        </div>
                      </div>
                      <div class="mt-6 p-4">
                      <button type="submit" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white ">Create</button>
                      </div>
                    </form>
                  </div>
                  
            </div>
            <div class="flex m-2 p-2">
                <a href="{{route('admin.reservations.index')}}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white text-white">Back</a>
            </div>
 

        </div>
    </div>
</x-admin-layout> --}}

<x-admin-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Dashboard') }}
      </h2>
  </x-slot>
  <div class="py-0">
      <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
          <div class="m-4 p-4 bg-gray-200 rounded-md shadow-2xl">
              <div class="space-y-8 divide-y divide-gray-200 mt-10">
                  <form method="POST" action="{{ route('admin.reservations.store') }}" enctype="multipart/form-data">
                      @csrf
                      <div class="sm:col-span-6">
                          <label for="user_id" class="block text-sm font-medium text-gray-700">Member</label>
                          <div class="mt-1">
                              <select id="user_id" name="user_id" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('user_id') border-red-400 @enderror">
                                  @foreach ($users as $user)
                                  <option value="{{ $user->id }}">{{ $user->name }}</option>
                                  @endforeach
                              </select>
                          </div>
                          @error('user_id')
                          <div class="text-sm text-red-400">{{ $message }}</div>
                          @enderror
                      </div>
                      <div class="sm:col-span-6 pt-5">
                          <label for="table_id" class="block text-sm font-medium text-gray-700">Table</label>
                          <div class="mt-1">
                              <select id="table_id" name="table_id" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('Table') border-red-400 @enderror">
                                  @foreach ($tables as $table)
                                  <option value="{{ $table->id }}">{{ $table->name }}</option>
                                  @endforeach
                              </select>
                          </div>
                          @error('table_id')
                          <div class="text-sm text-red-400">{{ $message }}</div>
                          @enderror
                      </div>
                      <div class="sm:col-span-6 pt-5">
                          <label for="reservation_date" class="block text-sm font-medium text-gray-700">Date de Reservation</label>
                          <div class="mt-1">
                              <input type="datetime-local" id="reservation_date" name="reservation_date" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('Date de reservation') border-red-400 @enderror" />
                          </div>
                          @error('reservation_date')
                          <div class="text-sm text-red-400">{{ $message }}</div>
                          @enderror
                      </div>
                      <div class="sm:col-span-6 pt-5">
                          <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                          <div class="mt-1">
                              <select id="status" name="status" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('Status du Table') border-red-400 @enderror">
                                  @foreach (\App\Enums\TableStatus::cases() as $status)
                                  <option value="{{ $status }}">{{ $status }}</option>
                                  @endforeach
                              </select>
                          </div>
                          @error('status')
                          <div class="text-sm text-red-400">{{ $message }}</div>
                          @enderror
                      </div>
                      <div class="mt-6 p-4">
                          <button type="submit" class="px-4 py-2 bg-indigo-500 hover:bg-green-700 rounded-lg text-white shadow-xl">Create</button>
                      </div>
                  </form>
                  <div class="flex justify-end m-2 p-2">
                      <a href="{{ route('admin.reservations.index') }}" class="px-4 py-2 bg-indigo-500 hover:bg-red-700 rounded-lg text-white">Back</a>
                  </div>
              </div>
          </div>
      </div>
  </div>
</x-admin-layout>

