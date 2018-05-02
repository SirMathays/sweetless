let mix = require('laravel-mix');

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

mix.webpackConfig({
	resolve: {
		alias: {
			pages: path.resolve(__dirname, 'resources/assets/js/components/pages'),
			parts: path.resolve(__dirname, 'resources/assets/js/components/parts'),
			containers: path.resolve(__dirname, 'resources/assets/js/components/containers'),
		}
	}
})

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');
