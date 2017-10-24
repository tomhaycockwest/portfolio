import gulp from 'gulp';
import del from 'del';

import config from 'gulp/config';

gulp.task('clean:build', (done) => {
	return del([ `${config.paths.build}/**` ], done);
});

gulp.task('clean:dist', (done) => {
	return del([ `${config.paths.dist}/**` ], done);
});

gulp.task('clean:temp', (done) => {
	return del([ `${config.paths.temp}/**` ], done);
});
