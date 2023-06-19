<div>
    <form wire:submit.prevent="submit" class="p-6">
        <div class="grid grid-cols-6 gap-4">

            <div class="col-span-3">
                <x-label for="category_id" value="{{__('Category') }}" />
                <select id="category_id" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full"
                        wire:model="event.category_id">
                    <option value="">Select a category</option>
                    @foreach( $categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                <x-input-error for="event.category_id" class="mt-2" />
            </div>

            <div class="col-span-3">
                <x-label for="sub_categories" value="{{__('Sub Categories') }}" />
                <select id="sub_categories" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full"
                        wire:model="sub_categories" multiple>
                    @foreach( $categories as $category)
                        <option value="{{ $category->id }}"
                                {{ in_array($category->id, $event->categories->pluck('id')->toArray()) ? 'selected' :'' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
                <x-input-error for="sub_categories" class="mt-2" />
            </div>

            <div class="col-span-6">
                <x-label for="image" value="{{__('Image') }}" />
                <x-input id="image" type="file"
                         class="'inline-flex items-center px-4 py-2 bg-indigo-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150'"
                         wire:model="image" />
                <x-input-error for="image" class="mt-2" />
            </div>

            <div class="col-span-6">
                <x-label for="name" value="{{__('Name of the Event') }}" />
                <x-input id="name" type="text" class="mt-1 block w-full" wire:model="event.name" />
                <x-input-error for="name" class="mt-2" />
                @error('event.name')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="col-span-6">
                <x-label for="description" value="{{__('Description') }}" />
                <x-textarea id="description" type="text" class="mt-1 block w-full" wire:model="event.description" />
                <x-input-error for="description" class="mt-2" />
                @error('event.description')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="col-span-6">
                <x-label for="address" value="{{__('Address') }}" />
                <x-input id="address" type="text" class="mt-1 block w-full" wire:model="event.address" />
                <x-input-error for="address" class="mt-2" />
                @error('event.address')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="col-span-2">
                <x-label for="city" value="{{__('City') }}" />
                <x-input id="city" type="text" class="mt-1 block w-full" wire:model="event.city" />
                <x-input-error for="city" class="mt-2" />
                @error('event.city')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="col-span-2">
                <x-label for="zip_code" value="{{__('Postal / Zip Code') }}" />
                <x-input id="zip_code" type="text" class="mt-1 block w-full" wire:model="event.zip_code" />
                <x-input-error for="zip_code" class="mt-2" />
                @error('event.zip_code')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="col-span-2">
                <x-label for="country" value="{{__('Country') }}" />
                <x-input-country id="country" type="text" class="mt-1 block w-full" wire:model="event.country" />
                <x-input-error for="country" class="mt-2" />
                @error('event.country')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="col-span-3">
                <x-label for="latitude" value="{{__('Latitude') }}" />
                <x-input id="latitude" type="text" class="mt-1 block w-full" wire:model="event.latitude" />
                <x-input-error for="latitude" class="mt-2" />
                @error('event.latitude')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="col-span-3">
                <x-label for="longitude" value="{{__('Longitude') }}" />
                <x-input id="longitude" type="text" class="mt-1 block w-full" wire:model="event.longitude" />
                <x-input-error for="longitude" class="mt-2" />
                @error('event.longitude')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="col-span-2">
                <x-label for="phone" value="{{__('Phone') }}" />
                <x-input id="phone" type="text" class="mt-1 block w-full" wire:model="event.phone" />
                <x-input-error for="phone" class="mt-2" />
                @error('event.phone')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="col-span-2">
                <x-label for="email" value="{{__('Email') }}" />
                <x-input id="email" type="text" class="mt-1 block w-full" wire:model="event.email" />
                <x-input-error for="email" class="mt-2" />
                @error('event.email')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="col-span-2">
                <x-label for="website" value="{{__('Website') }}" />
                <x-input id="website" type="text" class="mt-1 block w-full" wire:model="event.website"/>
                <x-input-error for="website" class="mt-2" />
                @error('event.website')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="col-span-2">
                <x-label for="check_in" value="{{__('Start Time') }}" />
                <x-input id="check_in" type="text" class="mt-1 block w-full" wire:model="event.check_in"/>
                <x-input-error for="check_in" class="mt-2" />
                @error('event.check_in')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="col-span-2">
                <x-label for="check_out" value="{{__('Finish Time') }}" />
                <x-input id="check_out" type="text" class="mt-1 block w-full" wire:model="event.check_out"/>
                <x-input-error for="check_out" class="mt-2" />
                @error('event.check_out')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="col-span-2">
                <x-label for="date" value="{{__('Date') }}" />
                <x-input id="date" type="date" class="mt-1 block w-full" wire:model="event.date"/>
                <x-input-error for="date" class="mt-2" />
                @error('event.date')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror

            </div>
            <div class="col-span-2">
                <x-label for="price" value="{{__('Price') }}" />
                <x-input id="price" type="text" class="mt-1 block w-full" wire:model="event.price"/>
                <x-input-error for="price" class="mt-2" />
                @error('event.price')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="col-span-6">
                <x-button type="submit" >
                    {{ __('Save') }}
                </x-button>
            </div>
        </div>
    </form>
</div>