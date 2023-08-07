<div
    {{ $attributes->merge(['type' => 'submit', 'class' => 'bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700']) }}>
    {{ $slot }}
</div>
