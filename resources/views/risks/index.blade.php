<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Risk') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('risks.store') }}">
                        @csrf
                        <textarea
                            name="title"
                            placeholder="{{ __('What\'s the risk?') }}"
                            class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                        >{{ old('title') }}</textarea>
                        <x-input-error :messages="$errors->get('title')" class="mt-2" />
                        <x-primary-button class="mt-4">{{ __('Create') }}</x-primary-button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
