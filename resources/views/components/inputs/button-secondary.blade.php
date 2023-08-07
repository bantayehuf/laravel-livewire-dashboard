<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'px-5 py-2 text-base font-medium text-center text-white bg-secondary-700 rounded-lg hover:bg-secondary-800 focus:ring-4 focus:ring-secondary-300 sm:w--auto dark:bg-secondary-600 dark:hover:bg-secondary-700 dark:focus:ring-secondary-800']) }}>
    {{ $slot }}
</button>
