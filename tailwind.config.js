const plugin = require('tailwindcss/plugin')

module.exports = {
  content: ['./resources/**/*.{vue,js,ts,jsx,tsx,php}'],
  theme: {
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
    extend: {},
  },
  plugins: [
    plugin(({ addComponents }) => {
      addComponents({
        '.word-wraping': {
          'text-align': 'justify',
          '-webkit-hyphens': 'auto',
          '-moz-hyphens': 'auto',
          '-ms-hyphens': 'auto',
          hyphens: 'auto',
        },
        '.scrollbar-thin': {
          'scrollbar-width': 'thin',
        },
        '.debug-screens': {
          '@apply before:bottom-0 before:left-0 before:fixed before:px-1 before:text-sm before:bg-black before:text-white before:shadow-xl before:content-["screen:_"] sm:before:content-["screen:sm"] md:before:content-["screen:md"] lg:before:content-["screen:lg"] xl:before:content-["screen:xl"] 2xl:before:content-["screen:2xl"]':
            {},
          '&:before': {
            'z-index': '2147483647',
          },
        },
      })
    }),
    require('@tailwindcss/forms'),
    require('@tailwindcss/typography'),
    require('@tailwindcss/aspect-ratio'),
    require('@tailwindcss/line-clamp'),
  ],
}
