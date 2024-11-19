import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/home.css',
                'resources/css/comite.css',
                'resources/css/galerie.css',
                'resources/css/jury.css',
                'resources/css/laureats.css',
                'resources/js/app.js',
                'resources/js/carousel.js',
                'resources/js/comite.js',
                'resources/js/galerie.js',
                'resources/js/laureats.js'
            ],
            refresh: true,
        }),
    ],
    server:{
        port: 4001,
    }
});
