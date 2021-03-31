<template>
  <div :class="dev ? 'debug-screens' : ''" class="bg-gray-900">
    <navbar />
    <Nuxt class="min-h-screen pt-16" />
    <v-footer />
  </div>
</template>

<script>
import navbar from '~/components/blocks/navbar.vue'
import VFooter from '~/components/blocks/v-footer.vue'
export default {
  components: { navbar, VFooter },
  data() {
    return {
      dev: process.env.NODE_ENV !== 'production',
    }
  },
}
</script>
