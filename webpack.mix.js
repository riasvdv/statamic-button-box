let mix = require("laravel-mix");

mix.options({
    processCssUrls: false,
});
mix.js("resources/js/button-box.js", "dist/js").vue();
mix.postCss("resources/css/button-box.css", "dist/css");
mix.copy("resources/fonts", "dist/fonts");
