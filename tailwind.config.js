import forms from '@tailwindcss/forms'
import typography from '@tailwindcss/typography'
import plugin from 'tailwindcss/plugin'

/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    './vendor/laravel/jetstream/**/*.blade.php',
    './storage/framework/views/*.php',
    './resources/views/**/*.blade.php',
    './resources/js/**/*.vue',
  ],

  theme: {
    extend: {
      container: {
        padding: '1.25rem',
        center: true,
      },
      fontFamily: {
        handlee: ['Handlee'],
      },
    },
  },

  plugins: [
    plugin(({ addComponents }) => {
      addComponents({
        '.main-container': {
          '@apply mx-auto max-w-7xl px-6 lg:px-8': {},
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
    forms,
    typography,
  ],
}
