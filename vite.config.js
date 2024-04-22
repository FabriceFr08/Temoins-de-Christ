import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/style.css',
                'resources/css/bootstrap.min.css',

                'resources/lib/animate/animate.min.css',
                'resources/lib/owlcarousel/assets/owl.carousel.min.css',
                'resources/lib/lightbox/css/lightbox.min.css',

                'resources/js/app.js'
            ],
            refresh: true,
        }),
    ],
});
