const mix = require("laravel-mix");

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js("resources/js/app.js", "public/js")
    .js("resources/js/admin.js", "public/js")
    .postCss("resources/css/app.css", "public/css", [
        require("postcss-import"),
        require("tailwindcss"),
        require("autoprefixer"),
    ])
    .postCss("resources/css/form.css", "public/css")
    .postCss("resources/css/admin.css", "public/css")
    .browserSync({
        proxy: {
            target: "http://127.0.0.1:8000",
        },
        files: ["./resources/**/*", "./public/**/*"],
        // open: true,
        reloadOnRestart: true,
    });
