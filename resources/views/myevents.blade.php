<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Events') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="container mx-auto">
                <div class = "grid grid-cols-4 gap-4">
                    @forelse ($events as $event)
                        @livewire('event-card',[
                        'event' => $event,
                        ])
                    @empty
                        <div class="flex flex-col justify-center items-center mt-10">
                            <img src="/logo/noEvents.png" width="250px" alt="No Events" class="my-4 max-w-half">
                            <p class="text-center text-m mt-4">
                                Sorry, you did not reserve any events ...
                            </p>
                        </div>
                    @endforelse

                </div>
            </div>
        </div>
    </div>
</x-app-layout>