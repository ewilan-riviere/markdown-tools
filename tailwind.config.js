module.exports = {
  mode: 'jit',
  darkMode: 'class',
  purge: [
    'assets/**/*.css',
    'assets/**/*.pcss',
    'components/**/*.vue',
    'layouts/**/*.vue',
    'pages/**/*.vue',
    'plugins/**/*.js',
    'nuxt.config.js',
  ],
  theme: {
    container: {
      center: true,
    },
    extend: {
      colors: {
        primary: {
          100: '#ccf3e8',
          200: '#99e8d2',
          300: '#66dcbb',
          400: '#33d1a5',
          500: '#00c58e',
          600: '#009e72',
          700: '#007655',
          800: '#004f39',
          900: '#00271c',
        },
      },
      fontFamily: {
        handlee: ['Handlee'],
      },
      typography: (theme) => ({
        DEFAULT: {
          css: {
            h1: {
              fontSize: '2rem',
            },
          },
        },
        light: {
          css: {
            color: '#e5e7eb',
            h1: {
              color: '#f3f4f6',
            },
            h2: {
              color: '#f3f4f6',
            },
            h3: {
              color: '#f3f4f6',
            },
            strong: {
              color: '#e5e7eb',
            },
            blockquote: {
              color: '#e5e7eb',
            },
            a: {
              color: '#3182ce',
              '&:hover': {
                color: '#2c5282',
              },
            },
          },
        },
      }),
    },
  },
  variants: {
    extend: {
      display: ['dark'],
      opacity: ['dark'],
      width: ['hover', 'focus'],
      textColor: ['responsive', 'hover', 'focus', 'group-hover', 'dark'],
      scale: ['responsive', 'hover', 'focus', 'active', 'group-hover'],
      boxShadow: ['dark'],
      translate: ['responsive', 'hover', 'focus', 'active', 'group-hover'],
      backgroundColor: ['hover', 'focus', 'group-hover', 'dark'],
      backgroundOpacity: ['dark'],
      borderColor: ['hover', 'focus', 'group-hover'],
      borderRadius: ['dark'],
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('@tailwindcss/typography'),
    require('@tailwindcss/aspect-ratio'),
    require('@tailwindcss/line-clamp'),
    require('tailwindcss-debug-screens'),
  ],
}
