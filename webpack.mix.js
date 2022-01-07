let mix = require('laravel-mix');

mix
.js('src/app.js', 'public/assets/js')
.js('src/ppdb.js', 'public/assets/js')
.sass('src/scss/app.scss','public/assets/css').options({
    processCssUrls: false
});
