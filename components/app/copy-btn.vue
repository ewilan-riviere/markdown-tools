<script setup lang="ts">
const props = defineProps<{
  text?: string
}>()

const copied = ref(false)
const toast = useToast()

const copy = async () => {
  copied.value = true
  let success = false
  if (props.text) {
    await navigator.clipboard.writeText(props.text).then(() => (success = true))
  }
  toast.push(success)
  setTimeout(() => {
    copied.value = false
  }, 3500)
}
</script>

<template>
  <button
    @click="copy"
    class="hover:bg-gray-700 transition-colors duration-75 p-1 rounded-md"
  >
    <svg-icon v-if="!copied" name="clipboard" class="w-5 h-5" />
    <svg-icon v-else name="clipboard-check" class="w-5 h-5" />
  </button>
</template>
