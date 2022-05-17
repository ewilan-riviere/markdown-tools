<script setup lang="ts">
const props = defineProps<{
  type: 'html' | 'markdown'
}>()

const { convertText, originalText, convert } = useConvert(props.type)

watch(
  () => originalText.value,
  (newVal) => {
    convert()
  }
)

onMounted(() => {
  convert()
})
</script>

<template>
  <div class="main-container">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
      <field-text
        v-model="originalText"
        name="original"
        :label="type === 'html' ? 'Your HTML code' : 'Your Markdown code'"
        placeholder="HTML"
        required
      />
      <field-text
        v-model="convertText"
        name="convert"
        :label="type === 'html' ? 'Markdown' : 'HTML'"
        placeholder="Markdown"
        readonly
      />
    </div>
  </div>
</template>
