<template>
  <main class="container max-w-7xl">
    <hero />
    <features />
    <cta />
  </main>
</template>

<script>
import Cta from '~/components/blocks/cta.vue'
import Features from '~/components/blocks/features.vue'
import hero from '~/components/blocks/hero.vue'
export default {
  name: 'PageHome',
  components: { hero, Features, Cta },
}
</script>
