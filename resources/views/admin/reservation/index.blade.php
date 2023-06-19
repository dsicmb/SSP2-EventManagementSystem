<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Reservations') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <x-table>
                    <x-slot name="head">
                        <x-th >Event</x-th>
                        <x-th>First Name</x-th>
                        <x-th>Last Name</x-th>
                        <x-th>Phone</x-th>
                        <x-th>Email</x-th>
                        <x-th>City</x-th>
                        <x-th>Website</x-th>
                        <x-th>Created At</x-th>
                    </x-slot>
                    <x-slot name="body">
                        @foreach ($reservations as $reservation)
                            <x-tr>
                                <x-td class="px-6 py-4 font-medium text-gray-900">
                                    <a href="{{ route('event.show', $reservation->event->id) }}">{{ $reservation->event->name }}</a></x-td>
                                <x-td>{{ $reservation->first_name }}</x-td>
                                <x-td>{{ $reservation->last_name }}</x-td>
                                <x-td>{{ $reservation->phone }}</x-td>
                                <x-td>{{ $reservation->email }}</x-td>
                                <x-td>{{ $reservation->city }}</x-td>
                                <x-td>
                                    <a href="{{ $reservation->website }}" target="_blank">
                                        Website
                                    </a>
                                </x-td>
                                <x-td>{{ $reservation->created_at->format('d/m/Y h:ia') }}</x-td>
                                <x-td class="flex gap-3">
                                </x-td>
                            </x-tr>
                        @endforeach
                    </x-slot>
                </x-table>

            </div>
        </div>
    </div>
</x-app-layout>
