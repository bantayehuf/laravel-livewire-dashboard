<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'px-5 py-2 text-base font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-red-600 sm:w--auto dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800']) }}>
    {{ $slot }}
</button>
