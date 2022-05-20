<script setup lang="ts">
interface Props {
  modelValue?: string
  label?: string
  name?: string
  placeholder?: string
  required?: boolean
  multiline?: boolean
  minlength?: number
  maxlength?: number
  disabled?: boolean
  readonly?: boolean
}

const props = withDefaults(defineProps<Props>(), {
  modelValue: undefined,
  label: undefined,
  name: 'field',
  placeholder: undefined,
  type: 'text',
  required: false,
  multiline: false,
  minlength: 0,
  maxlength: 0,
  disabled: false,
  readonly: false,
})

const emit = defineEmits(['update:modelValue'])

const value = computed<string>({
  get() {
    return props.modelValue as string
  },
  set(val) {
    emit('update:modelValue', val)
  },
})
</script>

<template>
  <div>
    <label
      :for="name"
      class="block text-lg font-medium text-gray-200 font-handlee"
    >
      {{ label }}
    </label>
    <div class="mt-2 relative">
      <textarea
        :name="name"
        :id="name"
        v-model="value"
        :placeholder="placeholder"
        :minlength="minlength > 0 ? minlength : ''"
        :maxlength="maxlength > 0 ? maxlength : ''"
        :readonly="readonly"
        spellcheck="false"
        rows="15"
      ></textarea>
      <app-copy-btn :text="value" class="absolute z-40 bottom-3 right-3" />
    </div>
    <div class="mt-2 text-sm text-gray" id="email-description">
      <slot />
    </div>
  </div>
</template>

<style lang="css" scoped>
textarea {
  @apply py-3 border-0 resize-none focus:ring-0 bg-gray-800 placeholder-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-700 rounded-md;
  scrollbar-width: thin;
}
</style>
