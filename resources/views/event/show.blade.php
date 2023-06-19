<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $event->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">

            @if (session('message'))
                <script>
                    Swal.fire(
                        'Thank you!',
                        '{{ session('message') }}',
                        'success'
                    );
                </script>
            @endif

            <div class="relative">
                <div class="mx-auto max-w-7xl bg-white">
                    <div class="relative z-10 pt-14 lg:w-full lg:max-w-2xl">
                        <svg class="absolute inset-y-0 right-8 hidden h-full w-80 translate-x-1/2 transform fill-white lg:block"
                             viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
                            <polygon points="0,0 90,0 50,100 0,100" />
                        </svg>
                        <div class="relative px-6 py-32 sm:py-40 lg:px-8 lg:py-56 lg:pr-0">
                            <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-xl">
                                <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">
                                    <span class="block xl:inline">{{ $event->name }}</span>
                                </h1>
                                <p class="mt-6 text-lg leading-8 text-gray-600">
                                    {{ $event->description }}
                                </p>
                                <p class="mt-6 text-lg leading-8 text-gray-600">
                                    View Count - {{ $event->view_count }}
                                </p>
                                <p class="mt-6 text-lg leading-8 text-gray-600">
                                    Reserved Count - {{ $event->subscription_count }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
                    <img class="aspect-[3/2] object-cover lg:aspect-auto lg:h-full lg:w-full"
                         src="{{ $event->getFirstMediaUrl('image') }}"
                         alt="">
                </div>
            </div>


            <div class="overflow-hidden bg-white">
                <div class="px-4 py-6 sm:px-6">
                    <h3 class="text-lg font-medium leading-7 text-gray-900">Information</h3>
                    <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">Event details</p>
                </div>
                <div class="border-t border-gray-100">
                    <dl class="divide-y divide-gray-100">
                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-900">Name</dt>
                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $event->name }}</dd>
                        </div>
                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-900">Location</dt>
                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                {{ $event->address }}, {{ $event->city }}, {{ $event->zip_code }}, {{ $event->country }}
                            </dd>
                        </div>
                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-900">Start / Finish</dt>
                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                {{ $event->check_in }} - {{ $event->check_out }}
                            </dd>
                        </div>
                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-900">Category</dt>
                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                {{ $event->category->name }}
                            </dd>
                        </div>
                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-900">Tags</dt>
                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                @foreach ($event->categories as $category)
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                        {{ $category->name }}
                                    </span>
                                @endforeach
                            </dd>
                        </div>
                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-900">Description</dt>
                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                {{ $event->description }}
                            </dd>
                        </div>
                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-900">Price</dt>
                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                {{ $event->price }}
                            </dd>
                        </div>
                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-900">Reserve</dt>
                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                <a href="{{  route('event.reservation', $event->id) }}">
                                    <x-button>Click here to reserve </x-button>
                                </a>
                            </dd>
                        </div>
                    </dl>
                </div>
            </div>

            <div class="bg-white">
                <div class="px-6 pt-6">
                    @livewire('event-reviews',[
                        'event' => $event,
                    ])

                    @auth
                        @livewire('create-event-review',[
                        'event' => $event,
                        ])
                    @endauth

                    @guest
                        <div class="my-6">
                            <a href="{{ route('login') }}">
                                <x-button>
                                    Please Login to post a review
                                </x-button>
                            </a>
                        </div>
                    @endguest
                    <div class="py-1"></div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>