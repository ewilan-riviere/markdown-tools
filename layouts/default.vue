<template>
  <div :class="dev ? 'debug-screens' : ''" class="bg-gray-900">
    <lazy-navbar />
    <Nuxt class="pt-16 min-h-screen" />
    <lazy-app-footer />
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
