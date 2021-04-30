<template>
  <div>
    <div
      class="px-4 py-12 mx-auto max-w-7xl sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between"
    >
      <h2
        class="text-3xl font-extrabold tracking-tight text-gray-300 font-handlee sm:text-4xl"
      >
        <span class="block">You have code to convert?</span>
        <span class="block text-indigo-400">Try it directly.</span>
      </h2>
      <div class="flex mt-8 lg:mt-0 lg:flex-shrink-0">
        <div class="inline-flex rounded-md shadow">
          <nuxt-link
            :to="{ name: 'html-to-markdown' }"
            class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-white transition-colors duration-100 bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-700"
          >
            Try HTML to Markdown
          </nuxt-link>
        </div>
        <div class="inline-flex ml-3 rounded-md shadow">
          <nuxt-link
            :to="{ name: 'markdown-to-html' }"
            class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-indigo-600 transition-colors duration-100 bg-white border border-transparent rounded-md hover:bg-indigo-50"
          >
            ...or Markdown to HTML
          </nuxt-link>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'CTA',
}
</script>
