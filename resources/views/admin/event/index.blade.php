<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Events') }}
            </h2>

            <a href="{{ route('admin.events.create') }}" class="ml-3">
                <x-button>Create A New Event</x-button>
            </a>
        </div>
    </x-slot>

    <div class="py-10">
        <div class="max-w-9xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-10">
                <x-table>
                    <x-slot name="head" >
                        <x-th>Event</x-th>
                        <x-th>Image</x-th>
                        <x-th>Category</x-th>
                        <x-th>City</x-th>
                        <x-th>Date</x-th>
                        <x-th>Price</x-th>
                        <x-th>Phone</x-th>
                        <x-th>Website</x-th>
                        <x-th>Actions</x-th>
                    </x-slot>
                    <x-slot name="body" >
                        <div class="mt-4">
                            @foreach ( $events as $event)
                                <x-tr>
                                    <x-td>{{ $event->name }}</x-td>
                                    <x-td>
                                        @if ($event->hasMedia('image'))
                                            <img src="{{ $event->getFirstMediaUrl('image') }}" alt="{{ $event->name }}">
                                        @else
                                            ...
                                        @endif
                                    </x-td>
                                    <x-td>{{ $event->category->name }}</x-td>
                                    <x-td>{{ $event->city }}</x-td>
                                    <x-td>{{ $event->date }}</x-td>
                                    <x-td>{{ $event->price }}</x-td>
                                    <x-td>{{ $event->phone }}</x-td>
                                    <x-td>
                                        <a href="{{ $event->website }}" target="_blank">
                                            Website
                                        </a>
                                    </x-td>
                                    <x-td class="flex gap-3">
                                        <a href="{{ route('admin.events.edit', $event->id) }}"
                                           class="bg-white hover:bg-blue-500 hover:text-white border border-blue-500 text-blue-500 font-bold py-2 px-4 rounded-md">
                                            Edit
                                        </a>
                                        <form action="{{ route('admin.events.destroy', $event->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                    onclick="return confirm('Are you sure that you want to delete {{  $event->name }} ?')"
                                                    class="bg-white hover:bg-red-500 hover:text-white border border-red-500 text-red-500 font-bold py-2 px-4 rounded-md">
                                                Delete
                                            </button>
                                        </form>
                                    </x-td>

                                </x-tr>
                            @endforeach
                        </div>
                    </x-slot>
                </x-table>

            </div>
        </div>
    </div>
</x-app-layout>

