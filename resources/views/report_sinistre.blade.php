<!-- resources/views/report_sinistre.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Report a Sinistre') }}
        </h2>
    </x-slot>

    <div class="container mx-auto p-6">
        <div class="bg-white shadow-md rounded-lg p-6">
            <form method="POST" action="{{ route('report.sinistre.store') }}">
                @csrf

                <div class="mb-4">
                    <label for="contract_number" class="block text-sm font-medium text-gray-700">
                        Contract Number
                    </label>
                    <input type="text" id="contract_number" name="contract_number" value="{{ old('contract_number') }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm @error('contract_number') @enderror" required>
                    @error('contract_number')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="animal_name" class="block text-sm font-medium text-gray-700">
                        Animal Name
                    </label>
                    <input type="text" id="animal_name" name="animal_name" value="{{ old('animal_name') }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm @error('animal_name') @enderror" required>
                    @error('animal_name')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="event_date" class="block text-sm font-medium text-gray-700">
                        Event Date
                    </label>
                    <input type="date" id="event_date" name="event_date" value="{{ old('event_date') }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm @error('event_date') @enderror" required>
                    @error('event_date')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="description" class="block text-sm font-medium text-gray-700">
                        Description
                    </label>
                    <textarea id="description" name="description" rows="4" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm @error('description') @enderror" required>{{ old('description') }}</textarea>
                    @error('description')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center justify-end">
                    <x-primary-button>
                        {{ __('Submit') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
