<template>
  <div id="app" class="container mx-auto">
    <markdown-converter></markdown-converter>
  </div>
</template>

<script>
import markdownConverter from '@/components/markdown-converter.vue'

export default {
  components: {
    markdownConverter,
  },
}
</script>
