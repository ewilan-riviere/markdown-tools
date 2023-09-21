<script lang="ts" setup>
import { ref, watch } from 'vue'
import { useCopy } from '@/Composables/useCopy'
import AppButton from '@/Components/App/Button.vue'

const props = defineProps<{
  name: string
  label: string
  placeholder?: string
  modelValue: string
}>()

defineEmits(['update:modelValue'])
const { clipboard, copied } = useCopy()
const value = ref('')
value.value = props.modelValue

watch(
  () => props.modelValue,
  (newValue) => {
    value.value = newValue
  },
)
</script>

<template>
  <div>
    <label
      :for="name"
      class="block text-sm font-medium leading-6 text-gray-100"
    >
      {{ label }}
    </label>
    <div class="mt-2">
      <textarea
        :id="name"
        v-model="value"
        rows="4"
        :name="name"
        :placeholder="placeholder"
        class="block w-full rounded-md border-0 py-1.5 text-gray-100 shadow-sm ring-1 ring-inset ring-gray-700 placeholder:text-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6 bg-gray-800 h-64"
        @input="$emit('update:modelValue', ($event.target as HTMLTextAreaElement).value)"
      />
      <div class="mt-3">
        <div class="flex items-center space-x-3">
          <AppButton @click="clipboard(value)">
            Copy
          </AppButton>
          <Transition>
            <div v-if="copied">
              Copied to clipboard!
            </div>
          </Transition>
        </div>
      </div>
    </div>
  </div>
</template>
