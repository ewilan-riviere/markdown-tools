<template>
  <footer class="text-gray-700 body-font">
    <div
      class="container flex flex-col items-center px-5 py-1 mx-auto sm:flex-row"
    >
      <router-link
        :to="{ name: 'Home' }"
        class="flex items-center justify-center font-medium text-gray-900 title-font md:justify-start"
      >
        <div class="w-16 h-16 p-2 text-white rounded-full">
          <icon-base
            name="md-logo"
            height="100"
            width="100"
            variant="h-full w-full"
          ></icon-base>
        </div>
        <span class="ml-3 text-xl">
          Markdown Interpreter
        </span>
      </router-link>
      <p
        class="mt-4 text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0"
      >
        <a
          href="https://en.wikipedia.org/wiki/MIT_License"
          target="_blank"
          rel="noopener noreferrer"
        >
          MIT License
        </a>
        · {{ new Date().getFullYear() !== 2020 ? '2020 - ' : ''
        }}{{ new Date().getFullYear() }} —
        <a
          href="https://github.com/ewilan-riviere"
          class="ml-1 text-gray-600"
          rel="noopener noreferrer"
          target="_blank"
        >
          Ewilan Rivière
        </a>
      </p>
      <span
        class="inline-flex justify-center mt-4 sm:ml-auto sm:mt-0 sm:justify-start"
      >
        <span class="mr-2">
          Works with:
        </span>
        <a
          class="text-gray-500"
          href="https://github.com/miaolz123/vue-markdown"
          target="_blank"
          rel="noopener noreferrer"
        >
          vue-markdown
        </a>
        <span class="mx-1">
          &
        </span>
        <a
          class="text-gray-500"
          href="https://github.com/domchristie/turndown"
          target="_blank"
          rel="noopener noreferrer"
        >
          turndown
        </a>
      </span>
    </div>
  </footer>
</template>

<script>
export default {
  name: 'FooterMd',
}
</script>

<style lang="scss" scoped></style>
