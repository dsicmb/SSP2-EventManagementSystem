<form class="bg-white p-6 rounded" wire:submit.prevent="createReservation">
    <div class="space-y-12">

        <div class="border-b border-gray-900/10 pb-12">
            <h2 class="text-base font-semibold leading-7 text-gray-900">Customer Information</h2>
            <p class="mt-1 text-sm leading-6 text-gray-600">
                Please take a moment to provide your personal information to
                complete the reservation
            </p>

            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-3">
                    <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">
                        First name
                    </label>
                    <div class="mt-2">
                        <input type="text" wire:model="reservation.first_name" name="first-name" id="first-name"
                               autocomplete="given-name"
                               class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        @error('reservation.first_name')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="sm:col-span-3">
                    <label for="last-name" class="block text-sm font-medium leading-6 text-gray-900">
                        Last name
                    </label>
                    <div class="mt-2">
                        <input type="text" wire:model="reservation.last_name" name="last-name" id="last-name"
                               autocomplete="family-name"
                               class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        @error('reservation.last_name')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="sm:col-span-3">
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">
                        Email address
                    </label>
                    <div class="mt-2">
                        <input id="email" wire:model="reservation.email" name="email" type="email"
                               autocomplete="email"
                               class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        @error('reservation.email')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="sm:col-span-3">
                    <label for="phone" class="block text-sm font-medium leading-6 text-gray-900">
                        Phone
                    </label>
                    <div class="mt-2">
                        <input id="phone" wire:model="reservation.phone" name="phone" type="type"
                               autocomplete="phone"
                               class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        @error('reservation.phone')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>


                <div class="sm:col-span-4">
                    <label for="street-address" class="block text-sm font-medium leading-6 text-gray-900">
                        Street address
                    </label>
                    <div class="mt-2">
                        <textarea wire:model="reservation.address" name="street-address" id="street-address" autocomplete="street-address"
                                  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                        @error('reservation.address')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="sm:col-span-2 ">
                    <label for="city" class="block text-sm font-medium leading-6 text-gray-900">
                        Country
                    </label>
                    <div class="mt-2">
                    <x-input-country id="country" type="text"
                                     class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                    wire:model="reservation.country" />
                    <x-input-error for="country" class="mt-2" />
                    @error('reservation.country')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                    </div>
                </div>

                <div class="sm:col-span-2 sm:col-start-1">
                    <label for="city" class="block text-sm font-medium leading-6 text-gray-900">
                        City
                    </label>
                    <div class="mt-2">
                        <input type="text" wire:model="reservation.city" name="city" id="city"
                               autocomplete="address-level2"
                               class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        @error('reservation.city')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="sm:col-span-2">
                    <label for="region" class="block text-sm font-medium leading-6 text-gray-900">
                        State / Province
                    </label>
                    <div class="mt-2">
                        <input type="text" wire:model="reservation.state" name="region" id="region"
                               autocomplete="address-level1"
                               class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        @error('reservation.state')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="sm:col-span-2">
                    <label for="postal-code" class="block text-sm font-medium leading-6 text-gray-900">
                        ZIP / Postal code
                    </label>
                    <div class="mt-2">
                        <input type="text" wire:model="reservation.zip_code" name="postal-code" id="postal-code"
                               autocomplete="postal-code"
                               class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        @error('reservation.zip_code')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        <div class="border-b border-gray-900/10 pb-12">
            <h2 class="text-base font-semibold leading-7 text-gray-900">Payment Information</h2>
            <p class="mt-1 text-sm leading-6 text-gray-600">Please provide your payment information</p>

            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-3">
                    <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">
                        Card Number
                    </label>
                    <div class="mt-2">
                        <input type="text"wire:model="reservation.card_number" name="first-name" id="first-name"
                               autocomplete="given-name"
                               class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        @error('reservation.card_number')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-6 flex items-center justify-end gap-x-6">
        <button type="button" onclick="confirmCancellation()" class="text-sm font-semibold leading-6 text-white bg-red-500 px-4 py-1 rounded-md hover:bg-red-700">
            CANCEL
        </button>

        <x-button type="submit">
            Reserve
        </x-button>
    </div>

    <script>
        function confirmCancellation() {
            if (confirm("Are you sure you want to cancel?")) {
                // User confirmed cancellation, go back to the previous page
                history.back();
            }
        }
    </script>





</form>