import gulp from 'gulp';
import runSequence from 'run-sequence';

gulp.task('default', (done) => {
	global.flags.watch = true;
	return runSequence([ 'build:dev', 'watch' ], done);
});
