const mix = require('laravel-mix');

// Required for BrowserSync to work with Valet Secure
const domain = 'wantd.test';
const homedir = require('os').homedir();

require('laravel-mix-tailwind');
require('laravel-mix-purgecss');

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
