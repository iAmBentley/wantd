const mix = require('laravel-mix');
const domain = 'wantd.test';
const homedir = require('os').homedir();

require('laravel-mix-tailwind');
require('laravel-mix-purgecss');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
   .postCss('resources/css/app.css', 'public/css')
   .tailwind('./tailwind.config.js')
   .browserSync({
	   proxy: 'https://' + domain,
	   host: domain,
	   open: 'external',
	   https: {
		   key: homedir + '/.config/valet/Certificates/' + domain + '.key',
		   cert: homedir + '/.config/valet/Certificates/' + domain + '.crt',
	   }
	});

if (mix.inProduction()) {
  mix
   .version()
   .purgeCss();
}
