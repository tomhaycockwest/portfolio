import gulp from 'gulp';
import eslint from 'gulp-eslint';
import sassLint from 'gulp-sass-lint';
import gulpif from 'gulp-if';
import notify from 'gulp-notify';

import config from 'gulp/config';
import handleErrors from 'gulp/util/error-handler';

gulp.task('lint:styles', () => {
	return gulp.src(config.globs.sass)
		.pipe(sassLint({
			options: {
				formatter: 'stylish'
			},
			config: '.sass-lint.yml'
		}))
		.pipe(sassLint.format())
		.pipe(sassLint.failOnError())
		.on('error', handleErrors)
		.pipe(gulpif(global.flags.notify, notify({message: 'Lint styles task finished', onLast: true})));
});

gulp.task('lint', () => {
	return gulp.src(config.globs.js)
		.pipe(eslint())
		.pipe(eslint.format('node_modules/eslint-formatter-pretty'))
		.on('error', handleErrors)
		.pipe(gulpif(global.flags.notify, notify({message: 'Lint task finished', onLast: true})));
});
