let mix = require("laravel-mix");

mix
    .js("resources/js/button-box.js", "dist/js")
    .postCss("resources/css/button-box.css", "dist/css")
    .options({
        processCssUrls: false
    });
