let mix = require('laravel-mix');

mix.copyDirectory('resources/images/', 'public/assets/images')
mix.copyDirectory('resources/css/', 'public/assets/css')

const fs = require("fs");

// fs.readdirSync("resources/sass/").forEach(fileName =>
//     mix.sass(`resources/sass/${fileName}`, "public/css"));
mix.sass('resources/sass/main.scss', 'public/css')
