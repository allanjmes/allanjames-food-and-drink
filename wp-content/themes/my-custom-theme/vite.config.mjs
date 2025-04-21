import { defineConfig } from 'vite'
import FullReload from 'vite-plugin-full-reload'
import path from 'path'

export default defineConfig({
  root: '.',
  server: {
    origin: 'http://localhost:5173',
    cors: true,
    strictPort: true,
    hmr: {
      protocol: 'ws',
      host: 'localhost',
      port: 5173,
    },
  },
  build: {
    outDir: 'dist',
    rollupOptions: {
      input: './js/index.js',
      output: {
        entryFileNames: 'bundle.js',
        assetFileNames: 'bundle.css',
      },
    },
    emptyOutDir: false,
  },
  plugins: [
    FullReload(['./**/*.php']), // ⬅️ Make sure this is outside `server`
  ],
})