@props(['route' => '#', 'label' => 'Item'])

<li>
    <a href="{{ _($route) }}"
        class="flex items-center p-2 pl-7 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
        {{ _($label) }}
    </a>
</li>