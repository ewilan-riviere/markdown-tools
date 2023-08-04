<script lang="ts" setup>
import { ref } from 'vue'
import LayoutNavbar from '@/Components/Layout/Navbar.vue'
import LayoutFooter from '@/Components/Layout/Footer.vue'
import FieldText from '@/Components/Field/Text.vue'
import { useConvert } from '@/Composables/useConvert'

const { html, markdown, convert } = useConvert()
const preview = ref(false)

function togglePreview() {
  preview.value = !preview.value
}
</script>

<template>
  <div class="bg-gray-900 min-h-screen">
    <IHead title="Markdown Tools" />
    <LayoutNavbar />

    <div class="relative isolate overflow-hidden pt-14 min-h-screen">
      <img
        src="/images/hero-picture.svg"
        alt=""
        class="absolute inset-0 -z-10 h-full w-full object-cover"
      >
      <div class="absolute inset-0 bg-gray-900/80" />
      <div class="mx-auto py-32 sm:py-48 lg:py-56 relative z-10 container">
        <div class="md:grid md:grid-cols-2 gap-8 space-y-6 md:space-y-0">
          <FieldText
            v-model="html"
            name="html"
            label="HTML"
            placeholder="Enter some HTML"
            @input="convert('html')"
          />
          <FieldText
            v-model="markdown"
            name="markdown"
            label="Markdown"
            placeholder="Enter some Markdown"
            @input="convert('markdown')"
          />
        </div>
        <LayoutFooter />
      </div>
    </div>
  </div>
</template>
