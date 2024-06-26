import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [

                'resources/css/app.css',
                'resources/css/style.css',
                'resources/css/reseau.css',
                'resources/css/counter.css',
                'resources/css/bootstrap.min.css',
                'resources/lib/owlcarousel/assets/owl.carousel.min.css',
                'resources/lib/lightbox/css/lightbox.min.css',
                'resources/lib/animate/animate.min.css',
                // 'resources/lib/lightbox/css/lightbox.min.map',

                'resources/lib/owlcarousel/owl.carousel.min.js',
                'resources/lib/counterup/counterup.min.js',
                'resources/lib/wow/wow.min.js',
                'resources/lib/lightbox/js/lightbox.min.js',
                'resources/lib/waypoints/waypoints.min.js',
                'resources/lib/easing/easing.min.js',
                'resources/js/main.js',
                'resources/js/app.js',
                'resources/js/formation.js',
                'resources/js/reseau.js',
                'resources/js/counter.js',

            ],
            refresh: true,
        }),

    ],

    server : {
        host: '127.0.0.1',
        port: 3000
    }
});
