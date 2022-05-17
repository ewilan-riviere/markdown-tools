<script setup lang="ts">
const isDev = useNuxtApp()._legacyContext.isDev
</script>

<template>
  <div :class="{ 'debug-screens': isDev }" class="relative overflow-hidden">
    <app-toasts />
    <main>
      <hero />
      <converter type="html" />
      <converter type="markdown" class="mt-10" />
    </main>
    <layout-footer />
  </div>
</template>

<style lang="css">
body {
  @apply bg-gray-900 text-white;
}
</style>
