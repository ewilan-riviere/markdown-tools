<template>
  <header class="flex px-5">
    <div class="grid w-full grid-cols-3 gap-4 mb-10">
      <div class="my-auto font-sans text-2xl font-bold">
        <div v-if="$route.name === 'Home'">
          Markdown code to HTML code
        </div>
        <div v-if="$route.name === 'Reverse'">
          HTML code to Markdown code
        </div>
      </div>
      <div class="mx-auto">
        <router-link :to="{ name: 'Home' }">
          <icon-base name="md-logo" height="200" width="200"></icon-base>
        </router-link>
      </div>
      <div class="my-auto text-right">
        <router-link
          :to="{ name: $route.name === 'Home' ? 'Reverse' : 'Home' }"
          class="font-sans text-2xl font-bold transition-colors duration-300 border-b-2 border-transparent hover:border-black"
        >
          Reverse ?
        </router-link>
      </div>
    </div>
  </header>
</template>

<script>
export default {
  name: 'HeaderMd',
}
</script>

<style lang="scss" scoped></style>
