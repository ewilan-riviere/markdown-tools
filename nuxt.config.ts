import { defineNuxtConfig } from 'nuxt'
import svgLoader from 'vite-svg-loader'

// https://v3.nuxtjs.org/api/configuration/nuxt.config
export default defineNuxtConfig({
  modules: [
    '@nuxtjs/tailwindcss', // https://tailwindcss.nuxtjs.org/setup
    '@pinia/nuxt', // https://pinia.vuejs.org/ssr/nuxt.html
  ],
  // https://v3.nuxtjs.org/api/configuration/nuxt.config#vite
  vite: {
    plugins: [
      svgLoader(), // https://github.com/jpkleemans/vite-svg-loader#readme
    ],
  },
})
