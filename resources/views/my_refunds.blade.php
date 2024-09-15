<!-- resources/views/my_refunds.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Refunds') }}
        </h2>
    </x-slot>

    <div class="container mx-auto p-6">
        <div class="bg-white shadow-md rounded-lg p-6">
            @if($refunds->isEmpty())
                <p class="text-gray-500">No refunds available.</p>
            @else
                <table class="min-w-full divide-y divide-gray-200">
                    <thead>
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Claim No.</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Declaration Date</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Event Date</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Animal Name</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Reimbursement</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($refunds as $refund)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $refund->claim_no }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $refund->declaration_date->format('d M Y') }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $refund->event_date->format('d M Y') }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $refund->animal_name }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ ucfirst($refund->status) }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ number_format($refund->reimbursement, 2) }} €</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
</x-app-layout>
