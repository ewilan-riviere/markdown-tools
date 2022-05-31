<div x-data="preview" class="mt-5">
    <button class="flex items-center hover:bg-gray-800 transition-colors duration-75 px-2 py-1 rounded-md"
        @click="toggle()">
        <x-icons.eye class="w-5 h-5" />
        <span class="ml-1">Preview</span>
    </button>
    <div x-show="display" x-transition
        class="mt-2 rounded-md prose prose-invert h-[39rem] max-h-[39rem] overflow-auto scrollbar-thin bg-gray-800 p-5">
        {{ $slot }}
    </div>
</div>
