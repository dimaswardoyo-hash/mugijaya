import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
            detectTls: false,
            valetTls: false,
        }),
    ],
    server: {
        // Use your Laragon domain
        host: 'mugijaya.test',
        port: 5173,
        strictPort: true,
        https: false,
        hmr: {
            host: 'mugijaya.test',
            protocol: 'ws',
        },
    },
});