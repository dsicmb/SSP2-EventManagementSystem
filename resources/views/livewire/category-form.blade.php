<div>
    <form wire:submit.prevent="submit" class="p-5">
        <div class="grid grid-cols-6 gap-4">

            <div class="col-span-6">
                <x-label for="name" value="{{ __('Category Name') }}" />
                <x-input id="name" type="text" class="mt-1 block w-full" wire:model="category.name" />
                <x-input-error for="name" class="mt-2" />
                @error('category.name')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="col-span-6">
                <x-label for="description" value="{{ __('Description') }}" />
                <x-textarea id="description" type="text" class="mt-1 block w-full" wire:model="category.description" />
                <x-input-error for="description" class="mt-2" />
                @error('category.description')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="col-span-6">
                <x-button>
                    {{ __('Save') }} the New Category
                </x-button>
            </div>
        </div>
    </form>
</div>