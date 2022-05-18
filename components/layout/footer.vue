<template>
  <footer>
    <div
      class="max-w-7xl mx-auto pt-12 pb-8 px-4 sm:px-6 md:flex md:items-center md:justify-between lg:px-8"
    >
      <div class="flex justify-center space-x-6 md:order-2">
        <a
          href="https://github.com/ewilan-riviere/markdown-interpreter"
          target="_blank"
          rel="noopener noreferrer"
          class="text-gray-400 hover:text-gray-500"
        >
          <span class="sr-only">GitHub</span>
          <svg-icon name="github" class="w-6 h-6" />
        </a>
      </div>
      <div class="mt-8 md:mt-0 md:order-1">
        <p class="text-center text-base text-gray-400 flex items-center">
          <svg-icon name="cc" class="w-6 h-6 mr-1" /> 2020 -
          {{ new Date().getFullYear() }}<span class="mx-1">·</span
          ><a
            href="https://github.com/ewilan-riviere"
            target="_blank"
            rel="noopener noreferrer"
            class="internal-link"
            >Ewilan Rivière</a
          ><span class="mr-1">.</span
          ><a
            href="https://gitlab.com/ewilan-riviere/markdown-interpreter/-/blob/main/LICENSE"
            target="_blank"
            rel="noopener noreferrer"
            class="internal-link"
            >MIT License</a
          >.
        </p>
      </div>
    </div>
  </footer>
</template>
