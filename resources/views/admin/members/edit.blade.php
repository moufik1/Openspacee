<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            
            <div class="m-2 p-2 bg-gray-200 rounded-md shadow-2xl">
                <div class="space-y-8 divide-y divide-gray-200 mt-10">
                    <form method="POST" action="{{route('admin.members.update', $user->id)}}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                      <div class="sm:col-span-6">
                        <label for="name" class="block text-sm font-medium text-gray-700"> Name </label>
                        <div class="mt-1">
                          <input type="text" id="name" name="name" value="{{$user->name}}" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('name') border-red-400 @enderror" />
                        </div>
                        @error('name')
                        <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="sm:col-span-6">
                        <label for="email" class="block text-sm font-medium text-gray-700"> Email </label>
                        <div>
                          <input type="text" id="email" name="email" value="{{$user->email}}" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('email') border-red-400 @enderror" />  
                        </div>
                        @error('email')
                        <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="sm:col-span-6">
                        <label for="password" class="block text-sm font-medium text-gray-700"> Password </label>
                        <div>
                          <input type="password" id="password" name="password" value="{{$user->password}}" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('password') border-red-400 @enderror" />  
                        </div>
                        @error('password')
                        <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="sm:col-span-6 pt-5">
                        <label for="telefone" class="block text-sm font-medium text-gray-700">Telephone</label>
                        <div class="mt-1">
                            <input type="number" id="telephone" name="telephone" value="{{$user->telephone}}" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 " />
                        </div>
                        @error('telephone')
                        <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mt-1">
                        <div class="sm:col-span-6 pt-5">
                          <label for="abonnement" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Abonnement</label>
                          <div class="mt-1">
                            <select id="categories" name="categories[]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('categories') border-red-400 @enderror">
                              @foreach ($categories as $categorie)
                                  <option value="{{$categorie->id}}" @selected($user->categories->contains($categorie))>{{$categorie->name}}</option>
                              @endforeach
                            </select>
                          </div>
                          @error('categories')
                        <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                    </div>
                      <div class="mt-6 p-4">
                      <button type="submit" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Modifier</button>
                      </div>
                    </form>
                  </div>
                  
            </div>
            <div class="flex m-2 p-2">
                <a href="{{route('admin.members.index')}}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white text-white">Back</a>
            </div>
 

        </div>
    </div>
</x-admin-layout>
