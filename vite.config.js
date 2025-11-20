import { defineConfig } from 'vite';
import { viteStaticCopy } from 'vite-plugin-static-copy';

export default defineConfig({
  build: {
    outDir: 'dist',
    manifest: true,
    rollupOptions: {
      input: 'src/main.js',
    },
    emptyOutDir: true,
  },

  plugins: [
    viteStaticCopy({
      targets: [
        {
          src: '*.php',
          dest: './'   // pone los PHP en dist/
        }
      ]
    })
  ]
});
