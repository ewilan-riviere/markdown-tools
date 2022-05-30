import { defineConfig } from 'vite'
import { baseConfig, bladePlugin } from '../../vite.config'
import path from 'path'

// https://vitejs.dev/config/
export default defineConfig({
  ...baseConfig(path.basename(__dirname)),
  resolve: {
    alias: {
      '~/views': `${__dirname}`,
    },
  },
  plugins: [bladePlugin()],
  optimizeDeps: {
    include: ['alpinejs'],
  },
})
