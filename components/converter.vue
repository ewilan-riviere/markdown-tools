<script setup lang="ts">
const props = defineProps<{
  type: 'html' | 'markdown'
}>()

const { convertText, originalText, convert } = useConvert(props.type)

const preview = ref(false)

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
    <div class="border border-gray-600 rounded-md p-6">
      <div class="pb-5">
        <h2 class="text-2xl leading-6 font-medium text-gray-100 font-handlee">
          {{ type === 'html' ? 'HTML to Markdown' : 'Markdown to HTML' }}
        </h2>
        <p class="mt-2 max-w-4xl text-sm text-gray-400">
          {{
            type === 'html'
              ? 'Convert your HTML code to Markdown.'
              : 'Convert your Markdown code to HTML.'
          }}
        </p>
      </div>
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 mt-6">
        <field-text
          v-model="originalText"
          name="original"
          :label="type === 'html' ? 'Your HTML code' : 'Your Markdown code'"
          :placeholder="type === 'html' ? 'HTML' : 'Markdown'"
          required
        />
        <field-text
          v-model="convertText"
          name="convert"
          :label="type === 'html' ? 'Markdown' : 'HTML'"
          :placeholder="type === 'html' ? 'Markdown' : 'HTML'"
          readonly
        />
      </div>
      <button
        class="mt-6 flex items-center space-x-1 hover:bg-gray-800 transition-colors duration-75 rounded-md px-2 py-1"
        @click="preview = !preview"
      >
        <svg-icon v-if="!preview" name="eye" class="w-5 h-5" />
        <svg-icon v-else name="eye-off" class="w-5 h-5" />
        <span>Preview</span>
      </button>
      <transition>
        <div v-if="preview" class="border-t border-gray-700 mt-6 pt-6">
          <div class="prose-sm prose-invert">
            <div v-html="type === 'html' ? originalText : convertText"></div>
          </div>
        </div>
      </transition>
    </div>
  </div>
</template>
