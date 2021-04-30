<template>
  <header>
    <nav class="fixed z-50 w-full bg-gray-800 shadow">
      <div class="px-2 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="relative flex justify-between h-16">
          <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
            <!-- Mobile menu button -->
            <button
              type="button"
              class="inline-flex items-center justify-center p-2 text-gray-400 rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
              aria-controls="mobile-menu"
              aria-expanded="false"
              @click="responsiveMenuOpened = !responsiveMenuOpened"
            >
              <span class="sr-only">Open main menu</span>
              <transition name="fade">
                <svg
                  v-if="!responsiveMenuOpened"
                  class="block w-6 h-6"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                  aria-hidden="true"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16"
                  />
                </svg>
                <svg
                  v-else
                  class="block w-6 h-6"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                  aria-hidden="true"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M6 18L18 6M6 6l12 12"
                  />
                </svg>
              </transition>
            </button>
          </div>
          <div
            class="flex items-center justify-center flex-1 sm:items-stretch sm:justify-start"
          >
            <nuxt-link
              to="/"
              class="flex items-center flex-shrink-0"
              @click.native="responsiveMenuOpened = false"
            >
              <img
                class="block w-auto h-8 lg:hidden"
                src="https://tailwindui.com/img/logos/workflow-mark-indigo-500.svg"
                alt="Workflow"
              />
              <img
                class="hidden w-auto h-8 text-white fill-current lg:block"
                src="/icons/md-logo-dark.svg"
                alt="Markdown Interpreter"
              />
            </nuxt-link>
            <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
              <!-- Current: "", Default: "" -->
              <nuxt-link
                v-for="route in routes"
                :key="route.id"
                :to="{ name: route.name }"
                class="inline-flex items-center px-1 pt-1 text-sm font-medium text-gray-300 transition-colors duration-100 border-b-2 border-transparent hover:border-gray-300 hover:text-gray-100"
              >
                {{ route.label }}
              </nuxt-link>
            </div>
          </div>
        </div>
      </div>

      <!-- Mobile menu, show/hide based on menu state. -->
      <div
        v-if="responsiveMenuOpened"
        id="mobile-menu"
        class="fixed w-full bg-gray-800 sm:hidden"
      >
        <div class="pt-2 pb-4 space-y-1">
          <nuxt-link
            v-for="route in routes"
            :key="route.id"
            :to="{ name: route.name }"
            class="block py-2 pl-3 pr-4 text-base font-medium text-gray-300 transition-colors duration-100 border-l-4 border-transparent hover:bg-gray-50 hover:border-gray-300 hover:text-gray-100 hover:bg-opacity-25"
            @click.native="responsiveMenuOpened = !responsiveMenuOpened"
          >
            {{ route.label }}
          </nuxt-link>
        </div>
      </div>
    </nav>
  </header>
</template>

<script>
export default {
  name: 'Navbar',
  data() {
    return {
      responsiveMenuOpened: false,
      routes: [
        {
          label: 'HTML to MD',
          name: 'html-to-markdown',
        },
        {
          label: 'MD To HTML',
          name: 'markdown-to-html',
        },
      ],
    }
  },
}
</script>

<style lang="postcss" scoped>
.nuxt-link-exact-active {
  @apply border-indigo-200 text-gray-100;
}
.nuxt-link-active {
  /* @apply text-gray-900 border-indigo-500 dark:text-white; */
}
</style>
