<template>
  <footer>
    <div
      class="mx-auto max-w-7xl sm:px-6 lg:flex lg:items-center lg:justify-between"
    >
      <div
        class="flex justify-center w-full h-6 mt-12 space-x-6 lg:w-auto lg:order-2 lg:mt-0"
      >
        <a
          href="https://twitter.com/ewilanriviere"
          target="_blank"
          rel="noopener noreferrer"
          class="text-gray-400 hover:text-gray-500"
        >
          <span class="sr-only">Twitter</span>
          <svg
            class="w-6 h-6"
            fill="currentColor"
            viewBox="0 0 24 24"
            aria-hidden="true"
          >
            <path
              d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"
            />
          </svg>
        </a>

        <a
          href="https://github.com/ewilan-riviere"
          target="_blank"
          rel="noopener noreferrer"
          class="text-gray-400 hover:text-gray-500"
        >
          <span class="sr-only">GitHub</span>
          <svg
            class="w-6 h-6"
            fill="currentColor"
            viewBox="0 0 24 24"
            aria-hidden="true"
          >
            <path
              fill-rule="evenodd"
              d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
              clip-rule="evenodd"
            />
          </svg>
        </a>
      </div>

      <div class="mt-2 lg:mt-0 lg:order-1">
        <div
          class="items-center block text-base text-center text-gray-400 lg:flex"
        >
          <div>
            <a
              href="https://creativecommons.org"
              target="_blank"
              rel="noopener noreferrer"
              class="flex items-center justify-center px-1 py-2 text-base leading-6 text-center text-gray-400 transition-colors duration-100 rounded-md group"
            >
              <span
                v-for="license in licenses"
                :key="license.id"
                :alt="license.label"
                class="w-5 h-5 mr-1 text-gray-400 transition-colors duration-100 fill-current group-hover:text-gray-200"
                v-html="license.svg"
              ></span>
              <span
                class="ml-1 transition-colors duration-100 group-hover:text-gray-200"
              >
                2020 - {{ new Date().getFullYear() }}
              </span>
            </a>
          </div>
          <span class="hidden mx-1 lg:block">·</span>
          <div class="mr-1">
            <a
              href="https://github.com/ewilan-riviere"
              target="_blank"
              rel="noopener noreferrer"
              class="text-gray-400 transition-colors duration-100 hover:text-gray-200"
              >Ewilan Rivière</a
            >. MIT Licensed.
          </div>
          <div class="flex-wrap justify-center lg:flex">
            <span>Powered by</span>
            <a
              href="https://www.npmjs.com/package/@nuxtjs/markdownit"
              target="_blank"
              rel="noopener noreferrer"
              class="transition-colors duration-100 hover:text-gray-200"
              >@nuxtjs/markdownit
            </a>
            <span class="lg:mx-1">and</span>
            <a
              href="https://github.com/domchristie/turndown"
              target="_blank"
              rel="noopener noreferrer"
              class="transition-colors duration-100 hover:text-gray-200"
              >turndown</a
            >
          </div>
        </div>
      </div>
    </div>
  </footer>
</template>

<script>
export default {
  name: 'AppFooter',
  data() {
    return {
      licenses: [
        {
          label: 'Creative Commons',
          svg: `<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><path d="M245.83 214.87l-33.22 17.28c-9.43-19.58-25.24-19.93-27.46-19.93-22.13 0-33.22 14.61-33.22 43.84 0 23.57 9.21 43.84 33.22 43.84 14.47 0 24.65-7.09 30.57-21.26l30.55 15.5c-6.17 11.51-25.69 38.98-65.1 38.98-22.6 0-73.96-10.32-73.96-77.05 0-58.69 43-77.06 72.63-77.06 30.72-.01 52.7 11.95 65.99 35.86zm143.05 0l-32.78 17.28c-9.5-19.77-25.72-19.93-27.9-19.93-22.14 0-33.22 14.61-33.22 43.84 0 23.55 9.23 43.84 33.22 43.84 14.45 0 24.65-7.09 30.54-21.26l31 15.5c-2.1 3.75-21.39 38.98-65.09 38.98-22.69 0-73.96-9.87-73.96-77.05 0-58.67 42.97-77.06 72.63-77.06 30.71-.01 52.58 11.95 65.56 35.86zM247.56 8.05C104.74 8.05 0 123.11 0 256.05c0 138.49 113.6 248 247.56 248 129.93 0 248.44-100.87 248.44-248 0-137.87-106.62-248-248.44-248zm.87 450.81c-112.54 0-203.7-93.04-203.7-202.81 0-105.42 85.43-203.27 203.72-203.27 112.53 0 202.82 89.46 202.82 203.26-.01 121.69-99.68 202.82-202.84 202.82z"/></svg>`,
        },
        {
          label: 'Creative Commons By',
          svg: `<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><path d="M314.9 194.4v101.4h-28.3v120.5h-77.1V295.9h-28.3V194.4c0-4.4 1.6-8.2 4.6-11.3 3.1-3.1 6.9-4.7 11.3-4.7H299c4.1 0 7.8 1.6 11.1 4.7 3.1 3.2 4.8 6.9 4.8 11.3zm-101.5-63.7c0-23.3 11.5-35 34.5-35s34.5 11.7 34.5 35c0 23-11.5 34.5-34.5 34.5s-34.5-11.5-34.5-34.5zM247.6 8C389.4 8 496 118.1 496 256c0 147.1-118.5 248-248.4 248C113.6 504 0 394.5 0 256 0 123.1 104.7 8 247.6 8zm.8 44.7C130.2 52.7 44.7 150.6 44.7 256c0 109.8 91.2 202.8 203.7 202.8 103.2 0 202.8-81.1 202.8-202.8.1-113.8-90.2-203.3-202.8-203.3z"/></svg>`,
        },
        {
          label: 'Creative Commons Nc',
          svg: `<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><path d="M247.6 8C387.4 8 496 115.9 496 256c0 147.2-118.5 248-248.4 248C113.1 504 0 393.2 0 256 0 123.1 104.7 8 247.6 8zM55.8 189.1c-7.4 20.4-11.1 42.7-11.1 66.9 0 110.9 92.1 202.4 203.7 202.4 122.4 0 177.2-101.8 178.5-104.1l-93.4-41.6c-7.7 37.1-41.2 53-68.2 55.4v38.1h-28.8V368c-27.5-.3-52.6-10.2-75.3-29.7l34.1-34.5c31.7 29.4 86.4 31.8 86.4-2.2 0-6.2-2.2-11.2-6.6-15.1-14.2-6-1.8-.1-219.3-97.4zM248.4 52.3c-38.4 0-112.4 8.7-170.5 93l94.8 42.5c10-31.3 40.4-42.9 63.8-44.3v-38.1h28.8v38.1c22.7 1.2 43.4 8.9 62 23L295 199.7c-42.7-29.9-83.5-8-70 11.1 53.4 24.1 43.8 19.8 93 41.6l127.1 56.7c4.1-17.4 6.2-35.1 6.2-53.1 0-57-19.8-105-59.3-143.9-39.3-39.9-87.2-59.8-143.6-59.8z"/></svg>`,
        },
      ],
    }
  },
}
</script>
