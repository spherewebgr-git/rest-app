import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/vendors/bootstrap.css',
                'resources/css/vendors/icofont.css',
                'resources/css/style.css',
                'resources/css/color-1.css',
                'resources/js/bootstrap/bootstrap.bundle.min.js',
                'resources/js/icons/feather-icon/feather.min.js',
                'resources/js/icons/feather-icon/feather-icon.js',
                'resources/js/scrollbar/simplebar.js',
                'resources/js/scrollbar/custom.js',
                'resources/js/config.js',
                'resources/js/sidebar-menu.js',
                'resources/js/sidebar-pin.js',
                'resources/js/chart/apex-chart/stock-prices.js',
                'resources/js/chart/apex-chart/apex-chart.js',
                'resources/js/chart/apex-chart/moment.min.js',
                'resources/js/dashboard/dashboard_3.js',
                'resources/js/script.js',
                'resources/js/app.js'
            ],
            refresh: true,
        }),
    ],

});


