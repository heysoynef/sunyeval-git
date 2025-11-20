import { defineConfig } from 'vite';

export default defineConfig({
  build: {
    outDir: 'dist',
    manifest: true,          // <<<<<< ACTIVA EL MANIFEST
    rollupOptions: {
      input: 'src/main.js',  // punto de entrada (no usa HTML)
    },
    emptyOutDir: true
  }
});
