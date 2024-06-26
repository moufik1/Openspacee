<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-6xl mx-auto sm:px-4 lg:px-0">
            <div class="flex justify-end m-2 p-2">
                <a href="{{route('admin.members.create')}}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">New Member</a>

            </div>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class=" w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class=" text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Email
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Telefone
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Password
                            </th>
                            <th cope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                             <tr class=" bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{$user->name}}
                                </td>
                                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{$user->email}}
                                </td>
                                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{$user->telephone}}
                                </td>
                                <td scope="row" class="px-4 py-4 font-s text-gray-900 whitespace-nowrap dark:text-white">
                                    {{$user->password}}
                                </td>
                                <td scope="row" class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <div class="flex space-x-2">
                                        <a href="{{route('admin.members.edit',$user->id)}}" class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-lg text-white">Edit</a>
                                         <form class="px-4 py-2 bg-red-500 hover:bg-red-700 rounded-lg text-white" 
                                            method="POST" 
                                            action="{{route('admin.members.destroy',['member' => $user->id])}}"
                                            onsubmit="return confirm('are you sure!!!');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">Delete</button>
                                        </form>
                                    </div>
                                </td>
                             </tr>
                        @endforeach
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>
