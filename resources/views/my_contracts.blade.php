<!-- resources/views/my_contracts.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Contracts / Documents') }}
        </h2>
    </x-slot>

    <div class="container mx-auto p-6">
        <!-- Pets Information -->
        <div class="bg-white shadow-md rounded-lg p-6 mb-6">
            <h2 class="text-xl font-semibold mb-2">My Pets</h2>
            @if($pets->isEmpty())
                <p class="text-gray-500">You have no pets listed.</p>
            @else
                <ul class="list-disc pl-5">
                    @foreach($pets as $pet)
                        <li class="mb-2">
                            <strong>{{ $pet->name }}</strong> - {{ $pet->type }}, {{ $pet->breed }} ({{ $pet->gender }})
                            <br>
                            Chip: {{ $pet->electronic_chip }} | Birthdate: {{ $pet->date_of_birth->format('d M Y') }}
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>

        <!-- Contract Information -->
        <div class="bg-white shadow-md rounded-lg p-6">
            <h2 class="text-xl font-semibold mb-2">Contract Information</h2>
            @if($contracts->isEmpty())
                <p class="text-gray-500">No contract information available.</p>
            @else
                <table class="min-w-full divide-y divide-gray-200">
                    <thead>
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Contract Number</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Plan</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Start Date</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Monthly Contribution</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Balance</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($contracts as $contract)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $contract->contract_number }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ ucfirst($contract->contract_status) }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $contract->plan }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $contract->start_date->format('d M Y') }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ number_format($contract->monthly_contribution, 2) }} €</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ number_format($contract->balance, 2) }} €</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
</x-app-layout>
