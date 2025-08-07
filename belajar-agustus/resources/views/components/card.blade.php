@props(['title' => 'Card Title', 'isOpen' => false])

<div x-data="{ open: @json($isOpen) }" class="bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300">
    <div @click="open = !open"
        class="flex justify-between items-center px-6 py-4 cursor-pointer select-none bg-gray-100 hover:bg-gray-200">
        <h3 class="font-semibold text-lg text-gray-800">{{ $title }}</h3>
        <svg x-bind:class="{ 'rotate-180': open, 'rotate-0': !open }"
            class="w-5 h-5 text-gray-500 transition-transform duration-300" fill="none" stroke="currentColor"
            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
        </svg>
    </div>

    <div x-show="open" x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 max-h-0" x-transition:enter-end="opacity-100 max-h-screen"
        x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 max-h-screen"
        x-transition:leave-end="opacity-0 max-h-0" class="px-6 py-4 text-gray-700">
        {{ $slot }}
    </div>
</div>
