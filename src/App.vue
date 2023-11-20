<script lang="ts" setup>
import { useConvert } from './Composables/useConvert'

const { html, markdown, convert, format, previewHtml } = useConvert()
const isDev = process.env.NODE_ENV === 'development'
const preview = ref(false)
preview.value = localStorage.getItem('preview') === 'true'

function togglePreview() {
  preview.value = !preview.value
  localStorage.setItem('preview', preview.value.toString())
}
</script>

<template>
  <div
    :class="{
      'debug-screens': isDev,
    }"
    class="font-sans antialiased flex flex-col min-h-screen relative"
  >
    <div>
      <div class="absolute inset-0 bg-gray-900 -z-20" />
      <img
        src="/images/hero-picture.svg"
        alt=""
        class="absolute inset-0 -z-10 h-full w-full object-cover"
      >
      <div class="absolute inset-0 bg-gray-900/80" />
    </div>
    <LayoutNavbar class="header" />
    <main class="relative isolate overflow-hidden pt-14 body">
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
    <LayoutFooter class="footer" />
  </div>
</template>

<style lang="css" scoped>
:root {
  --footer-height: 3rem;
}
.body {
  min-height: 88vh;
  margin: 0;
  display: flex;
  flex-direction: column;
}
.header {
  min-height: --footer-height;
}
.main {
  flex: 1;
}
.footer {
  min-height: --footer-height;
}
</style>
