@php
$class = 'block w-full resize-none rounded-md border-0 border-gray-700 bg-gray-800 py-3 placeholder-gray-300 shadow-sm focus:border-indigo-500 focus:ring-0 focus:ring-indigo-500 sm:text-sm';
@endphp

<div {{ $attributes }}>
    <label for="{{ $label }}"
        class="font-handlee block text-lg font-medium text-gray-200">
        {{ $label }}
    </label>
    <div class="relative mt-2">
        <textarea name="{{ $name }}"
            id="{{ $name }}"
            placeholder="{{ $placeholder }}"
            spellcheck="false"
            rows="15"
            class="{{ $class }}"></textarea>
        {{-- <app-copy-btn text="value" class="absolute z-40 bottom-3 right-3" /> --}}
    </div>
    <div class="text-gray mt-2 text-sm"
        id="email-description">
        {{ $slot }}
    </div>
</div>
