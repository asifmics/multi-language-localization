<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex flex-row justify-between">
                        <h2 class="text-black text-xl">Those are my posts</h2>
                        <button class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600 float-end mb-2">
                            pdf download
                        </button>
                    </div>
                    <div class="w-full mx-auto bg-white shadow-md rounded-lg overflow-hidden">
                        <table class="w-full border-collapse border border-gray-300">
                            <thead class="bg-gray-200 text-gray-600 uppercase text-sm">
                            <tr>
                                <th class="border border-gray-300 px-4 py-2">ID</th>
                                <th class="border border-gray-300 px-4 py-2">Title</th>
                                <th class="border border-gray-300 px-4 py-2">Description</th>
                                <th class="border border-gray-300 px-4 py-2">Image</th>
                                <th class="border border-gray-300 px-4 py-2">Actions</th>
                            </tr>
                            </thead>
                            <tbody class="text-gray-700">
                                @foreach($user->posts as $post)
                                    <tr class="bg-white hover:bg-gray-100">
                                        <td class="border border-gray-300 px-4 py-2">{{ $loop->iteration  }}</td>
                                        <td class="border border-gray-300 px-4 py-2">{{ substr($post->title,1, 30) ?? '' }}</td>
                                        <td class="border border-gray-300 px-4 py-2">{{ substr($post->description,1, 20).'..' ?? ''  }}</td>
                                        <td class="border border-gray-300 px-4 py-2">
                                            <img src="{{$post->image}}" class="object-cover w-10" alt="image">
                                        </td>
                                        <td class="border border-gray-300 px-4 py-2">

                                            <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">
                                                Delete
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
