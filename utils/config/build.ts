const build = {
  postcss: {
    order: ['tailwindcss/nesting', 'tailwindcss', 'autoprefixer'],
    plugins: {
      'postcss-nested': false,
    },
  },
  transpile: ['turndown'],
}

export default build
