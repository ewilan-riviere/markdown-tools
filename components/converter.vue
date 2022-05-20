<script setup lang="ts">
import { ConverterType } from '~~/types'

const { markdownText, htmlText, convert } = useConvert()

const preview = ref(false)
</script>

<template>
  <div class="main-container">
    <div class="border border-gray-600 rounded-md p-6">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
        <field-input-text
          v-model="htmlText"
          name="original"
          label="HTML code"
          placeholder="HTML"
          @input="convert('html')"
        />
        <field-input-text
          v-model="markdownText"
          name="convert"
          label="Markdown code"
          placeholder="Markdown"
          @input="convert('markdown')"
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
            <div v-html="htmlText"></div>
          </div>
        </div>
      </transition>
    </div>
  </div>
</template>
