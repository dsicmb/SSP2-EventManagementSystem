<div class="bg-white shadow-md border border-gray-200 rounded-lg max-w-sm">
        <a href="{{ route('event.show', $event->id) }}">
            @if ($event->hasMedia('image'))
                <img class="rounded-t-lg" src="{{ $event->getFirstMediaUrl('image', 'thumb') }}" alt="">
            @else
                <img class="rounded-t-lg" src="{{ asset('/logo/homeLogo.jpg') }}" width="350px" alt="">
            @endif
            </a>
        <div class="p-5">
            <a href="#">
                <h5 class="text-gray-900 font-bold text-2xl tracking-tight mb-2">
                    {{ $event->name }}</h5>
            </a>
            <p class="font-bold text-gray-700 mb-3 dark:text-gray-400">
                {{ $event->city }} , {{ $event->country }}
            </p>

            <br>

            <p class="font-normal text-gray-700 mb-2 dark:text-gray-300">
                {{ $event->date }}
            </p>
            <p class="font-normal text-gray-700 mb-2 dark:text-gray-300">
                {{ $event->check_in }} - {{ $event->check_out }}
            </p>

            <br><br>

            <a href="{{ route('event.show', $event->id ) }} ">
                <x-button> View
                    <svg class="-mr-1 ml-2 h-4 w-4" fill="currentColor" viewBox="0 0 20 20"
                         xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                              d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                              clip-rule="evenodd"></path>
                    </svg>
               </x-button>
            </a>
        </div>
    </div>

