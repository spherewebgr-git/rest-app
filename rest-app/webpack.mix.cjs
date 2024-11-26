let mix = require('laravel-mix');

mix.copyDirectory('resources/images/', 'public/assets/images')
mix.copyDirectory('resources/css/', 'public/assets/css')
