<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Categories') }}
            </h2>

            <a href="{{ route('admin.category.create') }}" class="ml-3">
                <x-button>Add a new category</x-button>
            </a>
        </div>
    </x-slot>

    <div class="py-10">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-10">
                <x-table>
                    <x-slot name="head">
                        <x-th sortable>Category</x-th>
                        <x-th sortable>Description</x-th>
                        <x-th sortable>Actions</x-th>

                    </x-slot>
                    <x-slot name="body">
                        @foreach ($categories as $category)
                            <x-tr>
                                <x-td class="px-6 py-4 font-medium text-gray-900">{{ $category->name }}</x-td>
                                <x-td>{{ $category->description }}</x-td>
                                <x-td class="flex gap-3">
                                    <a href="{{ route('admin.category.edit', $category->id) }}"
                                       class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</a>

                                    @if ($category->events()->exists())
                                        <button disabled class="bg-gray-500 text-white font-bold py-2 px-4 rounded cursor-not-allowed">Delete</button>
                                        {{-- <p class="text-red-500">This category is referenced in events and cannot be deleted.</p> --}}
                                    @else
                                        <form action="{{ route('admin.category.destroy', $category->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" onclick="return confirm('Are you sure you want to delete the category {{ $category->name }}?')"
                                                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                                Delete
                                            </button>
                                        </form>
                                    @endif
                                </x-td>
                            </x-tr>
                        @endforeach
                    </x-slot>
                </x-table>

            </div>
        </div>
    </div>
</x-app-layout>
