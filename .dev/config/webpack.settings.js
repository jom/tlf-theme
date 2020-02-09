/* global module */

// Webpack settings exports.
module.exports = {
	entries: {
		// JS.
		'frontend': './.dev/assets/shared/js/frontend/frontend.js',

		// Design Style CSS.
		'design-styles/style-tlf': './.dev/assets/design-styles/tlf/css/style-tlf.css',
		'design-styles/style-tlf-editor': './.dev/assets/design-styles/tlf/css/style-tlf-editor.css',
	},
	paths: {
		src: {
			base: './.dev/assets/',
			sharedBase: './.dev/assets/shared/',
			sharedCss: './.dev/assets/shared/css/',
			sharedJs: './.dev/assets/shared/js/',
			adminCss: './.dev/assets/admin/css',
			tlfBase: './.dev/assets/design-styles/tlf/',
			tlfCss: './.dev/assets/design-styles/tlf/css/'
		},
		dist: {
			base: './dist/',
			clean: ['./images', './css', './js']
		},
	},
	stats: {
		all: false,
		errors: true,
		maxModules: 0,
		modules: true,
		warnings: true,
		assets: true,
		errorDetails: true,
		excludeAssets: /\.(jpe?g|png|gif|svg|woff|woff2|ttf)$/i,
		moduleTrace: true,
		performance: true
	},
	copyWebpackConfig: {
		from: '.dev/assets/**/*.{jpg,jpeg,png,gif,svg}',
		to: 'images/[path][name].[ext]',
		transformPath: ( targetPath ) => {
			return 'images/' + targetPath.replace( /(\.dev\/assets\/|images\/|shared\/)/g, '' );
		},
	},
	BrowserSyncConfig: {
		host: 'localhost',
		port: 3000,
		proxy: 'https://go.test',
		open: true,
		files: [
			'**/*.php',
			'dist/js/**/*.js',
			'dist/css/**/*.css',
			'dist/images/**/*.{jpg,jpeg,png,gif,svg}'
		]
	},
	performance: {
		maxAssetSize: 100000
	},
	manifestConfig: {
		basePath: ''
	},
};
