 <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Plan your beautiful event at {{ $event->name }}
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                @livewire('event-reservation-form', [
                'event' => $event,
                ])
            </div>
        </div>
    </x-app-layout>