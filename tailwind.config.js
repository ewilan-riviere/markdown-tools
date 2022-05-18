const plugin = require('tailwindcss/plugin')

module.exports = {
  content: [
    'components/**/*.{vue,js}',
    'layouts/**/*.vue',
    'pages/**/*.vue',
    'plugins/**/*.{js,ts}',
    'app.vue',
  ],
  theme: {
    extend: {
      container: {
        padding: '1.25rem',
        center: true,
      },
      primary: {
        100: '#e2e0ff',
        200: '#c4c1ff',
        300: '#a7a1ff',
        400: '#8982ff',
        500: '#6c63ff',
        600: '#564fcc',
        700: '#413b99',
        800: '#2b2866',
        900: '#161433',
      },
      screens: {
        sm: '360px',
        md: '600px',
        lg: '900px',
        xl: '1300px',
        '2xl': '1536px',
        '3xl': '1920px',
      },
      fontFamily: {
        handlee: ['Handlee'],
      },
    },
  },
  plugins: [
    plugin(({ addComponents, theme }) => {
      addComponents({
        '.main-container': {
          '@apply mx-auto max-w-7xl px-6 lg:px-8': {},
        },
        '.internal-link': {
          '@apply transition-colors duration-100 hover:text-gray-300 underline underline-offset-2 !important':
            {},
        },
      })
    }),
    require('@tailwindcss/forms'),
    require('@tailwindcss/typography'),
    require('@tailwindcss/aspect-ratio'),
    require('@tailwindcss/line-clamp'),
    require('tailwindcss-debug-screens'),
  ],
}
