<script setup lang="ts">
const isDev = useNuxtApp()._legacyContext?.isDev

useMetadata({
  title: 'Markdown Interpreter',
})
</script>

<template>
  <div :class="{ 'debug-screens': isDev }" class="relative overflow-hidden">
    <app-toast />
    <main>
      <hero />
      <converter />
    </main>
    <layout-footer />
  </div>
</template>

<style lang="css">
body {
  @apply bg-gray-900 text-white;
}
</style>
