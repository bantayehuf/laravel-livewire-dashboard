@props(['id', 'icon', 'label' => 'Menu'])

<li>
    <div x-data="{ expanded: false }" x-on:click="expanded = !expanded"
        class="flex items-center p-2 w-full text-base font-medium text-gray-900 rounded-lg group cursor-pointer hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
        aria-controls="dropdown-{{ $id }}" data-collapse-toggle="dropdown-{{ $id }}">

        <i
            class="{{ $icon }} text-gray-500 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"></i>

        <span class="flex-1 ml-3 text-left whitespace-nowrap">{{ __($label) }}</span>

        <svg aria-hidden="true" x-bind:class="expanded ? 'rotate-0' : 'rotate-90'"
            class="w-6 h-6 transition-transform duration-200 ease-in-out shrink-0" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                clip-rule="evenodd"></path>
        </svg>
    </div>

    <ul id="dropdown-{{ $id }}" class="hidden space-y-1 transition-transform duration-1000 ease-in-out">
        {{ $slot }}
    </ul>
</li>
