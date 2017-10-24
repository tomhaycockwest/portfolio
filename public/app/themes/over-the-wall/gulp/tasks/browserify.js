import fs from 'fs';
import path from 'path';
import gulp from 'gulp';
import util from 'gulp-util';
import browserify from 'browserify';
import watchify from 'watchify';
import source from 'vinyl-source-stream';

import config from 'gulp/config';
import handleErrors from 'gulp/util/error-handler';
import {logStart, logEnd} from 'gulp/util/bundle-logger';

gulp.task('browserify', (done) => {

	let bundleQueue = config.browserify.bundleConfigs.length;

	function browserifyThis(bundleConfig) {

		if(!fs.existsSync(path.resolve(bundleConfig.entries))) {
			return done(new util.PluginError('browserify', `No script entry point exists, skipping Browserify. Path specified was: ${bundleConfig.entries}`)); // eslint-disable-line max-len
		}

		let bundler = browserify({
			// Required watchify args
			cache: {}, packageCache: {}, fullPaths: global.flags.watch,

			// Specify the entry point of your app
			entries: bundleConfig.entries,

			// Add file extensions to make optional in your requires
			extensions: config.browserify.extensions,

			// Additional search locations
			paths: bundleConfig.paths || config.paths.scripts || {},

			// Enable source maps!
			debug: config.browserify.debug
		});

		const bundle = function() {
			// Log when bundling starts
			logStart(bundleConfig.outputName);

			return bundler
				.bundle()

				// Report compile errors
				.on('error', handleErrors)

				// Use vinyl-source-stream to make the
				// stream gulp compatible. Specify the
				// desired output filename here.
				.pipe(source(bundleConfig.outputName))

				// Specify the output destination
				.pipe(gulp.dest(bundleConfig.dest))

				.on('end', reportFinished);
		};

		if(global.flags.watch) {
			// Wrap with watchify and rebundle on changes
			bundler = watchify(bundler);

			// Rebundle on update
			bundler.on('update', bundle);
		}

		function reportFinished() {
			// Log when bundling completes
			logEnd(bundleConfig.outputName);

			if(bundleQueue) {
				bundleQueue--;

				if(bundleQueue === 0) {
					// If queue is empty, tell gulp the task is complete.
					return done();
				}
			}

			return true;
		}

		return bundle();
	}

	// Start bundling with Browserify for each bundleConfig specified
	config.browserify.bundleConfigs.forEach(browserifyThis);

});
