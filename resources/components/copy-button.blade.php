<button @click="copyText({{ json_encode($copy) }})" class="mt-2 text-gray-400">
    <span x-show="!copied" class="flex items-center space-x-1">
        <x-icons.clipboard class="w-5 h-5" />
        <span class="text-sm">Copy content</span>
    </span>
    <span x-show="copied" class="flex items-center space-x-1">
        <x-icons.clipboard-check class="h-5 w-5" />
        <span x-show="copied" class="text-sm">Content copied!</span>
    </span>
</button>
