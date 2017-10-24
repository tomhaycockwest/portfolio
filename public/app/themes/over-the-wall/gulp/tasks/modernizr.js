import path from 'path';
import gulp from 'gulp';
import modernizr from 'gulp-modernizr';
import gulpif from 'gulp-if';
import notify from 'gulp-notify';

import config from 'gulp/config';
import handleErrors from 'gulp/util/error-handler';

gulp.task('modernizr', (done) => {
	return gulp.src([config.globs.sass, config.globs.js])
		.pipe(modernizr(config.modernizr))
		.on('error', handleErrors)
		.pipe(gulp.dest(config.paths.bower))
		.pipe(gulpif(global.flags.notify, notify({message: 'Modernizr generated'})));
});
