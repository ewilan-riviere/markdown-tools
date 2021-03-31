export default {
  // Target: https://go.nuxtjs.dev/config-target
  target: 'static',

  // Global page headers: https://go.nuxtjs.dev/config-head
  head: {
    title: 'Markdown Interpreter',
    meta: [
      { charset: 'utf-8' },
      { name: 'viewport', content: 'width=device-width, initial-scale=1' },
      { hid: 'description', name: 'description', content: '' },
    ],
    link: [{ rel: 'icon', type: 'image/x-icon', href: '/favicon.ico' }],
  },

  // Global CSS: https://go.nuxtjs.dev/config-css
  css: ['~/assets/css/app', '~/assets/css/markdown'],

  loading: {
    color: '#564fcc',
    height: '2px',
  },

  // Plugins to run before rendering page: https://go.nuxtjs.dev/config-plugins
  plugins: [
    // https://github.com/teazean/vue-beautify
    { src: '~/plugins/js-beautify' },
    // https://github.com/mercs600/vue2-perfect-scrollbar
    { src: '~/plugins/vue-perfect-scrollbar' },
  ],

  // Auto import components: https://go.nuxtjs.dev/config-components
  components: true,

  // Modules for dev and build (recommended): https://go.nuxtjs.dev/config-modules
  buildModules: [
    // https://go.nuxtjs.dev/eslint
    '@nuxtjs/eslint-module',
    // https://go.nuxtjs.dev/tailwindcss
    '@nuxtjs/tailwindcss',
    // https://github.com/nuxt-community/dotenv-module
    '@nuxtjs/dotenv',
    // https://google-fonts.nuxtjs.org/
    '@nuxtjs/google-fonts',
    // https://color-mode.nuxtjs.org/#setup
    '@nuxtjs/color-mode',
  ],

  tailwindcss: {
    cssPath: '~/assets/css/tailwind.css',
    jit: true,
  },
  googleFonts: {
    display: 'swap',
    prefetch: true,
    families: {
      Handlee: true,
    },
  },

  // Modules: https://go.nuxtjs.dev/config-modules
  modules: [
    // https://go.nuxtjs.dev/axios
    '@nuxtjs/axios',
    // https://go.nuxtjs.dev/pwa
    '@nuxtjs/pwa',
    // https://go.nuxtjs.dev/content
    '@nuxt/content',
    // https://www.npmjs.com/package/@nuxtjs/robots
    '@nuxtjs/robots',
    // https://sitemap.nuxtjs.org/guide/setup
    '@nuxtjs/sitemap',
    // See https://github.com/markdown-it/markdown-it
    '@nuxtjs/markdownit',
    // https://github.com/Chantouch/nuxt-clipboard
    'nuxt-clipboard',
    // https://www.npmjs.com/package/@nuxtjs/toast
    '@nuxtjs/toast',
    // https://github.com/nuxt-community/svg-module
    '@nuxtjs/svg',
  ],

  // Axios module configuration: https://go.nuxtjs.dev/config-axios
  axios: {},
  // PWA module configuration: https://go.nuxtjs.dev/pwa
  pwa: {
    manifest: {
      lang: 'en',
    },
    meta: {
      // name: settings.metadata.title,
      // author: settingsCustom.metadata.author || settings.custom.metadata.author,
      // description: settings.metadata.description,
      // theme_color: settings.metadata.color,
    },
  },
  // Content module configuration: https://go.nuxtjs.dev/config-content
  content: {
    liveEdit: false,
    markdown: {
      remarkPlugins: ['remark-directive'],
      prism: {
        theme: 'prism-themes/themes/prism-vsc-dark-plus.css',
      },
    },
  },
  robots: {
    // Disallow: '',
    Sitemap: `${process.env.BASE_URL}/sitemap.xml`,
  },
  markdownit: {
    preset: 'default',
    linkify: true,
    breaks: true,
    use: ['markdown-it-div', 'markdown-it-attrs'],
    runtime: true,
  },
  clipboard: {
    autoSetContainer: true,
  },
  toast: {
    position: 'bottom-right',
    duration: 2000,
    iconPack: 'material',
  },

  // Build Configuration: https://go.nuxtjs.dev/config-build
  build: {},
}
