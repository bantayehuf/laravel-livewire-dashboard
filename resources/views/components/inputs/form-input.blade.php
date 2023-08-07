@props(['id' => null, 'type' => 'text', 'label' => 'Input', 'placeholder' => null, 'required' => false, 'disabled' => false, 'value' => '', 'autofocus' => false, 'extra' => ''])

{{-- A complete form input --}}

<div class="mb-4">
    <label for="{{ $id }}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
        {{ $label }}
    </label>

    <input
        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
        type="{{ $type }}" id="{{ $id }}" name="{{ $id }}" value="{{ $value }}"
        placeholder="{{ $placeholder }}" {{ $required ? 'required' : '' }} {{ $autofocus ? 'autofocus' : '' }}
        {{ $disabled ? 'disabled' : '' }} {!! $extra !!}>

    @error($id)
        <p class="text-sm
        text-red-500 mt-2">{{ $message }}</p>
    @enderror
</div>
