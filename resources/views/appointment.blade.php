<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Rendez-Vous') }}
        </h2>
    </x-slot>

    <div class="mt-8 max-w-2xl mx-auto p-6 bg-white rounded shadow">
        

        @if(session('success'))
            <div class="mb-4 p-3 bg-green-100 text-green-700 rounded">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('appointments.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label for="date" class="block text-sm font-medium text-gray-700">Date et Heure</label>

                <input type="datetime-local" id="date" name="date" min="{{ now()->format('Y-m-d\TH:i') }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required>
                @error('date')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>            
    
            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea id="description" name="description" rows="4" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required></textarea>
                @error('description')
                <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>


            <x-primary-button>
                {{ __('Enregistrer') }}
            </x-primary-button>
        </form>
    </div>
</x-app-layout>