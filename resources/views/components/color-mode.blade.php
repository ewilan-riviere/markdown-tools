<div x-data="colorMode">
    <ul class="w-full space-y-1">
        <template x-for="element in list">
            <button type="button"
                x-text="element.label"
                :class="[mode === element.key ? 'bg-gray-100 dark:bg-gray-800' : '',
                    'block w-full rounded-md px-2 py-1 text-left hover:bg-gray-100 dark:hover:bg-gray-800'
                ]"
                @click="switchMode(element.key)"></button>
        </template>
    </ul>
</div>
