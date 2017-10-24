/* eslint-disable */

/**
 * Gulp config
 */

import path from 'path';
import yargs from 'yargs';
import _  from 'lodash';

const args = yargs.argv;

const rootDir = '../../../..';
const assetsDir = '.';

require( 'dotenv' ).load( {
	silent: true,
	path: `${rootDir}/.env`
} );

 // Comand line flags
 // E.g. `gulp --notify` for displaying verbose notification when tasks run
global.flags = {
	dist: args.dist || false,
	watch: args.watch || false,
	notify: args.notify || false
};

const paths = {
	root: rootDir,
	assets: assetsDir,
	dist: `${rootDir}/dist`,
	temp: `${assetsDir}/temp`,
	build: `${assetsDir}/build`,
	sass: `${assetsDir}/sass`,
	img: `${assetsDir}/img`,
	scripts: `${assetsDir}/scripts`,
	fonts: `${assetsDir}/fonts`,
	data: `${assetsDir}/data`,
	bower: `${assetsDir}/bower`,

	get bundle(  ) { return this.build; },
	get css(  ) { return this.build; }
};


paths.plugins = `${rootDir}/public/app/plugins`;
paths.muPlugins = `${rootDir}/public/app/mu-plugins`;
paths.wpInc = `${rootDir}/public/wp/wp-includes`;


const files = {
	assets: `${assetsDir}/assets.json`
};

let globs = {
	ignore: '!./{node_modules,.sass-cache,bower,dist}/**/*.*',
	dist: `${paths.dist}/**/*.*`,
	build: `${paths.build}/**/*.*`,
	css: `${paths.css}/**/*.*`,
	sass: `${paths.sass}/**/*.{scss,sass}`,
	img: `${paths.img}/**/*.{gif,jpg,jpeg,png,svg}`,
	js: `${paths.scripts}/**/*.js`,
	scripts: `${paths.scripts}/**/*.{js,coffee}`,
	templates: `${paths.assets}/templates/**/*hbs*`,

	get livereload(  ) {

		const livereload = [
			this.build,
			this.css,
			this.img,
			this.html,
			this.php,
			this.templates,
			this.ignore
		];


			livereload.push( this.plugins );
			livereload.push( this.muPlugins );


		return livereload;
	}
}


	globs.html = `${paths.assets}/*.html`;
	globs.php = `${paths.assets}/**/*.php`;
	globs.plugins = `${paths.plugins}/**/*.*`;
	globs.muPlugins = `${paths.muPlugins}/**/*.*`;


/**
 * Recursivly convert globs from semi-absolute (`.food/bar) to relative (`foo/bar`)
 * This is so `gulp watch` can pick up on new files
 * @link http://stackoverflow.com/a/26851844
 * @param object _globs
 * @return object
 */
function convertGlobPaths( _globs ) {
	_.each( _globs, ( glob, key ) => {
		if( _.isArray( glob ) ) {
			glob = convertGlobPaths( glob );
			return;
		}
		_globs[ key ] = path.join( glob );
	} );
	return _globs;
}

globs = convertGlobPaths( globs );

module.exports = {
	pkg: require( path.resolve( './package.json' ) ),

	files,
	paths,
	globs,

	autoprefixer: {
		browsers: [ '> 1%', 'last 2 versions', 'Firefox ESR', 'Opera 12.1', 'Explorer >= 7', 'iOS >= 7' ],
		cascade: true
	},

	sass: {
		outputStyle: 'expanded',
		indentType: 'tab',
		indentWidth: 1
	},

	cssNano: {
		safe: true,
		autoprefixer: false,
		convertValues: false,
		margeRules: false
	},

	uglify: {
		outSourceMap: false,
		compress: false,
		preserveComments: false
	},

	browserify: {
		debug: !global.flags.dist, // Enable source maps
		extensions: [ '.js', '.coffee', '.hbs' ], // Additional file extensions
		bundleConfigs: [
			{
				entries: `${paths.scripts}/index.js`,
				dest: paths.bundle,
				outputName: 'bundle.js'
			}
		]
	},

	modernizr: {
		classPrefix: '',
		options: []
	}
};
