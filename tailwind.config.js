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
      keyframes: {
        life: {
          '0%': { width: '100%' },
          '100%': { width: '0%' },
        },
      },
      animation: {
        life: 'life 3750ms linear forwards',
      },
    },
  },
  plugins: [
    plugin(({ addComponents, theme }) => {
      addComponents({
        '.main-container': {
          '@apply mx-auto max-w-7xl px-6 lg:px-8': {},
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
