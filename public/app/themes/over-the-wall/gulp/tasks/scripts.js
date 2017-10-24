import gulp from 'gulp';
import uglify from 'gulp-uglify';
import concat from 'gulp-concat';
import runSequence  from 'run-sequence';
import merge from 'merge-stream';

import config from 'gulp/config';
import handleErrors from 'gulp/util/error-handler';
import getAssets from 'gulp/util/get-assets';

gulp.task('scripts', (done) => {
	return runSequence(['browserify'], done);
});

gulp.task('scripts:dist', ['scripts'], (done) => {
	let header, footer;
	const assets = getAssets();

	if(assets.js.header.length) {
		header = gulp.src(assets.js.header)
			.pipe(uglify(config.uglify))
			.pipe(concat(`build-header-${config.pkg.version}.js`))
			.pipe(gulp.dest(config.paths.build));
	}

	if(assets.js.footer.length) {
		footer = gulp.src(assets.js.footer)
			.pipe(uglify(config.uglify))
			.pipe(concat(`build-footer-${config.pkg.version}.js`))
			.pipe(gulp.dest(config.paths.build));
	}

	return merge(header, footer);
});
