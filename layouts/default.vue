<template>
  <div :class="dev ? 'debug-screens' : ''" class="bg-gray-900">
    <lazy-navbar />
    <Nuxt class="pt-16 content" />
    <lazy-app-footer class="footer" />
  </div>
</template>

<script>
export default {
  data() {
    return {
      dev: process.env.NODE_ENV !== 'production',
    }
  },
}
</script>

<style lang="postcss" scoped>
.content {
  min-height: calc(100vh - 50px);
}
.footer {
  height: 50px;
}
</style>
