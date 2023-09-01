<x-app-layout>

    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight py-2">
                {{ __('Tasks') }}
            </h2>
            <x-button @click="openModale = true">add task</x-button>
            {{-- Add 2 buttons to order by date, ascending or descending --}}
            <div class="flex">
                <x-filter-active href="{{ route('tasks.index', ['order' => 'asc']) }}" :active="request()->route('order') === 'asc'">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 256 256">
                        <g fill="black">
                            <path d="M224 128a96 96 0 1 1-96-96a96 96 0 0 1 96 96Z" opacity=".2" />
                            <path d="M128 24a104 104 0 1 0 104 104A104.11 104.11 0 0 0 128 24Zm0 192a88 88 0 1 1 88-88a88.1 88.1 0 0 1-88 88Zm37.66-85.66a8 8 0 0 1 0 11.32l-32 32a8 8 0 0 1-11.32 0l-32-32a8 8 0 0 1 11.32-11.32L120 148.69V88a8 8 0 0 1 16 0v60.69l18.34-18.35a8 8 0 0 1 11.32 0Z" />
                        </g>
                    </svg>
                </x-filter-active>
                <x-filter-active href="{{ route('tasks.index', ['order' => 'desc']) }}" :active="request()->route('order') === 'desc'">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 256 256">
                        <g fill="black">
                            <path d="M224 128a96 96 0 1 1-96-96a96 96 0 0 1 96 96Z" opacity=".2" />
                            <path d="M128 24a104 104 0 1 0 104 104A104.11 104.11 0 0 0 128 24Zm0 192a88 88 0 1 1 88-88a88.1 88.1 0 0 1-88 88Zm37.66-101.66a8 8 0 0 1-11.32 11.32L136 107.31V168a8 8 0 0 1-16 0v-60.69l-18.34 18.35a8 8 0 0 1-11.32-11.32l32-32a8 8 0 0 1 11.32 0Z" />
                        </g>
                    </svg>
                </x-filter-active>
            </div>
        </div>

    </x-slot>

    <div class="sm:py-12 py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex sm:flex-row flex-col sm:gap-4 gap-6">
                <div class="sm:basis-1/3">
                    @include('_partials.column', ['status' => 'pending', 'color' => 'gray'])
                </div>
                <div class="sm:basis-1/3">
                    @include('_partials.column', ['status' => 'in_progress', 'color' => 'yellow'])
                </div>
                <div class="sm:basis-1/3">
                    @include('_partials.column', ['status' => 'completed', 'color' => 'green'])
                </div>
            </div>
        </div>
    </div>

    @include('_partials.modal')

</x-app-layout>
