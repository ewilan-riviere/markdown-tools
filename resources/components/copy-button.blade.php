<div {{ $attributes }}>
    <button @click="copyText({{ json_encode($copy) }})"
        class="text-gray-400 bg-gray-700 hover:bg-gray-600 hover:text-gray-300 transition-colors duration-75 p-1 rounded-md">
        <x-icons.clipboard x-show="!copied" class="w-5 h-5" />
        <x-icons.clipboard-check x-show="copied" class="w-5 h-5" />
    </button>
</div>
