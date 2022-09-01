import { defineConfig } from 'vite'
import laravel from 'laravel-vite-plugin'

export default defineConfig({
  plugins: [
    laravel({
      input: ['resources/front/css/app.css', 'resources/front/ts/app.ts'],
      refresh: ['resources/**'],
    }),
  ],
  optimizeDeps: {
    include: ['alpinejs'],
  },
})
