<script lang="ts" setup>
import { ref } from 'vue'
import LayoutNavbar from '@/Components/Layout/Navbar.vue'
import LayoutFooter from '@/Components/Layout/Footer.vue'
import FieldText from '@/Components/Field/Text.vue'
import AppButton from '@/Components/App/Button.vue'
import { useConvert } from '@/Composables/useConvert'

const { html, markdown, convert, format, previewHtml } = useConvert()
const preview = ref(false)
preview.value = localStorage.getItem('preview') === 'true'

function togglePreview() {
  preview.value = !preview.value
  localStorage.setItem('preview', preview.value.toString())
}
</script>

<template>
  <div class="flex flex-col min-h-screen">
    <IHead title="Markdown Tools" />
    <LayoutNavbar />
    <main class="relative isolate overflow-hidden pt-14">
      <img
        src="/images/hero-picture.svg"
        alt=""
        class="absolute inset-0 -z-10 h-full w-full object-cover"
      >
      <div class="absolute inset-0 bg-gray-900/80" />
      <div class="mx-auto py-16 relative z-10 container">
        <div class="flex">
          <div class="space-x-3 ml-auto">
            <AppButton @click="togglePreview">
              Preview
            </AppButton>
            <AppButton @click="format">
              Format
            </AppButton>
          </div>
        </div>
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
        <section v-if="preview" class="prose prose-invert mx-auto mt-16">
          <div v-html="previewHtml" />
        </section>
      </div>
    </main>
    <LayoutFooter />
  </div>
</template>
