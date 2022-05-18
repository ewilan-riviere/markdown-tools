import { defineNuxtConfig } from 'nuxt'
import config from './utils/config'
import svgLoader from 'vite-svg-loader'

// https://v3.nuxtjs.org/api/configuration/nuxt.config
export default defineNuxtConfig({
  // @ts-ignore
  build: config.build,
  meta: {
    link: config.meta.link,
    meta: config.meta.meta,
    script: config.meta.script,
  },
  modules: [
    '@nuxtjs/tailwindcss', // https://tailwindcss.nuxtjs.org/setup
    '@pinia/nuxt', // https://pinia.vuejs.org/ssr/nuxt.html
  ],
  tailwindcss: config.modules.tailwindcss,
  runtimeConfig: {
    ...config.runtimeConfigPrivate,
    public: config.runtimeConfigPublic,
  },
  typescript: {
    strict: true, // for pinia
    shim: false, // with Take Over Mode from https://github.com/johnsoncodehk/volar/discussions/471
  },
  // https://v3.nuxtjs.org/api/configuration/nuxt.config#vite
  vite: {
    plugins: [
      svgLoader(), // https://github.com/jpkleemans/vite-svg-loader#readme
    ],
  },
})
