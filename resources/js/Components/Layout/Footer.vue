<script lang="ts" setup>
const year = new Date().getFullYear()
</script>

<template>
  <footer>
    <div
      class="mx-auto py-12 md:flex md:items-center md:justify-between container"
    >
      <div class="flex justify-center space-x-6 md:order-2" />
      <div class="mt-8 md:order-1 md:mt-0">
        <p class="text-center text-xs leading-5 text-gray-300">
          &copy; {{ year }}
          <a
            href="https://gitlab.com/ewilan-riviere"
            target="_blank"
            rel="noopener noreferrer"
          >Ewilan Rivière</a>. MIT License.
        </p>
      </div>
    </div>
  </footer>
</template>
