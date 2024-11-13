import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/img/camilleros.png',
                'resources/img/camilleros4.png'
            ],
            refresh: true,
        }),
    ],
});
