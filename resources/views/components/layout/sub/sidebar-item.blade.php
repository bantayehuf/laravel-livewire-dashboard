@props(['icon', 'label' => 'Menu', 'route' => '#'])

<li>
    <a href="{{ $route }}"
        class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
        <i
            class="{{ $icon }} text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"></i>
        <span class="ml-2">{{ _($label) }}</span>
    </a>
</li>
