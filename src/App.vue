<template>
  <div id="app" class="h-screen">
    <div class="container mx-auto content">
      <header-md></header-md>
      <router-view></router-view>
    </div>

    <footer-md class="footer"></footer-md>
  </div>
</template>

<script>
import FooterMd from '@/components/footer-md.vue'
import HeaderMd from '@/components/header-md.vue'

export default {
  components: {
    FooterMd,
    HeaderMd,
  },
}
</script>

<style>
html,
body {
  height: 100%;
}
.content {
  min-height: calc(100% - 8%);
}
</style>
