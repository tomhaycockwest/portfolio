// Watch & Livereload
// NB: Browserify handles its own recompilation

import gulp from 'gulp';
import util from 'gulp-util';
import livereload from 'gulp-livereload';
import _ from 'lodash';

import config from 'gulp/config';
import handleErrors from 'gulp/util/error-handler';

gulp.task('watch', () => {

	const server = livereload;

	server.listen();

	const watchers = {};

	watchers.livereload = gulp.watch(config.globs.livereload).on('change', server.changed);
	watchers.sass = gulp.watch(config.globs.sass, [ 'styles' ]);

	_.each(watchers, (watcher) => {
		watcher.on('error', (err) => {
			util.log(
				`${util.colors.red('Error')} in task`,
				`${util.colors.cyan('\'watch\'')}\n Message:\n ${util.colors.red(err)}`
			);
		});
	});
});
