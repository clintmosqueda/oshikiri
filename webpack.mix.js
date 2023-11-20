// webpack.mix.js
let mix = require("laravel-mix");
const THEME = "oshikiri";
const THEME_FOLDER = `wp-content/themes/${THEME}`;
const ASSETS_FOLDER = `wp-content/themes/${THEME}/assets`;

mix
  .options({
    processCssUrls: false,
  })
  .sass(`${THEME}/src/scss/app.scss`, `${ASSETS_FOLDER}/css/`)
  .js(`${THEME}/src/js/app.js`, `${ASSETS_FOLDER}/js/`);

mix.browserSync({
  proxy: `http://localhost:8888/${THEME}/`,
  files: [
    `${THEME_FOLDER}/**/*.css`,
    `${THEME_FOLDER}/**/*.php`,
    `${THEME_FOLDER}/**/*.js`,
  ],
});
