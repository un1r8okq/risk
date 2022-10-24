<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Risk') }}
        </h2>
    </x-slot>

    <div class="sm:px-6 lg:px-8 max-w-3xl mx-auto">
        <div class=" py-12">
            <form method="POST" action="{{ route('risks.store') }}">
                @csrf
                <textarea
                    name="title"
                    placeholder="{{ __('Enter a risk...') }}"
                    class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                >{{ old('title') }}</textarea>
                <x-input-error :messages="$errors->get('title')" class="mt-2" />
                <x-primary-button class="mt-4 float-right">{{ __('Create') }}</x-primary-button>
        </div>
        <h2 class="py-2 font-semibold text-2xl text-gray-800 leading-tight">Risks</h2>
        <div class="bg-white shadow-sm rounded-lg divide-y">
            @foreach ($risks as $risk)
                <div class="p-6">
                    <p class="text-gray-900">{{ $risk->title }}</p>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
