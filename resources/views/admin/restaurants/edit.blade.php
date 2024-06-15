<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex m-2 p-2">
            <a href="{{ route('admin.restaurants.create') }}"
               class="px-4 py-2 bg-purple-400 hover:bg-purple-700 rounded-lg text-white">Category Index</a>
            </div>
            <div class="m-2 p-2 bg-purple-100 rounded">
            <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                <form method="POST" action="{{ route('admin.restaurants.update', $restaurants->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="sm:col-span-6">
                        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                        <div class="mt-1">
                            <input type="text" id="name" name="name" value="{{ $restaurants->name }}"
                                   class="block w-full sm:text-sm sm:leading-5 @error('name') border-red-400 @enderror" />
                        </div>
                        @error('name')
                        <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="sm:col-span-6">
                        <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                        <div>
                            <img class="w-32 h-32" src="{{ Storage::url($category->image) }}">
                        </div>
                        <div class="mt-1">
                            <input type="file" id="image" name="image" class="block w-full sm:text-sm sm:leading-5 @error('image') border-red-400 @enderror" />
                        </div>
                        @error('image')
                        <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                    </div>



                    <div class="sm:col-span-6 pt-5">
                        <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                        <div class="mt-1">
                            <textarea id="description" rows="3" name="description" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm @error('description') border-red-400 @enderror">
                                {{ $category->description }}
                            </textarea>
                        </div>
                        @error('description')
                        <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mt-6 p-4">
                        <button type="submit" class="px-4 py-2 bg-purple-400 hover:bg-purple-700 rounded-lg text-white">Update</button>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
</x-admin-layout>